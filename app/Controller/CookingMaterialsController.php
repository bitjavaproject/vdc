<?php
App::uses('AppController', 'Controller');
/**
 * CookingMaterials Controller
 *
 * @property CookingMaterial $CookingMaterial
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CookingMaterialsController extends AppController {

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
		$this->CookingMaterial->recursive = 0;
		$this->set('cookingMaterials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CookingMaterial->exists($id)) {
			throw new NotFoundException(__('Invalid cooking material'));
		}
		$options = array('conditions' => array('CookingMaterial.' . $this->CookingMaterial->primaryKey => $id));
		$this->set('cookingMaterial', $this->CookingMaterial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CookingMaterial->create();
			if ($this->CookingMaterial->save($this->request->data)) {
				$this->Session->setFlash(__('The cooking material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooking material could not be saved. Please, try again.'));
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
		if (!$this->CookingMaterial->exists($id)) {
			throw new NotFoundException(__('Invalid cooking material'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CookingMaterial->save($this->request->data)) {
				$this->Session->setFlash(__('The cooking material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooking material could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CookingMaterial.' . $this->CookingMaterial->primaryKey => $id));
			$this->request->data = $this->CookingMaterial->find('first', $options);
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
		$this->CookingMaterial->id = $id;
		if (!$this->CookingMaterial->exists()) {
			throw new NotFoundException(__('Invalid cooking material'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CookingMaterial->delete()) {
			$this->Session->setFlash(__('The cooking material has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cooking material could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
