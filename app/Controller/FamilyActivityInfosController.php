<?php
App::uses('AppController', 'Controller');
/**
 * FamilyActivityInfos Controller
 *
 * @property FamilyActivityInfo $FamilyActivityInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyActivityInfosController extends AppController {

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
		$this->FamilyActivityInfo->recursive = 0;
		$this->set('familyActivityInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyActivityInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family activity info'));
		}
		$options = array('conditions' => array('FamilyActivityInfo.' . $this->FamilyActivityInfo->primaryKey => $id));
		$this->set('familyActivityInfo', $this->FamilyActivityInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyActivityInfo->create();
			if ($this->FamilyActivityInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family activity info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family activity info could not be saved. Please, try again.'));
			}
		}
		$activities = $this->FamilyActivityInfo->Activity->find('list');
		$genders = $this->FamilyActivityInfo->Gender->find('list');
		$familyInfos = $this->FamilyActivityInfo->FamilyInfo->find('list');
		$this->set(compact('activities', 'genders', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyActivityInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family activity info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyActivityInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family activity info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family activity info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyActivityInfo.' . $this->FamilyActivityInfo->primaryKey => $id));
			$this->request->data = $this->FamilyActivityInfo->find('first', $options);
		}
		$activities = $this->FamilyActivityInfo->Activity->find('list');
		$genders = $this->FamilyActivityInfo->Gender->find('list');
		$familyInfos = $this->FamilyActivityInfo->FamilyInfo->find('list');
		$this->set(compact('activities', 'genders', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyActivityInfo->id = $id;
		if (!$this->FamilyActivityInfo->exists()) {
			throw new NotFoundException(__('Invalid family activity info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyActivityInfo->delete()) {
			$this->Session->setFlash(__('The family activity info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family activity info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
