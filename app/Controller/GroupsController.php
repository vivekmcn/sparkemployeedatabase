<?php
    class GroupsController extends AppController{
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow();
        }
        
        
    public function add() {
        if ($this->request->is('post')) {
            $this->Group->create();
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('The Group has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The Group could not be saved. Please, try again.'));
        }
    }
    }
?>
