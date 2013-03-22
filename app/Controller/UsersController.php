<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    //var $namedArgs = true; 

    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
        //$this->getNamedArgs(); 
		
		// Load action specific models
//		switch ($this->params['action']) {
//			case 'users':		$models = array('Household'); break;
//		}
//		if (!empty($models)) {
//			foreach ($models as $model) {
//				$this->loadModel($model);
//			}
//		}
        
    }

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('you are logged in', null),
					'default',
					array('class' => 'flash-message-success'));
				$this->redirect($this->Auth->redirect('pages/home'));
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
		$myself = ($this->Auth->user());
		
		$this->set('myself', $myself);
		
		
		//print_r($myself); // use to debug user
	}
	
	public function logout() {
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());

		if ($this->Auth->user('role') == 'admin') {
			$users = $this->paginate('User',array(
				'role' => array (
						'admin',
						'hoh',
						'user'
					)
				)
			);
		} elseif($this->Auth->user('role') == 'hoh') {
			$users = $this->paginate('User',array(
				'role' => array (
						'hoh',
						'user'
					),
				'household_id' => ($this->Auth->user('household_id'))
				)
			);
		} else {
			$users = $this->paginate('User',array(
				'role' => array (
						'hoh',
						'user'
					),
				'household_id' => ($this->Auth->user('household_id'))
				)
			);
		}

		
		$this->set('users', $users);
		//debug($this->Auth->user());
		//debug($this->Session);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
		
		//debug($this->params);
		//debug($this->User);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// this get request will be for email invites
		$invite = '0';
		
		if ($this->request->is('get')) {
			if ((isset($this->params['pass']['1'])) && isset($this->params['pass']['0'])) { 
				//debug($this->params);

				$inviteCode = $this->params['pass']['0'];

				// if check out invite code
				$invite = '1';
				$household = $this->params['pass']['1'];
				$this->set('invite', $invite);
				$this->set('household', $household);					
				// end check out invite code

				
				//$this->Session->setFlash(__($myParam1));/// testing purposes---- remove
				//$this->redirect($this->Auth->logout());/// testing purposes---- remove					
			}

		}
		
		if ($this->request->is('post')) {

			$this->loadModel('Household');
			$newHousehold = new Household(); 
			$newHousehold->create();
			// saves default information
			if ($newHousehold->save(array('address' => 'enter address here',
			'city' => 'enter city here',
			'state' => 'enter state here',
			'zip' => '00000',
			'country' => 'USA'))) {
				$last_id = $newHousehold->getInsertId();
				$this->Session->setFlash(__('The household has been saved. You may now configure your household.'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The household could not be saved. Please, try again.'));
			}
			
			
			$this->request->data['User']['household_id'] = $last_id;
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				//$this->Session->setFlash(__('The user has been saved'));
				$user_id = $this->User->getInsertId();
				$user = $this->User->findById($user_id);
				$user = $user['User'];
				if($this->Auth->login($user)) {
					$this->redirect(array('controller' => 'households', 'action' => 'edit', $last_id));
				}
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}

		}
		$households = $this->User->Household->find('list');
		$payfreqs = $this->User->Payfreq->find('list');
		$this->set(compact('households', 'payfreqs'));
		$this->set('invite', $invite);
//		$this->set('last_id', $last_id);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		//debug($this->params);
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved', null), 
					'default',
					array('class' => 'flash-message-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$households = $this->User->Household->find('list');
		$payfreqs = $this->User->Payfreq->find('list');
		$this->set(compact('households', 'payfreqs'));
		$this->set('user', $id);
		$household = ($this->User->data['Household']['id']);
		//debug($this->User);
		$this->set('household', $household);
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
