<?php
App::uses('AppController', 'Controller');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 * @property PaginatorComponent $Paginator
 */
class AppointmentsController extends AppController {
	
	private $morning_shift_starts = 9;
	private $morning_shift_ends = 13;
	private $afternoon_shift_starts = 14;
	private $afternoon_shift_ends = 18;

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');


	public function index() {
		$this->layout = 'appointment' ;
	}

	public function beforeFilter() {
		$this->Auth->allow('index','events_free', 'request_save', 'request');
	}

	public function clear() {
		
		$this->layout = null;
		$this->view = null;
		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$received_range_start = $params->start;
		$received_range_end = $params->end;

		$this->Appointment->deleteAll( ['appointment_status' => 'free'  ,
											  'appointment_end >= ' => $params->start , 
										      'appointment_end <= ' => $params->end
										], false);

		$response = new stdClass();
		$response->result = 'OK';
		$response->message = 'Cleared';

		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	}

	public function create() {

		$this->layout = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$received_range_start = $params->start;
		$received_range_end = $params->end;

		$start = new DateTime($received_range_start);
		$start_day = clone $start;
		$start_day->setTime(0, 0, 0);

		$end = new DateTime($received_range_end);
		$end_day = clone $end;
		$end_day->setTime(0, 0, 0);

		$days = $end_day->diff($start_day)->days;

		if ($end > $end_day) {
		  $days += 1;
		}

		$scale = $params->scale;
		$doctor_id = $params->resource;

		$timeline = $this->load_timeline($params->scale, $days, $start_day, $doctor_id);

		$slot_duration = 60;
		

		foreach ($timeline as $cell) {
		  if ($start <= $cell->start && $cell->end <= $end) {
			for ($shift_start = clone $cell->start; $shift_start < $cell->end; $shift_start->add(new DateInterval("PT" . $slot_duration . "M"))) {
			  $shift_end = clone $shift_start;
			  $shift_end->add(new DateInterval("PT" . $slot_duration . "M"));
			  $this->create_shift($shift_start->format("Y-m-d\\TH:i:s"), $shift_end->format("Y-m-d\\TH:i:s"), $doctor_id);
			}
		  }
		}

		$response = new stdClass();
		$response->result = 'OK';
		$response->message = 'Espacio disponible creado';
		//$response->id = $db->lastInsertId();

		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	
	}

	public function create_shift($start, $end, $user_id) {

		$this->Appointment->create();

		$arr = array();

		$arr['Appointment']['appointment_start'] = $start;
		$arr['Appointment']['appointment_end']	 = $end;
		$arr['Appointment']['user_id']			 = $user_id;

		return $this->Appointment->save($arr);

	}



	public function delete() {

		$this->layout = null;
		$this->view = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$this->Appointment->id = $params->id;

		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Cita no encontrada'));
		}

		$this->request->allowMethod('post', 'delete');
		$this->Appointment->delete();
		
		$response = new stdClass();
		$response->result = 'OK';
		$response->message = 'Cita eliminada';

		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	}


	public function events() {
		
		$this->layout = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$appointments = $this->Appointment->find( 'all', array('conditions' => 
															array('appointment_end >=' =>  $params->start) , 
															array('appointment_start <=' => $params->end))  );

		$events = array();

		foreach($appointments as $row) {
		  $e = new stdClass();
		  $e->id = $row['Appointment']['id'];
		  $e->text = $row['Appointment']['appointment_patient_name'] ?: "";
		  $e->start = $row['Appointment']['appointment_start'];
		  $e->end = $row['Appointment']['appointment_end'];
		  $e->resource = $row['User']['id'];
		  $e->tags = new stdClass();
		  $e->tags->status = $row['Appointment']['appointment_status'];
		  $events[] = $e;
		}

		header('Content-Type: application/json');
		echo json_encode($events);
		die;
	}


	public function events_doctor() {
		
		$this->layout = null;
		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$result = $this->Appointment->find('all', ['conditions' => [['Appointment.user_id' => $params->doctor], ['appointment_end >=' => $params->start], ['appointment_start <=' => $params->end]]]);

		$events = array();

		foreach($result as $row) {
		  $e = new stdClass();
		  $e->id = $row['Appointment']['id'];
		  $e->text = $row['Appointment']['appointment_patient_name'];
		  $e->start = $row['Appointment']['appointment_start'];
		  $e->end = $row['Appointment']['appointment_end'];
		  $e->resource = $row['Appointment']['user_id'];
		  $e->tags = new stdClass();
		  $e->tags->status = $row['Appointment']['appointment_status'];
		  $events[] = $e;
		}

		header('Content-Type: application/json');
		echo json_encode($events);
		die;
	
	}


	public function events_free() {

		$this->layout = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$session_id = session_id();

		$appointments = $this->Appointment->find( 'all', array('conditions' => array(
			
		'AND' => array( 
					'OR' => 
					array(
						array('appointment_status' => 'free' ),
						'AND' =>
							array(
								array('appointment_status <>' => 'free' ), 
								array('appointment_patient_session' => $session_id)
							)
					)
				),
				array('appointment_end >=' =>  $params->start  ),
				array('appointment_start <=' =>  $params->end  )		
		)));

/*
WHERE (appointment_status = 'free' OR (appointment_status <> 'free' AND appointment_patient_session = :session)) AND NOT ((appointment_end <= :start) OR (appointment_start >= :end))

	*/	
		
		
		$events = array();

		foreach($appointments as $row) {

		  $e = new stdClass();
		  $e->id = $row['Appointment']['id'];
		  $e->text = "";
		  $e->start = $row['Appointment']['appointment_start'];
		  $e->end = $row['Appointment']['appointment_end'];
		  $e->tags = new stdClass();
		  $e->tags->status = $row['Appointment']['appointment_status'];
		  $e->tags->doctor = $row['User']['name'];
		  $events[] = $e;
		}

		header('Content-Type: application/json');
		echo json_encode($events);
		die;
	}


	public function move() {

		$this->layout = null;
		$this->view = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$this->Appointment->id = $params->e->id;
		$arr = array();
		$arr['Appointment']['appointment_start']	= $params->newStart;
		$arr['Appointment']['appointment_end']		= $params->newEnd;

		$response = new stdClass();

		if( $this->Appointment->save($arr) ) {

			$response->result = 'OK';
			$response->message = 'Cita guardada';
		} else {
			$response->result = 'Error';
			$response->message = 'Error al guardar la cita';
		}

		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	}


	public function request_save() {

		$this->layout = null;
		$this->view = null;
		$session = session_id();

		$this->Appointment->id = $this->request->data['id'];

		$arr = array();
		$response = new stdClass();

		$arr['Appointment']['appointment_patient_name']		= $this->request->data['name'];
		$arr['Appointment']['appointment_patient_phone']	= $this->request->data['phone'];
		$arr['Appointment']['appointment_patient_session']	= $session;
		$arr['Appointment']['appointment_status']			= 'waiting';

		if( $this->Appointment->save($arr) ) {

			$response->result = 'OK';
			$response->message = 'Cita guardada';
		} else {
			$response->result = 'Error';
			$response->message = 'Error al guardar la cita';
		}
		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	
	}

	public function resources() {

		$this->loadModel('User');
		$scheduler_doctors = $this->User->find('all', ['conditions' => ['User.status_id' => '1'], ['order' => 'User.name']]);

		$result = array();

		foreach($scheduler_doctors as $doctor) {
		  $r = new stdClass();
		  $r->id = $doctor['User']['id'];
		  $r->name = $doctor['User']['name'];
		  $result[] = $r;
		}

		header('Content-Type: application/json');
		echo json_encode($result);
		die;
	}


	public function update() {

		$this->layout = null;
		$this->view = null;

		$json = file_get_contents('php://input');
		$params = json_decode($json);

		$this->Appointment->id = $params->id;

		$arr = array();
		$response = new stdClass();

		$arr['Appointment']['appointment_patient_name']		= $params->name;
		$arr['Appointment']['appointment_status']			= $params->status;

		if( $this->Appointment->save($arr) ) {

			$response->result = 'OK';
			$response->message = 'Cita guardada';

		} else {
			$response->result = 'Error';
			$response->message = 'Error al guardar la cita';
		}

		header('Content-Type: application/json');
		echo json_encode($response);
		die;
	
	}


	public function load_timeline($scale, $days, $start_day, $user_id) {
	  $this->getShiftHours($user_id);

	  switch ($scale) {
		case "hours":
		  $increment_morning = 1;
		  $increment_afternoon = 1;
		  break;
		case "shifts":
		  $increment_morning = $this->morning_shift_ends - $this->morning_shift_starts;
		  $increment_afternoon = $this->afternoon_shift_ends - $this->afternoon_shift_starts;
		  break;
		default:
		  die("Invalid scale");
	  }

	  $timeline = array();

	  for ($i = 0; $i < $days; $i++) {
		$day = clone $start_day;
		$day->add(new DateInterval("P" . $i . "D"));

		for ($x = $this->morning_shift_starts; $x < $this->morning_shift_ends; $x += $increment_morning) {
		  $cell = new stdClass();

		  $from = clone $day;
		  $from->add(new DateInterval("PT" . $x . "H"));

		  $to = clone $day;
		  $to->add(new DateInterval("PT" . ($x + $increment_morning) . "H"));

		  $cell->start = $from;
		  $cell->end = $to;
		  $timeline[] = $cell;
		}

		for ($x = $this->afternoon_shift_starts; $x < $this->afternoon_shift_ends; $x += $increment_afternoon) {
		  $cell = new stdClass();

		  $from = clone $day;
		  $from->add(new DateInterval("PT" . $x . "H"));

		  $to = clone $day;
		  $to->add(new DateInterval("PT" . ($x + $increment_afternoon) . "H"));

		  $cell->start = $from;
		  $cell->end = $to;
		  $timeline[] = $cell;
		}

	  }

	  return $timeline;
	}

	public function request( $id ) {

		$this->layout = 'appointment_request';
		$appointment = $this->Appointment->find('first', ['conditions' => ['Appointment.id' => $id]]);

		$this->set(compact('appointment'));
	}

	public function manager() {
		
		$this->set(compact('appointment'));
	}


	public function doctor() {
		
		$this->loadModel('User');
		$users = $this->User->find('list', array('fields' => array('User.id', 'User.name'), 'conditions' => array( 'User.status_id' => '1')));
		$doctor = $this->Auth->user('id');

		$this->set(compact('users'));
		$this->set('doctor', $doctor);
	}

	public function appointment_edit($id) {
		$this->layout = 'appointment_request';
		$appointment = $this->Appointment->find('first', ['conditions' => ['Appointment.id' => $id]]);

		$this->set(compact('appointment'));

		$this->loadModel('User');
		$users = $this->User->find('list', array('fields' => array('User.id', 'User.name'), 'conditions' => array( 'User.status_id' => '1')));

		$this->set(compact('users'));
		
	}


	private function getShiftHours($user_id) {
		
		$this->loadModel('User');
		$doctor = $this->User->find('first', ['conditions' => ['User.id' => $user_id]]);

		$this->morning_shift_starts = $doctor['User']['morning_shift_starts'];
		$this->morning_shift_ends = $doctor['User']['morning_shift_ends'];
		$this->afternoon_shift_starts = $doctor['User']['afternoon_shift_starts'];
		$this->afternoon_shift_ends = $doctor['User']['afternoon_shift_ends'];

		
	}
}
