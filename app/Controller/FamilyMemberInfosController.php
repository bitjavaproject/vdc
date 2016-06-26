<?php
App::uses('AppController', 'Controller');
/**
 * FamilyMemberInfos Controller
 *
 * @property FamilyMemberInfo $FamilyMemberInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyMemberInfosController extends AppController {

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
		$this->FamilyMemberInfo->recursive = 0;
		$this->set('familyMemberInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyMemberInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family member info'));
		}
		$options = array('conditions' => array('FamilyMemberInfo.' . $this->FamilyMemberInfo->primaryKey => $id));
		$this->set('familyMemberInfo', $this->FamilyMemberInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyMemberInfo->create();
			if ($this->FamilyMemberInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family member info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family member info could not be saved. Please, try again.'));
			}
		}
		$familyAgeGroups = $this->FamilyMemberInfo->FamilyAgeGroup->find('list');
		$genders = $this->FamilyMemberInfo->Gender->find('list');
		$familyDesgnationInfos = $this->FamilyMemberInfo->FamilyDesgnationInfo->find('list');
		$familyInfos = $this->FamilyMemberInfo->FamilyInfo->find('list');
		$this->set(compact('familyAgeGroups', 'genders', 'familyDesgnationInfos', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyMemberInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family member info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyMemberInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family member info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family member info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyMemberInfo.' . $this->FamilyMemberInfo->primaryKey => $id));
			$this->request->data = $this->FamilyMemberInfo->find('first', $options);
		}
		$familyAgeGroups = $this->FamilyMemberInfo->FamilyAgeGroup->find('list');
		$genders = $this->FamilyMemberInfo->Gender->find('list');
		$familyDesgnationInfos = $this->FamilyMemberInfo->FamilyDesgnationInfo->find('list');
		$familyInfos = $this->FamilyMemberInfo->FamilyInfo->find('list');
		$this->set(compact('familyAgeGroups', 'genders', 'familyDesgnationInfos', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyMemberInfo->id = $id;
		if (!$this->FamilyMemberInfo->exists()) {
			throw new NotFoundException(__('Invalid family member info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyMemberInfo->delete()) {
			$this->Session->setFlash(__('The family member info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family member info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
