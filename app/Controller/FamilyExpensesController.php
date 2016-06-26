<?php
App::uses('AppController', 'Controller');
/**
 * FamilyExpenses Controller
 *
 * @property FamilyExpense $FamilyExpense
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyExpensesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FamilyExpense->recursive = 0;
		$this->set('familyExpenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyExpense->exists($id)) {
			throw new NotFoundException(__('Invalid family expense'));
		}
		$options = array('conditions' => array('FamilyExpense.' . $this->FamilyExpense->primaryKey => $id));
		$this->set('familyExpense', $this->FamilyExpense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyExpense->create();
			if ($this->FamilyExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The family expense has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family expense could not be saved. Please, try again.'));
			}
		}
		$expenses = $this->FamilyExpense->Expense->find('list');
		$familyInfos = $this->FamilyExpense->FamilyInfo->find('list');
		$this->set(compact('expenses', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyExpense->exists($id)) {
			throw new NotFoundException(__('Invalid family expense'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The family expense has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family expense could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyExpense.' . $this->FamilyExpense->primaryKey => $id));
			$this->request->data = $this->FamilyExpense->find('first', $options);
		}
		$expenses = $this->FamilyExpense->Expense->find('list');
		$familyInfos = $this->FamilyExpense->FamilyInfo->find('list');
		$this->set(compact('expenses', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyExpense->id = $id;
		if (!$this->FamilyExpense->exists()) {
			throw new NotFoundException(__('Invalid family expense'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyExpense->delete()) {
			$this->Session->setFlash(__('The family expense has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family expense could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
