<?php
App::uses('AppController', 'Controller');
/**
 * DUsers Controller
 *
 * @property DUser $DUser
 * @property PaginatorComponent $Paginator
 */
class DUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DUser->recursive = 0;
		$this->set('dUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DUser->exists($id)) {
			throw new NotFoundException(__('Invalid d user'));
		}
		$options = array('conditions' => array('DUser.' . $this->DUser->primaryKey => $id));
		$this->set('dUser', $this->DUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DUser->create();
			if ($this->DUser->save($this->request->data)) {
				$this->Flash->success(__('The d user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d user could not be saved. Please, try again.'));
			}
		}
		$users = $this->DUser->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DUser->exists($id)) {
			throw new NotFoundException(__('Invalid d user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DUser->save($this->request->data)) {
				$this->Flash->success(__('The d user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DUser.' . $this->DUser->primaryKey => $id));
			$this->request->data = $this->DUser->find('first', $options);
		}
		$users = $this->DUser->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->DUser->exists($id)) {
			throw new NotFoundException(__('Invalid d user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DUser->delete($id)) {
			$this->Flash->success(__('The d user has been deleted.'));
		} else {
			$this->Flash->error(__('The d user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
