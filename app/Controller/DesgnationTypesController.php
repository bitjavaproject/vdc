<?php
App::uses('AppController', 'Controller');
/**
 * DesgnationTypes Controller
 *
 * @property DesgnationType $DesgnationType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DesgnationTypesController extends AppController {

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
		$this->DesgnationType->recursive = 0;
		$this->set('desgnationTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DesgnationType->exists($id)) {
			throw new NotFoundException(__('Invalid desgnation type'));
		}
		$options = array('conditions' => array('DesgnationType.' . $this->DesgnationType->primaryKey => $id));
		$this->set('desgnationType', $this->DesgnationType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DesgnationType->create();
			if ($this->DesgnationType->save($this->request->data)) {
				$this->Session->setFlash(__('The desgnation type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The desgnation type could not be saved. Please, try again.'));
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
		if (!$this->DesgnationType->exists($id)) {
			throw new NotFoundException(__('Invalid desgnation type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DesgnationType->save($this->request->data)) {
				$this->Session->setFlash(__('The desgnation type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The desgnation type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DesgnationType.' . $this->DesgnationType->primaryKey => $id));
			$this->request->data = $this->DesgnationType->find('first', $options);
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
		$this->DesgnationType->id = $id;
		if (!$this->DesgnationType->exists()) {
			throw new NotFoundException(__('Invalid desgnation type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DesgnationType->delete()) {
			$this->Session->setFlash(__('The desgnation type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The desgnation type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
