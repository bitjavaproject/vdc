<?php
App::uses('AppController', 'Controller');
/**
 * TrainingTypes Controller
 *
 * @property TrainingType $TrainingType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TrainingTypesController extends AppController {

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
		$this->TrainingType->recursive = 0;
		$this->set('trainingTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrainingType->exists($id)) {
			throw new NotFoundException(__('Invalid training type'));
		}
		$options = array('conditions' => array('TrainingType.' . $this->TrainingType->primaryKey => $id));
		$this->set('trainingType', $this->TrainingType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrainingType->create();
			if ($this->TrainingType->save($this->request->data)) {
				$this->Session->setFlash(__('The training type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training type could not be saved. Please, try again.'));
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
		if (!$this->TrainingType->exists($id)) {
			throw new NotFoundException(__('Invalid training type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrainingType->save($this->request->data)) {
				$this->Session->setFlash(__('The training type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrainingType.' . $this->TrainingType->primaryKey => $id));
			$this->request->data = $this->TrainingType->find('first', $options);
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
		$this->TrainingType->id = $id;
		if (!$this->TrainingType->exists()) {
			throw new NotFoundException(__('Invalid training type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrainingType->delete()) {
			$this->Session->setFlash(__('The training type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
