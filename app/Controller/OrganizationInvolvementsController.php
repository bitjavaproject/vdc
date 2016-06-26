<?php
App::uses('AppController', 'Controller');
/**
 * OrganizationInvolvements Controller
 *
 * @property OrganizationInvolvement $OrganizationInvolvement
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OrganizationInvolvementsController extends AppController {

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
		$this->OrganizationInvolvement->recursive = 0;
		$this->set('organizationInvolvements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrganizationInvolvement->exists($id)) {
			throw new NotFoundException(__('Invalid organization involvement'));
		}
		$options = array('conditions' => array('OrganizationInvolvement.' . $this->OrganizationInvolvement->primaryKey => $id));
		$this->set('organizationInvolvement', $this->OrganizationInvolvement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrganizationInvolvement->create();
			if ($this->OrganizationInvolvement->save($this->request->data)) {
				$this->Session->setFlash(__('The organization involvement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organization involvement could not be saved. Please, try again.'));
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
		if (!$this->OrganizationInvolvement->exists($id)) {
			throw new NotFoundException(__('Invalid organization involvement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrganizationInvolvement->save($this->request->data)) {
				$this->Session->setFlash(__('The organization involvement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organization involvement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganizationInvolvement.' . $this->OrganizationInvolvement->primaryKey => $id));
			$this->request->data = $this->OrganizationInvolvement->find('first', $options);
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
		$this->OrganizationInvolvement->id = $id;
		if (!$this->OrganizationInvolvement->exists()) {
			throw new NotFoundException(__('Invalid organization involvement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganizationInvolvement->delete()) {
			$this->Session->setFlash(__('The organization involvement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organization involvement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
