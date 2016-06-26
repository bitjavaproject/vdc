<?php
App::uses('AppController', 'Controller');
/**
 * DrinkingWaterSources Controller
 *
 * @property DrinkingWaterSource $DrinkingWaterSource
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DrinkingWaterSourcesController extends AppController {

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
		$this->DrinkingWaterSource->recursive = 0;
		$this->set('drinkingWaterSources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DrinkingWaterSource->exists($id)) {
			throw new NotFoundException(__('Invalid drinking water source'));
		}
		$options = array('conditions' => array('DrinkingWaterSource.' . $this->DrinkingWaterSource->primaryKey => $id));
		$this->set('drinkingWaterSource', $this->DrinkingWaterSource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DrinkingWaterSource->create();
			if ($this->DrinkingWaterSource->save($this->request->data)) {
				$this->Session->setFlash(__('The drinking water source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drinking water source could not be saved. Please, try again.'));
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
		if (!$this->DrinkingWaterSource->exists($id)) {
			throw new NotFoundException(__('Invalid drinking water source'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DrinkingWaterSource->save($this->request->data)) {
				$this->Session->setFlash(__('The drinking water source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drinking water source could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DrinkingWaterSource.' . $this->DrinkingWaterSource->primaryKey => $id));
			$this->request->data = $this->DrinkingWaterSource->find('first', $options);
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
		$this->DrinkingWaterSource->id = $id;
		if (!$this->DrinkingWaterSource->exists()) {
			throw new NotFoundException(__('Invalid drinking water source'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DrinkingWaterSource->delete()) {
			$this->Session->setFlash(__('The drinking water source has been deleted.'));
		} else {
			$this->Session->setFlash(__('The drinking water source could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
