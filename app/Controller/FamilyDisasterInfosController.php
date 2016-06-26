<?php
App::uses('AppController', 'Controller');
/**
 * FamilyDisasterInfos Controller
 *
 * @property FamilyDisasterInfo $FamilyDisasterInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyDisasterInfosController extends AppController {

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
		$this->FamilyDisasterInfo->recursive = 0;
		$this->set('familyDisasterInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyDisasterInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family disaster info'));
		}
		$options = array('conditions' => array('FamilyDisasterInfo.' . $this->FamilyDisasterInfo->primaryKey => $id));
		$this->set('familyDisasterInfo', $this->FamilyDisasterInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyDisasterInfo->create();
			if ($this->FamilyDisasterInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family disaster info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family disaster info could not be saved. Please, try again.'));
			}
		}
		$familyInfos = $this->FamilyDisasterInfo->FamilyInfo->find('list');
		$this->set(compact('familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyDisasterInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family disaster info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyDisasterInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family disaster info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family disaster info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyDisasterInfo.' . $this->FamilyDisasterInfo->primaryKey => $id));
			$this->request->data = $this->FamilyDisasterInfo->find('first', $options);
		}
		$familyInfos = $this->FamilyDisasterInfo->FamilyInfo->find('list');
		$this->set(compact('familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyDisasterInfo->id = $id;
		if (!$this->FamilyDisasterInfo->exists()) {
			throw new NotFoundException(__('Invalid family disaster info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyDisasterInfo->delete()) {
			$this->Session->setFlash(__('The family disaster info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family disaster info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
