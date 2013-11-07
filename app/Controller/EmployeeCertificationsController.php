<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeCertifications Controller
 *
 * @property EmployeeCertification $EmployeeCertification
 */
class EmployeeCertificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeeCertification->recursive = 0;
		$this->set('employeeCertifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeeCertification->exists($id)) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		$options = array('conditions' => array('EmployeeCertification.' . $this->EmployeeCertification->primaryKey => $id));
		$this->set('employeeCertification', $this->EmployeeCertification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeCertification->create();
			if ($this->EmployeeCertification->save($this->request->data)) {
				$this->Session->setFlash(__('The employee certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee certification could not be saved. Please, try again.'));
			}
		}
		$employees = $this->EmployeeCertification->Employee->find('list',array('fields' => array('id','fname')));
		$certifications = $this->EmployeeCertification->Certification->find('list',array('fields' => array('id','certification_name')));
		$this->set(compact('employees', 'certifications'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmployeeCertification->exists($id)) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeeCertification->save($this->request->data,false)) {
				$this->Session->setFlash(__('The employee certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee certification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeeCertification.' . $this->EmployeeCertification->primaryKey => $id));
			$this->request->data = $this->EmployeeCertification->find('first', $options);
		}
		$employees = $this->EmployeeCertification->Employee->find('list',array('fields' => array('id','fname')));
		$certifications = $this->EmployeeCertification->Certification->find('list',array('fields' => array('id','certification_name')));
		$this->set(compact('employees', 'certifications'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmployeeCertification->id = $id;
		if (!$this->EmployeeCertification->exists()) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmployeeCertification->delete()) {
			$this->Session->setFlash(__('Employee certification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee certification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EmployeeCertification->recursive = 0;
		$this->set('employeeCertifications', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EmployeeCertification->exists($id)) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		$options = array('conditions' => array('EmployeeCertification.' . $this->EmployeeCertification->primaryKey => $id));
		$this->set('employeeCertification', $this->EmployeeCertification->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EmployeeCertification->create();
			if ($this->EmployeeCertification->save($this->request->data)) {
				$this->Session->setFlash(__('The employee certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee certification could not be saved. Please, try again.'));
			}
		}
		$employees = $this->EmployeeCertification->Employee->find('list');
		$certifications = $this->EmployeeCertification->Certification->find('list');
		$this->set(compact('employees', 'certifications'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EmployeeCertification->exists($id)) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeeCertification->save($this->request->data)) {
				$this->Session->setFlash(__('The employee certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee certification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeeCertification.' . $this->EmployeeCertification->primaryKey => $id));
			$this->request->data = $this->EmployeeCertification->find('first', $options);
		}
		$employees = $this->EmployeeCertification->Employee->find('list');
		$certifications = $this->EmployeeCertification->Certification->find('list');
		$this->set(compact('employees', 'certifications'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EmployeeCertification->id = $id;
		if (!$this->EmployeeCertification->exists()) {
			throw new NotFoundException(__('Invalid employee certification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmployeeCertification->delete()) {
			$this->Session->setFlash(__('Employee certification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee certification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
