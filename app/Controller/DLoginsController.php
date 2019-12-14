<?php
App::uses('AppController', 'Controller');
/**
 * DLogins Controller
 *
 * @property DLogin $DLogin
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DLoginsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DLogin->recursive = 0;
		$this->set('dLogins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DLogin->exists($id)) {
			throw new NotFoundException(__('Invalid d login'));
		}
		$options = array('conditions' => array('DLogin.' . $this->DLogin->primaryKey => $id));
		$this->set('dLogin', $this->DLogin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DLogin->create();
			if ($this->DLogin->save($this->request->data)) {
				$this->Flash->success(__('The d login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d login could not be saved. Please, try again.'));
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
		if (!$this->DLogin->exists($id)) {
			throw new NotFoundException(__('Invalid d login'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DLogin->save($this->request->data)) {
				$this->Flash->success(__('The d login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d login could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DLogin.' . $this->DLogin->primaryKey => $id));
			$this->request->data = $this->DLogin->find('first', $options);
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
		if (!$this->DLogin->exists($id)) {
			throw new NotFoundException(__('Invalid d login'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DLogin->delete($id)) {
			$this->Flash->success(__('The d login has been deleted.'));
		} else {
			$this->Flash->error(__('The d login could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
