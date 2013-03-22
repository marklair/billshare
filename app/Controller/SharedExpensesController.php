<?php
App::uses('AppController', 'Controller');
/**
 * SharedExpenses Controller
 *
 * @property SharedExpense $SharedExpense
 */
class SharedExpensesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SharedExpense->recursive = 0;
		$this->set('sharedExpenses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SharedExpense->id = $id;
		if (!$this->SharedExpense->exists()) {
			throw new NotFoundException(__('Invalid shared expense'));
		}
		$this->set('sharedExpense', $this->SharedExpense->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SharedExpense->create();
			if ($this->SharedExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The shared expense has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shared expense could not be saved. Please, try again.'));
			}
		}
		$billingcycles = $this->SharedExpense->Billingcycle->find('list');
		$households = $this->SharedExpense->Household->find('list');
		$this->set(compact('billingcycles', 'households'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SharedExpense->id = $id;
		if (!$this->SharedExpense->exists()) {
			throw new NotFoundException(__('Invalid shared expense'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SharedExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The shared expense has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shared expense could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SharedExpense->read(null, $id);
		}
		$billingcycles = $this->SharedExpense->Billingcycle->find('list');
		$households = $this->SharedExpense->Household->find('list');
		$this->set(compact('billingcycles', 'households'));
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
		$this->SharedExpense->id = $id;
		if (!$this->SharedExpense->exists()) {
			throw new NotFoundException(__('Invalid shared expense'));
		}
		if ($this->SharedExpense->delete()) {
			$this->Session->setFlash(__('Shared expense deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shared expense was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
