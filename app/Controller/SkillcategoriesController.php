<?php
App::uses('AppController', 'Controller');
/**
 * Skillcategories Controller
 *
 * @property Skillcategory $Skillcategory
 */
class SkillcategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Skillcategory->recursive = 0;
		$this->set('skillcategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Skillcategory->exists($id)) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		$options = array('conditions' => array('Skillcategory.' . $this->Skillcategory->primaryKey => $id));
		$this->set('skillcategory', $this->Skillcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Skillcategory->create();
			if ($this->Skillcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The skillcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skillcategory could not be saved. Please, try again.'));
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
		if (!$this->Skillcategory->exists($id)) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Skillcategory->save($this->request->data,false)) {
				$this->Session->setFlash(__('The skillcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skillcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Skillcategory.' . $this->Skillcategory->primaryKey => $id));
                        
			$this->request->data = $this->Skillcategory->find('first', $options);
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
		$this->Skillcategory->id = $id;
		if (!$this->Skillcategory->exists()) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Skillcategory->delete()) {
			$this->Session->setFlash(__('Skillcategory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Skillcategory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Skillcategory->recursive = 0;
		$this->set('skillcategories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Skillcategory->exists($id)) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		$options = array('conditions' => array('Skillcategory.' . $this->Skillcategory->primaryKey => $id));
		$this->set('skillcategory', $this->Skillcategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Skillcategory->create();
			if ($this->Skillcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The skillcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skillcategory could not be saved. Please, try again.'));
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
		if (!$this->Skillcategory->exists($id)) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Skillcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The skillcategory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skillcategory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Skillcategory.' . $this->Skillcategory->primaryKey => $id));
			$this->request->data = $this->Skillcategory->find('first', $options);
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
		$this->Skillcategory->id = $id;
		if (!$this->Skillcategory->exists()) {
			throw new NotFoundException(__('Invalid skillcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Skillcategory->delete()) {
			$this->Session->setFlash(__('Skillcategory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Skillcategory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
