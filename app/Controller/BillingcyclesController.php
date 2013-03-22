<?php
App::uses('AppController', 'Controller');
/**
 * Billingcycles Controller
 *
 * @property Billingcycle $Billingcycle
 */
class BillingcyclesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Billingcycle->recursive = 0;
		$this->set('billingcycles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Billingcycle->id = $id;
		if (!$this->Billingcycle->exists()) {
			throw new NotFoundException(__('Invalid billingcycle'));
		}
		$this->set('billingcycle', $this->Billingcycle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Billingcycle->create();
			if ($this->Billingcycle->save($this->request->data)) {
				$this->Session->setFlash(__('The billingcycle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingcycle could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Billingcycle->id = $id;
		if (!$this->Billingcycle->exists()) {
			throw new NotFoundException(__('Invalid billingcycle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Billingcycle->save($this->request->data)) {
				$this->Session->setFlash(__('The billingcycle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billingcycle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Billingcycle->read(null, $id);
		}
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
		$this->Billingcycle->id = $id;
		if (!$this->Billingcycle->exists()) {
			throw new NotFoundException(__('Invalid billingcycle'));
		}
		if ($this->Billingcycle->delete()) {
			$this->Session->setFlash(__('Billingcycle deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Billingcycle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
