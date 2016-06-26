<?php
App::uses('AppController', 'Controller');
/**
 * BathRoomConditions Controller
 *
 * @property BathRoomCondition $BathRoomCondition
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BathRoomConditionsController extends AppController {

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
		$this->BathRoomCondition->recursive = 0;
		$this->set('bathRoomConditions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BathRoomCondition->exists($id)) {
			throw new NotFoundException(__('Invalid bath room condition'));
		}
		$options = array('conditions' => array('BathRoomCondition.' . $this->BathRoomCondition->primaryKey => $id));
		$this->set('bathRoomCondition', $this->BathRoomCondition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BathRoomCondition->create();
			if ($this->BathRoomCondition->save($this->request->data)) {
				$this->Session->setFlash(__('The bath room condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bath room condition could not be saved. Please, try again.'));
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
		if (!$this->BathRoomCondition->exists($id)) {
			throw new NotFoundException(__('Invalid bath room condition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BathRoomCondition->save($this->request->data)) {
				$this->Session->setFlash(__('The bath room condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bath room condition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BathRoomCondition.' . $this->BathRoomCondition->primaryKey => $id));
			$this->request->data = $this->BathRoomCondition->find('first', $options);
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
		$this->BathRoomCondition->id = $id;
		if (!$this->BathRoomCondition->exists()) {
			throw new NotFoundException(__('Invalid bath room condition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BathRoomCondition->delete()) {
			$this->Session->setFlash(__('The bath room condition has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bath room condition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
