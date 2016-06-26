<?php
App::uses('AppController', 'Controller');
/**
 * FamilyInfos Controller
 *
 * @property FamilyInfo $FamilyInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyInfosController extends AppController {

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
		$this->FamilyInfo->recursive = 0;
		$this->set('familyInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family info'));
		}
		$familyInfo	=	$this->FamilyInfo->find('first',array('conditions'=>array('FamilyInfo.id'=>$id),'contain'=>array('FamilyMemberInfo'=>array('FamilyAgeGroup'))));
		$this->set(compact('familyInfo'));
		//debug($familyInfo);exit; 
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyInfo->create();
			if ($this->FamilyInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family info could not be saved. Please, try again.'));
			}
		}
		$organizationInvolvements = $this->FamilyInfo->OrganizationInvolvement->find('list');
		$this->set(compact('organizationInvolvements'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyInfo.' . $this->FamilyInfo->primaryKey => $id));
			$this->request->data = $this->FamilyInfo->find('first', $options);
		}
		$organizationInvolvements = $this->FamilyInfo->OrganizationInvolvement->find('list');
		$this->set(compact('organizationInvolvements'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyInfo->id = $id;
		if (!$this->FamilyInfo->exists()) {
			throw new NotFoundException(__('Invalid family info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyInfo->delete()) {
			$this->Session->setFlash(__('The family info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
