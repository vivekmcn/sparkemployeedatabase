<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'authorize' => array('Actions' => array('actionPath' => 'controllers') )
        )
    );
   
    public $helpers = array('Html', 'Form', 'Session');

    
    public function beforeFilter() {
        $url_compo  = explode('/', $_SERVER['REQUEST_URI']);
        if(isset($url_compo[3]))
            $url_compo[3]=preg_replace('/[_]+/', '', $url_compo[3]);
        if(isset($url_compo[3])){
            if($url_compo[3]=='login'){
                return;
            }
            if($url_compo[3]=='Employee'){
                return;
            }
        }
//        if(($url_compo[2] == "profiles" ) OR ($url_compo[2] == "Profiles")){
//            return;
//        }
        if(!$this->Session->read('Auth.User.id')){
            $this->redirect(array('controller' => 'Users','action' => 'login'));
        }
        $this->Auth->allow('index', 'view','add','edit','delete');
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }
}
