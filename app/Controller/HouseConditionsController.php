<?php
App::uses('AppController', 'Controller');
/**
 * HouseConditions Controller
 *
 * @property HouseCondition $HouseCondition
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HouseConditionsController extends AppController {

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
		$this->HouseCondition->recursive = 0;
		$this->set('houseConditions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HouseCondition->exists($id)) {
			throw new NotFoundException(__('Invalid house condition'));
		}
		$options = array('conditions' => array('HouseCondition.' . $this->HouseCondition->primaryKey => $id));
		$this->set('houseCondition', $this->HouseCondition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HouseCondition->create();
			if ($this->HouseCondition->save($this->request->data)) {
				$this->Session->setFlash(__('The house condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The house condition could not be saved. Please, try again.'));
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
		if (!$this->HouseCondition->exists($id)) {
			throw new NotFoundException(__('Invalid house condition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HouseCondition->save($this->request->data)) {
				$this->Session->setFlash(__('The house condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The house condition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HouseCondition.' . $this->HouseCondition->primaryKey => $id));
			$this->request->data = $this->HouseCondition->find('first', $options);
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
		$this->HouseCondition->id = $id;
		if (!$this->HouseCondition->exists()) {
			throw new NotFoundException(__('Invalid house condition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HouseCondition->delete()) {
			$this->Session->setFlash(__('The house condition has been deleted.'));
		} else {
			$this->Session->setFlash(__('The house condition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
