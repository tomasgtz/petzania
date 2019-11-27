<?php
App::uses('AppController', 'Controller');
/**
 * Encounters Controller
 *
 * @property Encounter $Encounter
 * @property PaginatorComponent $Paginator
 */
class EncountersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Encounter->recursive = 0;
		$this->set('encounters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Encounter->exists($id)) {
			throw new NotFoundException(__('Consulta no encontrada'));
		}
		$options = array('conditions' => array('Encounter.' . $this->Encounter->primaryKey => $id));
		$this->set('encounter', $this->Encounter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {

		if ($this->request->is('post')) {
			$this->Encounter->create();
			if ($this->Encounter->save($this->request->data)) {
				$this->Flash->success(__('La consulta ha sido guardada'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La informacion de la consulta no pudo ser guardada. Por favor, intente nuevamente.'));
			}
		}
		
		$this->loadModel('User');
		$user = $this->User->find('first', array('conditions' => array( 'User.id' => $userId = $this->Auth->user('id'))));

		$this->loadModel('Patient');
		$patient = $this->Patient->find('first', array('conditions' => array( 'Patient.id' => $id)));

		date_default_timezone_set('America/Monterrey');
		$current_datetime = date("Y-m-d") . 'T' . date("H:i") ;
		
		$this->set(compact('patient', 'user', 'status', 'current_datetime'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Encounter->exists($id)) {
			throw new NotFoundException(__('Consulta no encontrada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Encounter->save($this->request->data)) {
				$this->Flash->success(__('La consulta ha sido guardada'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La informacion de la consulta no pudo ser guardada. Por favor, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Encounter.' . $this->Encounter->primaryKey => $id));
			$this->request->data = $this->Encounter->find('first', $options);
		}

		$this->loadModel('User');
		$users = $this->User->find('list', array('conditions' => array( 'User.status_id' => '1')));

		$this->loadModel('Patient');
		$patient = $this->Patient->find('first', array('conditions' => array( 'Patient.id' => $this->Encounter->patient_id)));
		
		date_default_timezone_set('America/Monterrey');
		$current_datetime = substr($this->request->data["Encounter"]["encounter_date"], 0, 10) . 'T' . substr($this->request->data["Encounter"]["encounter_date"], 11, 16) ;

        $statuses = $this->User->Status->find('list', array('fields'=> array('id', 'text')));
		$this->set(compact('patient', 'users', 'statuses', 'current_datetime'));

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Encounter->id = $id;
		if (!$this->Encounter->exists()) {
			throw new NotFoundException(__('Consulta no encontrada'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Encounter->delete()) {
			$this->Flash->success(__('La consulta ha sido borrada'));
		} else {
			$this->Flash->error(__('La consulta no pudo ser borrada. Por favor, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
