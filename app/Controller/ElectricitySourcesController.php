<?php
App::uses('AppController', 'Controller');
/**
 * ElectricitySources Controller
 *
 * @property ElectricitySource $ElectricitySource
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ElectricitySourcesController extends AppController {

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
		$this->ElectricitySource->recursive = 0;
		$this->set('electricitySources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ElectricitySource->exists($id)) {
			throw new NotFoundException(__('Invalid electricity source'));
		}
		$options = array('conditions' => array('ElectricitySource.' . $this->ElectricitySource->primaryKey => $id));
		$this->set('electricitySource', $this->ElectricitySource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ElectricitySource->create();
			if ($this->ElectricitySource->save($this->request->data)) {
				$this->Session->setFlash(__('The electricity source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The electricity source could not be saved. Please, try again.'));
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
		if (!$this->ElectricitySource->exists($id)) {
			throw new NotFoundException(__('Invalid electricity source'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ElectricitySource->save($this->request->data)) {
				$this->Session->setFlash(__('The electricity source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The electricity source could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ElectricitySource.' . $this->ElectricitySource->primaryKey => $id));
			$this->request->data = $this->ElectricitySource->find('first', $options);
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
		$this->ElectricitySource->id = $id;
		if (!$this->ElectricitySource->exists()) {
			throw new NotFoundException(__('Invalid electricity source'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ElectricitySource->delete()) {
			$this->Session->setFlash(__('The electricity source has been deleted.'));
		} else {
			$this->Session->setFlash(__('The electricity source could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
