<?php
App::uses('AppController', 'Controller');
/**
 * FamilyAgricultureInfos Controller
 *
 * @property FamilyAgricultureInfo $FamilyAgricultureInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamilyAgricultureInfosController extends AppController {

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
		$this->FamilyAgricultureInfo->recursive = 0;
		$this->set('familyAgricultureInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyAgricultureInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family agriculture info'));
		}
		$options = array('conditions' => array('FamilyAgricultureInfo.' . $this->FamilyAgricultureInfo->primaryKey => $id));
		$this->set('familyAgricultureInfo', $this->FamilyAgricultureInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyAgricultureInfo->create();
			if ($this->FamilyAgricultureInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family agriculture info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family agriculture info could not be saved. Please, try again.'));
			}
		}
		$products = $this->FamilyAgricultureInfo->Product->find('list');
		$familyInfos = $this->FamilyAgricultureInfo->FamilyInfo->find('list');
		$this->set(compact('products', 'familyInfos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyAgricultureInfo->exists($id)) {
			throw new NotFoundException(__('Invalid family agriculture info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyAgricultureInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The family agriculture info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family agriculture info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyAgricultureInfo.' . $this->FamilyAgricultureInfo->primaryKey => $id));
			$this->request->data = $this->FamilyAgricultureInfo->find('first', $options);
		}
		$products = $this->FamilyAgricultureInfo->Product->find('list');
		$familyInfos = $this->FamilyAgricultureInfo->FamilyInfo->find('list');
		$this->set(compact('products', 'familyInfos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyAgricultureInfo->id = $id;
		if (!$this->FamilyAgricultureInfo->exists()) {
			throw new NotFoundException(__('Invalid family agriculture info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FamilyAgricultureInfo->delete()) {
			$this->Session->setFlash(__('The family agriculture info has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family agriculture info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
