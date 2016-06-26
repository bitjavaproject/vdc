<?php
App::uses('AppController', 'Controller');
/**
 * FuelSources Controller
 *
 * @property FuelSource $FuelSource
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FuelSourcesController extends AppController {

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
		$this->FuelSource->recursive = 0;
		$this->set('fuelSources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FuelSource->exists($id)) {
			throw new NotFoundException(__('Invalid fuel source'));
		}
		$options = array('conditions' => array('FuelSource.' . $this->FuelSource->primaryKey => $id));
		$this->set('fuelSource', $this->FuelSource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuelSource->create();
			if ($this->FuelSource->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel source could not be saved. Please, try again.'));
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
		if (!$this->FuelSource->exists($id)) {
			throw new NotFoundException(__('Invalid fuel source'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FuelSource->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel source could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FuelSource.' . $this->FuelSource->primaryKey => $id));
			$this->request->data = $this->FuelSource->find('first', $options);
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
		$this->FuelSource->id = $id;
		if (!$this->FuelSource->exists()) {
			throw new NotFoundException(__('Invalid fuel source'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FuelSource->delete()) {
			$this->Session->setFlash(__('The fuel source has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fuel source could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
