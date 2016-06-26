<?php
App::uses('AppController', 'Controller');
/**
 * HomeAccessories Controller
 *
 * @property HomeAccessory $HomeAccessory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HomeAccessoriesController extends AppController {

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
		$this->HomeAccessory->recursive = 0;
		$this->set('homeAccessories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HomeAccessory->exists($id)) {
			throw new NotFoundException(__('Invalid home accessory'));
		}
		$options = array('conditions' => array('HomeAccessory.' . $this->HomeAccessory->primaryKey => $id));
		$this->set('homeAccessory', $this->HomeAccessory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HomeAccessory->create();
			if ($this->HomeAccessory->save($this->request->data)) {
				$this->Session->setFlash(__('The home accessory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The home accessory could not be saved. Please, try again.'));
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
		if (!$this->HomeAccessory->exists($id)) {
			throw new NotFoundException(__('Invalid home accessory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomeAccessory->save($this->request->data)) {
				$this->Session->setFlash(__('The home accessory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The home accessory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomeAccessory.' . $this->HomeAccessory->primaryKey => $id));
			$this->request->data = $this->HomeAccessory->find('first', $options);
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
		$this->HomeAccessory->id = $id;
		if (!$this->HomeAccessory->exists()) {
			throw new NotFoundException(__('Invalid home accessory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HomeAccessory->delete()) {
			$this->Session->setFlash(__('The home accessory has been deleted.'));
		} else {
			$this->Session->setFlash(__('The home accessory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
