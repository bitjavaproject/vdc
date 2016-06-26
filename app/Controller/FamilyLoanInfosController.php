<?php
App::uses('AppController', 'Controller');
/**
 * FamilyLoanInfos Controller
 *
 * @property FamilyLoanInfo $FamilyLoanInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyLoanInfosController extends AppController {

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
		$this->FamilyLoanInfo->recursive = 0;
		$this->set('familyLoanInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyLoanInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family loan info'));
		}
		$options = array('conditions' => array('FamilyLoanInfo.' . $this->FamilyLoanInfo->primaryKey => $id));
		$this->set('familyLoanInfo', $this->FamilyLoanInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyLoanInfo->create();
			if ($this->FamilyLoanInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family loan info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family loan info could not be saved. Please, try again.'));
			}
		}
		$loanSources = $this->FamilyLoanInfo->LoanSource->find('list');
		$familyInfos = $this->FamilyLoanInfo->FamilyInfo->find('list');
		$this->set(compact('loanSources', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyLoanInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family loan info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyLoanInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family loan info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family loan info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyLoanInfo.' . $this->FamilyLoanInfo->primaryKey => $id));
			$this->request->data = $this->FamilyLoanInfo->find('first', $options);
		}
		$loanSources = $this->FamilyLoanInfo->LoanSource->find('list');
		$familyInfos = $this->FamilyLoanInfo->FamilyInfo->find('list');
		$this->set(compact('loanSources', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyLoanInfo->id = $id;
		if (!$this->FamilyLoanInfo->exists()) {
			throw new NotFoundException(__('Invalid family loan info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyLoanInfo->delete()) {
			$this->Session->setFlash(__('The family loan info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family loan info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
