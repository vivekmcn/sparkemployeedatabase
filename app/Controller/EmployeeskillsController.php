<?php
App::uses('AppController', 'Controller');
/**
 * Employeeskills Controller
 *
 * @property Employeeskill $Employeeskill
 */
class EmployeeskillsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employeeskill->recursive = 0;
		$this->set('employeeskills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employeeskill->exists($id)) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		$options = array('conditions' => array('Employeeskill.' . $this->Employeeskill->primaryKey => $id));
		$this->set('employeeskill', $this->Employeeskill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employeeskill->create();
			if ($this->Employeeskill->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeskill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeskill could not be saved. Please, try again.'));
			}
		}
		$skills = $this->Employeeskill->Skill->find('list',array('fields' => array('id','skillname')));
                $employees = $this->Employeeskill->Employee->find('list',array('fields' => array('id','fname')));
		$this->set(compact('skills', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employeeskill->exists($id)) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeskill->save($this->request->data,false)) {
				$this->Session->setFlash(__('The employeeskill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeskill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeskill.' . $this->Employeeskill->primaryKey => $id));
			$this->request->data = $this->Employeeskill->find('first', $options);
		}
		$skills = $this->Employeeskill->Skill->find('list');
		$employees = $this->Employeeskill->Employee->find('list');
		$this->set(compact('skills', 'employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employeeskill->id = $id;
		if (!$this->Employeeskill->exists()) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeskill->delete()) {
			$this->Session->setFlash(__('Employeeskill deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeskill was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employeeskill->recursive = 0;
		$this->set('employeeskills', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employeeskill->exists($id)) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		$options = array('conditions' => array('Employeeskill.' . $this->Employeeskill->primaryKey => $id));
		$this->set('employeeskill', $this->Employeeskill->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employeeskill->create();
			if ($this->Employeeskill->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeskill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeskill could not be saved. Please, try again.'));
			}
		}
		$skills = $this->Employeeskill->Skill->find('list');
		$employees = $this->Employeeskill->Employee->find('list');
		$this->set(compact('skills', 'employees'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Employeeskill->exists($id)) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employeeskill->save($this->request->data)) {
				$this->Session->setFlash(__('The employeeskill has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employeeskill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employeeskill.' . $this->Employeeskill->primaryKey => $id));
			$this->request->data = $this->Employeeskill->find('first', $options);
		}
		$skills = $this->Employeeskill->Skill->find('list');
		$employees = $this->Employeeskill->Employee->find('list');
		$this->set(compact('skills', 'employees'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Employeeskill->id = $id;
		if (!$this->Employeeskill->exists()) {
			throw new NotFoundException(__('Invalid employeeskill'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employeeskill->delete()) {
			$this->Session->setFlash(__('Employeeskill deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employeeskill was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
