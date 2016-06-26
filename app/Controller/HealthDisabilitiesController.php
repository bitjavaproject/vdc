<?php
App::uses('AppController', 'Controller');
/**
 * HealthDisabilities Controller
 *
 * @property HealthDisability $HealthDisability
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HealthDisabilitiesController extends AppController {

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
		$this->HealthDisability->recursive = 0;
		$this->set('healthDisabilities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HealthDisability->exists($id)) {
			throw new NotFoundException(__('Invalid health disability'));
		}
		$options = array('conditions' => array('HealthDisability.' . $this->HealthDisability->primaryKey => $id));
		$this->set('healthDisability', $this->HealthDisability->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HealthDisability->create();
			if ($this->HealthDisability->save($this->request->data)) {
				$this->Session->setFlash(__('The health disability has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The health disability could not be saved. Please, try again.'));
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
		if (!$this->HealthDisability->exists($id)) {
			throw new NotFoundException(__('Invalid health disability'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HealthDisability->save($this->request->data)) {
				$this->Session->setFlash(__('The health disability has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The health disability could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HealthDisability.' . $this->HealthDisability->primaryKey => $id));
			$this->request->data = $this->HealthDisability->find('first', $options);
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
		$this->HealthDisability->id = $id;
		if (!$this->HealthDisability->exists()) {
			throw new NotFoundException(__('Invalid health disability'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HealthDisability->delete()) {
			$this->Session->setFlash(__('The health disability has been deleted.'));
		} else {
			$this->Session->setFlash(__('The health disability could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
