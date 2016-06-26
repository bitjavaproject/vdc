<?php
App::uses('AppController', 'Controller');
/**
 * FamilyAgeGroups Controller
 *
 * @property FamilyAgeGroup $FamilyAgeGroup
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyAgeGroupsController extends AppController {

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
		$this->FamilyAgeGroup->recursive = 0;
		$this->set('familyAgeGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyAgeGroup->exists($id)) {
			throw new NotFoundException(__('Invalid family age group'));
		}
		$options = array('conditions' => array('FamilyAgeGroup.' . $this->FamilyAgeGroup->primaryKey => $id));
		$this->set('familyAgeGroup', $this->FamilyAgeGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyAgeGroup->create();
			if ($this->FamilyAgeGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The family age group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family age group could not be saved. Please, try again.'));
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
		if (!$this->FamilyAgeGroup->exists($id)) {
			throw new NotFoundException(__('Invalid family age group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyAgeGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The family age group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family age group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyAgeGroup.' . $this->FamilyAgeGroup->primaryKey => $id));
			$this->request->data = $this->FamilyAgeGroup->find('first', $options);
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
		$this->FamilyAgeGroup->id = $id;
		if (!$this->FamilyAgeGroup->exists()) {
			throw new NotFoundException(__('Invalid family age group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyAgeGroup->delete()) {
			$this->Session->setFlash(__('The family age group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family age group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
