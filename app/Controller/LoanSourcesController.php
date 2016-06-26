<?php
App::uses('AppController', 'Controller');
/**
 * LoanSources Controller
 *
 * @property LoanSource $LoanSource
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LoanSourcesController extends AppController {

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
		$this->LoanSource->recursive = 0;
		$this->set('loanSources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LoanSource->exists($id)) {
			throw new NotFoundException(__('Invalid loan source'));
		}
		$options = array('conditions' => array('LoanSource.' . $this->LoanSource->primaryKey => $id));
		$this->set('loanSource', $this->LoanSource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoanSource->create();
			if ($this->LoanSource->save($this->request->data)) {
				$this->Session->setFlash(__('The loan source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan source could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LoanSource->exists($id)) {
			throw new NotFoundException(__('Invalid loan source'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LoanSource->save($this->request->data)) {
				$this->Session->setFlash(__('The loan source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan source could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LoanSource.' . $this->LoanSource->primaryKey => $id));
			$this->request->data = $this->LoanSource->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LoanSource->id = $id;
		if (!$this->LoanSource->exists()) {
			throw new NotFoundException(__('Invalid loan source'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LoanSource->delete()) {
			$this->Session->setFlash(__('The loan source has been deleted.'));
		} else {
			$this->Session->setFlash(__('The loan source could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
