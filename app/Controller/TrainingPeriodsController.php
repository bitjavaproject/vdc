<?php
App::uses('AppController', 'Controller');
/**
 * TrainingPeriods Controller
 *
 * @property TrainingPeriod $TrainingPeriod
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TrainingPeriodsController extends AppController {

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
		$this->TrainingPeriod->recursive = 0;
		$this->set('trainingPeriods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrainingPeriod->exists($id)) {
			throw new NotFoundException(__('Invalid training period'));
		}
		$options = array('conditions' => array('TrainingPeriod.' . $this->TrainingPeriod->primaryKey => $id));
		$this->set('trainingPeriod', $this->TrainingPeriod->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrainingPeriod->create();
			if ($this->TrainingPeriod->save($this->request->data)) {
				$this->Session->setFlash(__('The training period has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training period could not be saved. Please, try again.'));
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
		if (!$this->TrainingPeriod->exists($id)) {
			throw new NotFoundException(__('Invalid training period'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrainingPeriod->save($this->request->data)) {
				$this->Session->setFlash(__('The training period has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training period could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrainingPeriod.' . $this->TrainingPeriod->primaryKey => $id));
			$this->request->data = $this->TrainingPeriod->find('first', $options);
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
		$this->TrainingPeriod->id = $id;
		if (!$this->TrainingPeriod->exists()) {
			throw new NotFoundException(__('Invalid training period'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrainingPeriod->delete()) {
			$this->Session->setFlash(__('The training period has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training period could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
