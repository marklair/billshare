<?php
App::uses('AppController', 'Controller');
/**
 * Payfreqs Controller
 *
 * @property Payfreq $Payfreq
 */
class PayfreqsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Payfreq->recursive = 0;
		$this->set('payfreqs', $this->paginate());
	
		$myself = ($this->Auth->user());
		
		$this->set('myself', $myself);
		
		
		//print_r($myself); // use to debug user
	
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Payfreq->id = $id;
		if (!$this->Payfreq->exists()) {
			throw new NotFoundException(__('Invalid payfreq'));
		}
		$this->set('payfreq', $this->Payfreq->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Payfreq->create();
			if ($this->Payfreq->save($this->request->data)) {
				$this->Session->setFlash(__('The payfreq has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payfreq could not be saved. Please, try again.'));
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
		$this->Payfreq->id = $id;
		if (!$this->Payfreq->exists()) {
			throw new NotFoundException(__('Invalid payfreq'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Payfreq->save($this->request->data)) {
				$this->Session->setFlash(__('The payfreq has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payfreq could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Payfreq->read(null, $id);
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
		$this->Payfreq->id = $id;
		if (!$this->Payfreq->exists()) {
			throw new NotFoundException(__('Invalid payfreq'));
		}
		if ($this->Payfreq->delete()) {
			$this->Session->setFlash(__('Payfreq deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payfreq was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
