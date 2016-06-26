<?php
App::uses('AppController', 'Controller');
/**
 * FamilyForeignInfos Controller
 *
 * @property FamilyForeignInfo $FamilyForeignInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyForeignInfosController extends AppController {

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
		$this->FamilyForeignInfo->recursive = 0;
		$this->set('familyForeignInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyForeignInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family foreign info'));
		}
		$options = array('conditions' => array('FamilyForeignInfo.' . $this->FamilyForeignInfo->primaryKey => $id));
		$this->set('familyForeignInfo', $this->FamilyForeignInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyForeignInfo->create();
			if ($this->FamilyForeignInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family foreign info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family foreign info could not be saved. Please, try again.'));
			}
		}
		$genders = $this->FamilyForeignInfo->Gender->find('list');
		$familyInfos = $this->FamilyForeignInfo->FamilyInfo->find('list');
		$this->set(compact('genders', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyForeignInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family foreign info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyForeignInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family foreign info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family foreign info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyForeignInfo.' . $this->FamilyForeignInfo->primaryKey => $id));
			$this->request->data = $this->FamilyForeignInfo->find('first', $options);
		}
		$genders = $this->FamilyForeignInfo->Gender->find('list');
		$familyInfos = $this->FamilyForeignInfo->FamilyInfo->find('list');
		$this->set(compact('genders', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyForeignInfo->id = $id;
		if (!$this->FamilyForeignInfo->exists()) {
			throw new NotFoundException(__('Invalid family foreign info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyForeignInfo->delete()) {
			$this->Session->setFlash(__('The family foreign info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family foreign info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
