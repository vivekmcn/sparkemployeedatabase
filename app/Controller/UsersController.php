<?php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(); // Letting users register themselves
          $this->Auth->allow('initDB');
    }

    public function login() {
        if($this->Session->read('Auth.User.id')){
            $this->redirect(array('action' => 'dashboard'));
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if($this->Session->read('Auth.User.group_id')==0){
                    $this->redirect(array('action' => 'dashboard'));
                }
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    public function dashboard(){
        app::import('model','Employee');
        app::import('model','Project');
        app::import('model','Skill');
        $employeeobj        =   new Employee();
        $projectobj         =   new Project();
        $skillobj           =   new Skill();
        $employeecount      =   $employeeobj->find('count');
        $projectcount       =   $projectobj->find('count');
        $skillcount         =   $skillobj->find('count');
        $empdet             =   $employeeobj->find('all',array('conditions' => array('dateofbirth' => '')));
        $this->set(compact('employeecount','projectcount','skillcount'));
    }
    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }
    public function initDB() {
        $group = $this->User->Group;
    //Allow admins to everything
      $group->id = 1;
     $this->Acl->allow($group, 'controllers');

    //allow managers to posts and widgets
//    $group->id = 2;
//    $this->Acl->deny($group, 'controllers');
//   ;

    //allow users to only add and edit on posts and widgets
//    $group->id = 3;
//    $this->Acl->deny($group, 'controllers');
   
    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
}
?>