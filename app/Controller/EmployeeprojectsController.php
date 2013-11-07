<?php
App::uses('AppController', 'Controller');
/**
 * Employeeprojects Controller
 *
 * @property Employeeproject $Employeeproject
 */
class EmployeeprojectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employeeproject->recursive = 0;
		$this->set('employeeprojects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeeproject->exists($id)) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		$options = array('conditions' => array('Employeeproject.' . $this->Employeeproject->primaryKey => $id));
		$this->set('employeeproject', $this->Employeeproject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeeproject->create();
			if ($this->Employeeproject->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeproject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeproject could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Employeeproject->Employee->find('list',array('fields' => array('id','fname')));
		$projects = $this->Employeeproject->Project->find('list',array('fields' => array('id','title')));
		$this->set(compact('employees', 'projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employeeproject->exists($id)) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeproject->save($this->request->data,false)) {
				$this->Session->setFlash(__('The employeeproject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeproject could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeproject.' . $this->Employeeproject->primaryKey => $id));
			$this->request->data = $this->Employeeproject->find('first', $options);
		}
		$employees = $this->Employeeproject->Employee->find('list');
		$projects = $this->Employeeproject->Project->find('list');
		$this->set(compact('employees', 'projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employeeproject->id = $id;
		if (!$this->Employeeproject->exists()) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeproject->delete()) {
			$this->Session->setFlash(__('Employeeproject deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeproject was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employeeproject->recursive = 0;
		$this->set('employeeprojects', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employeeproject->exists($id)) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		$options = array('conditions' => array('Employeeproject.' . $this->Employeeproject->primaryKey => $id));
		$this->set('employeeproject', $this->Employeeproject->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employeeproject->create();
			if ($this->Employeeproject->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeproject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeproject could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Employeeproject->Employee->find('list');
		$projects = $this->Employeeproject->Project->find('list');
		$this->set(compact('employees', 'projects'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Employeeproject->exists($id)) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeproject->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeproject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeproject could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeproject.' . $this->Employeeproject->primaryKey => $id));
			$this->request->data = $this->Employeeproject->find('first', $options);
		}
		$employees = $this->Employeeproject->Employee->find('list');
		$projects = $this->Employeeproject->Project->find('list');
		$this->set(compact('employees', 'projects'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Employeeproject->id = $id;
		if (!$this->Employeeproject->exists()) {
			throw new NotFoundException(__('Invalid employeeproject'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeproject->delete()) {
			$this->Session->setFlash(__('Employeeproject deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeproject was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
