<?php
App::uses('AppController', 'Controller');
/**
 * Employeepositions Controller
 *
 * @property Employeeposition $Employeeposition
 */
class EmployeepositionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employeeposition->recursive = 0;
		$this->set('employeepositions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeeposition->exists($id)) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		$options = array('conditions' => array('Employeeposition.' . $this->Employeeposition->primaryKey => $id));
		$this->set('employeeposition', $this->Employeeposition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeeposition->create();
			if ($this->Employeeposition->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeposition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeposition could not be saved. Please, try again.'));
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
		if (!$this->Employeeposition->exists($id)) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeposition->save($this->request->data,false)) {
				$this->Session->setFlash(__('The employeeposition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeposition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeposition.' . $this->Employeeposition->primaryKey => $id));
			$this->request->data = $this->Employeeposition->find('first', $options);
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
		$this->Employeeposition->id = $id;
		if (!$this->Employeeposition->exists()) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeposition->delete()) {
			$this->Session->setFlash(__('Employeeposition deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeposition was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employeeposition->recursive = 0;
		$this->set('employeepositions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employeeposition->exists($id)) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		$options = array('conditions' => array('Employeeposition.' . $this->Employeeposition->primaryKey => $id));
		$this->set('employeeposition', $this->Employeeposition->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employeeposition->create();
			if ($this->Employeeposition->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeposition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeposition could not be saved. Please, try again.'));
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
		if (!$this->Employeeposition->exists($id)) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeposition->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeposition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeposition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeposition.' . $this->Employeeposition->primaryKey => $id));
			$this->request->data = $this->Employeeposition->find('first', $options);
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
		$this->Employeeposition->id = $id;
		if (!$this->Employeeposition->exists()) {
			throw new NotFoundException(__('Invalid employeeposition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeposition->delete()) {
			$this->Session->setFlash(__('Employeeposition deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeposition was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
