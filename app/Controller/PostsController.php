<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow('index');
    }

	public function isAuthorized($user) {
		if (parent::isAuthorized($user)) {
			return true;
		}
	
		if ($this->action === 'add') {
		   // All registered users can add posts
			return true;
		}

//		if (in_array($this->action, array('view'))) {
//			$postId = $this->request->params['pass'][0];
//			return $this->Post->belongsToHousehold($postId, $user['household_id']);
//		}

		if (in_array($this->action, array('edit', 'delete'))) {
			$postId = $this->request->params['pass'][0];
			return $this->Post->isOwnedBy($postId, $user['id']);
		}
	
		return false;
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 1;
		$this->set('posts', $this->paginate());

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
			//debug($this->Auth->user());
			if (($this->Auth->user('role') == 'admin') || ($this->request->data['Post']['household_id'] == $this->Auth->user('household_id'))) {
				$this->Post->create();
				if ($this->Post->save($this->request->data)) {
					$this->Session->setFlash(__('The post has been saved', null),
					'default',
					array('class' => 'flash-message-success'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('You cannot add a post to a household that is not your own!'));
			}
		}
		$households = $this->Post->Household->find('list');
		$users = $this->Post->User->find('list');
		$this->set(compact('households', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved', null),
				'default',
				array('class' => 'flash-message-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Post->read(null, $id);
		}
		$households = $this->Post->Household->find('list');
		$users = $this->Post->User->find('list');
		$this->set(compact('households', 'users'));
		$post = ($this->Post->data);
		//debug($this->Post->data);
		$this->set('post', $post);
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
