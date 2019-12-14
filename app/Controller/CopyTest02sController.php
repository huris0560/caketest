<?php
App::uses('AppController', 'Controller');
/**
 * CopyTest02s Controller
 *
 * @property CopyTest02 $CopyTest02
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CopyTest02sController extends AppController {

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
		$this->CopyTest02->recursive = 0;
		$this->set('copyTest02s', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CopyTest02->exists($id)) {
			throw new NotFoundException(__('Invalid copy test02'));
		}
		$options = array('conditions' => array('CopyTest02.' . $this->CopyTest02->primaryKey => $id));
		$this->set('copyTest02', $this->CopyTest02->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CopyTest02->create();
			if ($this->CopyTest02->save($this->request->data)) {
				$this->Flash->success(__('The copy test02 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test02 could not be saved. Please, try again.'));
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
		if (!$this->CopyTest02->exists($id)) {
			throw new NotFoundException(__('Invalid copy test02'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CopyTest02->save($this->request->data)) {
				$this->Flash->success(__('The copy test02 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test02 could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CopyTest02.' . $this->CopyTest02->primaryKey => $id));
			$this->request->data = $this->CopyTest02->find('first', $options);
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
		if (!$this->CopyTest02->exists($id)) {
			throw new NotFoundException(__('Invalid copy test02'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CopyTest02->delete($id)) {
			$this->Flash->success(__('The copy test02 has been deleted.'));
		} else {
			$this->Flash->error(__('The copy test02 could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
