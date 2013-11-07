<?php
App::uses('AppController', 'Controller');
/**
 * Employeequalifications Controller
 *
 * @property Employeequalification $Employeequalification
 */
class EmployeequalificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employeequalification->recursive = 0;
		$this->set('employeequalifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeequalification->exists($id)) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		$options = array('conditions' => array('Employeequalification.' . $this->Employeequalification->primaryKey => $id));
		$this->set('employeequalification', $this->Employeequalification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeequalification->create();
			if ($this->Employeequalification->save($this->request->data)) {
				$this->Session->setFlash(__('The employeequalification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeequalification could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employeequalification->exists($id)) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeequalification->save($this->request->data,false)) {
				$this->Session->setFlash(__('The employeequalification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeequalification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeequalification.' . $this->Employeequalification->primaryKey => $id));
			$this->request->data = $this->Employeequalification->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employeequalification->id = $id;
		if (!$this->Employeequalification->exists()) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeequalification->delete()) {
			$this->Session->setFlash(__('Employeequalification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeequalification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employeequalification->recursive = 0;
		$this->set('employeequalifications', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employeequalification->exists($id)) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		$options = array('conditions' => array('Employeequalification.' . $this->Employeequalification->primaryKey => $id));
		$this->set('employeequalification', $this->Employeequalification->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employeequalification->create();
			if ($this->Employeequalification->save($this->request->data)) {
				$this->Session->setFlash(__('The employeequalification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeequalification could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Employeequalification->exists($id)) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeequalification->save($this->request->data)) {
				$this->Session->setFlash(__('The employeequalification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeequalification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeequalification.' . $this->Employeequalification->primaryKey => $id));
			$this->request->data = $this->Employeequalification->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Employeequalification->id = $id;
		if (!$this->Employeequalification->exists()) {
			throw new NotFoundException(__('Invalid employeequalification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeequalification->delete()) {
			$this->Session->setFlash(__('Employeequalification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeequalification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
