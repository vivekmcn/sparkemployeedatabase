<?php
require_once APP . 'Vendor' . DS.'img.php';
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 */
class EmployeesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                        $allowedExts = array("gif", "jpeg", "jpg", "png");
                        if ((($this->request->data['Employee']["image"]["type"] == "image/gif")
                            || ($this->request->data['Employee']["image"]["type"] == "image/jpeg")
                            || ($this->request->data['Employee']["image"]["type"] == "image/jpg")
                            || ($this->request->data['Employee']["image"]["type"] == "image/pjpeg")
                            || ($this->request->data['Employee']["image"]["type"] == "image/x-png")
                            || ($this->request->data['Employee']["image"]["type"] == "image/png"))
                            && ($this->request->data['Employee']["image"]["size"] < 694936)){
                                if(!file_exists(WWW_ROOT.'files/Avatars/')){
                                    mkdir(WWW_ROOT.'files/Avatars/');
                                }
                                if(!file_exists(WWW_ROOT.'files/PICs/')){
                                    mkdir(WWW_ROOT.'files/PICs/');
                                }
                                move_uploaded_file($this->request->data['Employee']["image"]["tmp_name"],WWW_ROOT.'files/PICs/'. $this->request->data['Employee']["image"]["name"]);
                                $resize = new ResizeImage(WWW_ROOT.'files/PICs/'. $this->request->data['Employee']["image"]["name"]);
                                $resize->resizeTo(144,153, 'exact');
                                $resize->saveImage(WWW_ROOT.'files/Avatars/'. $this->request->data['Employee']["image"]["name"]);
                                $data   =   array();
                                $data['Employee']['fname']                      = $this->request->data['Employee']["fname"];
                                $data['Employee']['lname']                      = $this->request->data['Employee']["lname"];
                                $data['Employee']['email']                      = $this->request->data['Employee']["email"];
                                $data['Employee']['dateofbirth']                = $this->request->data['Employee']["dateofbirth"];
                                $data['Employee']['phone_number']               = $this->request->data['Employee']["phone_number"];
                                $data['Employee']['employeeposition_id']        = $this->request->data['Employee']["employeeposition_id"];
                                $data['Employee']['employeequalification_id']   = $this->request->data['Employee']["employeequalification_id"];
                                $data['Employee']['image']                      = $this->request->data['Employee']["image"]["name"];
                                $this->Employee->create();
                                if ($this->Employee->save($data)) {
                                    $this->Session->setFlash(__('The employee has been saved'));
                                    $this->redirect(array('action' => 'index'));
                                } else {
                                    $this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
                                }
                            }
                            else{
                                $this->Session->setFlash("Please upload another image");
                            }
			
		}
		$employeepositions = $this->Employee->Employeeposition->find('list',array('fields' => array('id','position_name')));
		$employeequalifications = $this->Employee->Employeequalification->find('list',array('fields' => array('id','qualification_name')));
		$this->set(compact('employeepositions', 'employeequalifications'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    //echo "<pre>";print_r($this->request->data);exit;
                        if ($this->Employee->save($this->request->data,false)){
                                $this->request->data['Employee']['dateofbirth'] =   (string) $this->request->data['Employee']['dateofbirth']; 
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
		$employeepositions = $this->Employee->Employeeposition->find('list',array('fields' => array('id','position_name')));
		$employeequalifications = $this->Employee->Employeequalification->find('list',array('fields' => array('id','qualification_name')));
		$this->set(compact('employeepositions', 'employeequalifications'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('Employee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}
        
        
        
        public function getempname($id=null){
            
            if(isset($id)){
                $empdata    =   $this->Employee->find('first',array('conditions' => array('id' => $id)));
                
                return $empdata['Employee']['fname']." ".$empdata['Employee']['lname'];
            }
            return "";
        }
        

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		}
		$employeepositions = $this->Employee->Employeeposition->find('list');
		$employeequalifications = $this->Employee->Employeequalification->find('list');
		$this->set(compact('employeepositions', 'employeequalifications'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
		$employeepositions = $this->Employee->Employeeposition->find('list');
		$employeequalifications = $this->Employee->Employeequalification->find('list');
		$this->set(compact('employeepositions', 'employeequalifications'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('Employee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
