<?php
App::uses('AppController', 'Controller');
/**
 * PersonalExpenses Controller
 *
 * @property PersonalExpense $PersonalExpense
 */
class PersonalExpensesController extends AppController {




/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalExpense->recursive = 0;
		$this->set('personalExpenses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonalExpense->id = $id;
		if (!$this->PersonalExpense->exists()) {
			throw new NotFoundException(__('Invalid personal expense'));
		}
		$this->set('personalExpense', $this->PersonalExpense->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//debug($this->Auth->user('id'));
			if (($this->request->data['PersonalExpense']['user_id']) == ($this->Auth->user('id'))) {
				$this->PersonalExpense->create();
				if ($this->PersonalExpense->save($this->request->data)) {
					$this->Session->setFlash(__('The personal expense has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The personal expense could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('You cannot save a personal expense under someone else\'s account!'));
			}
		}
		$users = $this->PersonalExpense->User->find('list');
		$billingcycles = $this->PersonalExpense->Billingcycle->find('list');
		$this->set(compact('users', 'billingcycles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonalExpense->id = $id;
		if (!$this->PersonalExpense->exists()) {
			throw new NotFoundException(__('Invalid personal expense'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The personal expense has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal expense could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PersonalExpense->read(null, $id);
		}
		$users = $this->PersonalExpense->User->find('list');
		$billingcycles = $this->PersonalExpense->Billingcycle->find('list');
		$this->set(compact('users', 'billingcycles'));
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
		$this->PersonalExpense->id = $id;
		if (!$this->PersonalExpense->exists()) {
			throw new NotFoundException(__('Invalid personal expense'));
		}
		if ($this->PersonalExpense->delete()) {
			$this->Session->setFlash(__('Personal expense deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personal expense was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
