<?php
App::uses('AppController', 'Controller');
/**
 * FamilyDesgnationInfos Controller
 *
 * @property FamilyDesgnationInfo $FamilyDesgnationInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyDesgnationInfosController extends AppController {

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
		$this->FamilyDesgnationInfo->recursive = 0;
		$this->set('familyDesgnationInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyDesgnationInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family desgnation info'));
		}
		$options = array('conditions' => array('FamilyDesgnationInfo.' . $this->FamilyDesgnationInfo->primaryKey => $id));
		$this->set('familyDesgnationInfo', $this->FamilyDesgnationInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyDesgnationInfo->create();
			if ($this->FamilyDesgnationInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family desgnation info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family desgnation info could not be saved. Please, try again.'));
			}
		}
		$designationTypes = $this->FamilyDesgnationInfo->DesgnationType->find('list');
		$genders = $this->FamilyDesgnationInfo->Gender->find('list');
		$familyInfos = $this->FamilyDesgnationInfo->FamilyInfo->find('list');
		$this->set(compact('designationTypes', 'genders', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyDesgnationInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family desgnation info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyDesgnationInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family desgnation info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family desgnation info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyDesgnationInfo.' . $this->FamilyDesgnationInfo->primaryKey => $id));
			$this->request->data = $this->FamilyDesgnationInfo->find('first', $options);
		}
		$designationTypes = $this->FamilyDesgnationInfo->DesgnationType->find('list');
		$genders = $this->FamilyDesgnationInfo->Gender->find('list');
		$familyInfos = $this->FamilyDesgnationInfo->FamilyInfo->find('list');
		$this->set(compact('designationTypes', 'genders', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyDesgnationInfo->id = $id;
		if (!$this->FamilyDesgnationInfo->exists()) {
			throw new NotFoundException(__('Invalid family desgnation info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyDesgnationInfo->delete()) {
			$this->Session->setFlash(__('The family desgnation info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family desgnation info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
