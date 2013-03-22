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
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
//	var $namedArgs = FALSE; 
//	var $argSeparator = ":"; 

//    function getNamedArgs() { 
//        if ($this->namedArgs) { 
//			$this->namedArgs = array(); 
//			if (!empty($this->params['pass'])) { 
//               foreach ($this->params['pass'] as $param) { 
//                    if (strpos($param, $this->argSeparator)) { 
//                        list($name, $val) = split( this->argSeparator, $param ); // something wrong with this line
//                        $this->namedArgs[$name] = $val; 
//                    } 
//                } 
//            } 
//        } 
//        return TRUE; 
//    } 


    public $components = array(
        'Session',
        'Auth' => array(
            //'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
			'loginRedirect' => array('controller' => 'users', 'action' => 'login'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
            'authorize' => array('Controller') // Added this line
        )
    );

//	public function isAuthorized() {
//		return true;
//	}

	public function isAuthorized($user) {
		if (isset($user['role'])) {
			if ($user['role'] === 'admin') {
				$this->set('role', $user['role']);
				$this->set('household_id', $user['household_id']);
				$this->set('user_id', $user['id']);
				//$user_id = $user['id'];
				return true; //Yes this person is an admin
			}
			if ($user['role'] === 'hoh') {
				$this->set('role', $user['role']);
				$this->set('household_id', $user['household_id']);
				$this->set('user_id', $user['id']);
				//$user_id = $user['id'];
				return true; //Yes this person is a head of house
			}
			if ($user['role'] === 'user') {
				$this->set('role', $user['role']);
				$this->set('household_id', $user['household_id']);
				$this->set('user_id', $user['id']);
				//$user_id = $user['id'];
				return true; //Yes this person is a user
			}
			return false; // He is not an admin
		}
	}



    public function beforeFilter() {
        //$this->Auth->allow('index', 'view');
        $this->Auth->allow('display', 'login');
    }

}
