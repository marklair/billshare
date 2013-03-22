<?php
App::uses('AppController', 'Controller');
/**
 * PersonalExpenses Controller
 *
 * @property PersonalExpense $PersonalExpense
 */
class BudgetReportsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow('index');
		
    }
	public function isAuthorized($user) {
		if (parent::isAuthorized($user)) {
			return true;
		}
	}

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'BudgetReports';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$this->loadModel('User', 2);
		
		$this->Auth->isAuthorized('user');
				
		$myself = ($this->Auth->user());
		
		$this->set('myself', $myself);
		
		
		//print_r($myself); // use to debug user


		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
		
	}
	
	public function index($amt = null) {
		$this->loadModel('User', 2);
		$this->Auth->isAuthorized('user');
		$myself = ($this->Auth->user());
		$this->set('myself', $myself);
		
		$spend = $myself['income_amt'] - $amt;
		$this->set('spend', $spend);
	}
}

































/**
 * index method
 *
 * @return void
 */
//	public function index() {
//		$this->BudgetReport->recursive = 0;
		//$this->set('budgetreport', $this->paginate());
//	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
//	public function view($id = null) {
//		$this->PersonalExpense->id = $id;
//		if (!$this->PersonalExpense->exists()) {
//			throw new NotFoundException(__('Invalid personal expense'));
//		}
//		$this->set('personalExpense', $this->PersonalExpense->read(null, $id));
//	}

/**
 * add method
 *
 * @return void
 */
//	public function add() {
//		if ($this->request->is('post')) {
//			//debug($this->Auth->user('id'));
//			if (($this->request->data['PersonalExpense']['user_id']) == ($this->Auth->user('id'))) {
//				$this->PersonalExpense->create();
//				if ($this->PersonalExpense->save($this->request->data)) {
//					$this->Session->setFlash(__('The personal expense has been saved'));
//					$this->redirect(array('action' => 'index'));
//				} else {
//					$this->Session->setFlash(__('The personal expense could not be saved. Please, try again.'));
//				}
//			} else {
//				$this->Session->setFlash(__('You cannot save a personal expense under someone else\'s account!'));
//			}
//		}
//		$users = $this->PersonalExpense->User->find('list');
//		$billingcycles = $this->PersonalExpense->Billingcycle->find('list');
//		$this->set(compact('users', 'billingcycles'));
//	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
//	public function edit($id = null) {
//		$this->PersonalExpense->id = $id;
//		if (!$this->PersonalExpense->exists()) {
//			throw new NotFoundException(__('Invalid personal expense'));
//		}
//		if ($this->request->is('post') || $this->request->is('put')) {
//			if ($this->PersonalExpense->save($this->request->data)) {
//				$this->Session->setFlash(__('The personal expense has been saved'));
//				$this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The personal expense could not be saved. Please, try again.'));
//			}
//		} else {
//			$this->request->data = $this->PersonalExpense->read(null, $id);
//		}
//		$users = $this->PersonalExpense->User->find('list');
//		$billingcycles = $this->PersonalExpense->Billingcycle->find('list');
//		$this->set(compact('users', 'billingcycles'));
//	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
//	public function delete($id = null) {
//		if (!$this->request->is('post')) {
//			throw new MethodNotAllowedException();
//		}
//		$this->PersonalExpense->id = $id;
//		if (!$this->PersonalExpense->exists()) {
//			throw new NotFoundException(__('Invalid personal expense'));
//		}
//		if ($this->PersonalExpense->delete()) {
//			$this->Session->setFlash(__('Personal expense deleted'));
//			$this->redirect(array('action' => 'index'));
//		}
//		$this->Session->setFlash(__('Personal expense was not deleted'));
//		$this->redirect(array('action' => 'index'));
//	}
//}
