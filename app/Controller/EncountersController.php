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
		$patients = $this->Encounter->Patient->find('list');
		$users = $this->Encounter->User->find('list');
		$statuses = $this->Encounter->Status->find('list');
		$this->set(compact('patients', 'users', 'statuses'));
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
