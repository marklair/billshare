<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {
	
	public function isAuthorized($user) {
		if (parent::isAuthorized($user)) {
			return true;
		}
	
		if ($this->action === 'add') {
		   // All registered users can add comments
			return true;
		}

//		if (in_array($this->action, array('view'))) {
//			$postId = $this->request->params['pass'][0];
//			return $this->Post->belongsToHousehold($postId, $user['household_id']);
//		}

		if (in_array($this->action, array('add', 'edit', 'delete'))) {
			$postId = $this->request->params['pass'][1];
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
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());

		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comment->id = $id;
		debug($this->params);
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Comment->recursive = 1;
		//debug($this->Comment);
		if ($this->request->is('get')) {
			
			//debug($this->params);
			
			if ((isset($this->params['pass']['1'])) && isset($this->params['pass']['0'])) {
				$post_id = ($this->params['pass']['1']);
				$this->set('post_id', $post_id);
				$commentPost = $this->Comment->Post->findById($post_id);
				//debug($commentPost['Post']['household_id']);
				$CommentHouseholdID = ($commentPost['Post']['household_id']);
				$this->set('CommentHouseholdID', $CommentHouseholdID);
				
			}
		} elseif ($this->request->is('post')) {
			$post_id = ($this->params['pass']['1']);
			$commentPost = $this->Comment->Post->findById($post_id);
			//debug($commentPost);
			//debug($this->params);
			// below checks to see if anyone has tampered with the form or URL
			if (
				($this->data['Comment']['user_id'] == $this->Auth->user('id')) && 
				($this->data['Comment']['household_id'] == $this->Auth->user('household_id')) && 
				($commentPost['Post']['household_id'] == $this->Auth->user('household_id')) && 
				($commentPost['Post']['id'] == $this->data['Comment']['post_id'])) {
				$this->Comment->create();
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('The comment has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('A Data Mismatch has occurred.'));
			}
			$this->set('post_id', $post_id);
			$CommentHouseholdID = ($commentPost['Post']['household_id']);
			$this->set('CommentHouseholdID', $CommentHouseholdID);
		}
		$users = $this->Comment->User->find('list');
		$households = $this->Comment->Household->find('list');
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('users', 'households', 'posts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comment->recursive = 1;
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//$post_id = ($this->data['Comment']['post_id']);
			$comment_id = ($this->data['Comment']['id']);
			$commentPost = $this->Comment->findById($comment_id);
			//debug($commentPost);
			//debug($this->data);
			// below checks to see if anyone has tampered with the form or URL
			if (
				($this->data['Comment']['user_id'] == $this->Auth->user('id')) && 
				($this->data['Comment']['household_id'] == $this->Auth->user('household_id')) && 
				($commentPost['Comment']['user_id'] == $this->Auth->user('id')) && 
				($commentPost['Post']['id'] == $this->data['Comment']['post_id'])) {
				$this->Session->setFlash(__('everything looks good.'));
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('The comment has been saved', null),
					'default',
					array('class' => 'flash-message-success'));
					$this->redirect(array('action' => 'index'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
				}
			} elseif (($this->Auth->user('role')) == 'admin') {
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('The comment has been saved', null),
					'default',
					array('class' => 'flash-message-success'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
				}				
			} else {
				$this->Session->setFlash(__('A Data Mismatch has occurred.'));
			}
			$this->set('comment_id', $comment_id);
			$CommentHouseholdID = ($commentPost['Post']['household_id']);
			$this->set('CommentHouseholdID', $CommentHouseholdID);
		} else {
			$this->request->data = $this->Comment->read(null, $id);
		}
		//$this->set('comment_id', $comment_id);
		debug ($this->Auth->user());
		$users = $this->Comment->User->find('list');
		$households = $this->Comment->Household->find('list');
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('users', 'households', 'posts'));
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
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('Comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
