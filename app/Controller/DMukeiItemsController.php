<?php
App::uses('AppController', 'Controller');
/**
 * DMukeiItems Controller
 *
 * @property DMukeiItem $DMukeiItem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DMukeiItemsController extends AppController {

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
		$this->DMukeiItem->recursive = 0;
		$this->set('dMukeiItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DMukeiItem->exists($id)) {
			throw new NotFoundException(__('Invalid d mukei item'));
		}
		$options = array('conditions' => array('DMukeiItem.' . $this->DMukeiItem->primaryKey => $id));
		$this->set('dMukeiItem', $this->DMukeiItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DMukeiItem->create();
			if ($this->DMukeiItem->save($this->request->data)) {
				$this->Flash->success(__('The d mukei item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d mukei item could not be saved. Please, try again.'));
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
		if (!$this->DMukeiItem->exists($id)) {
			throw new NotFoundException(__('Invalid d mukei item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DMukeiItem->save($this->request->data)) {
				$this->Flash->success(__('The d mukei item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d mukei item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DMukeiItem.' . $this->DMukeiItem->primaryKey => $id));
			$this->request->data = $this->DMukeiItem->find('first', $options);
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
		if (!$this->DMukeiItem->exists($id)) {
			throw new NotFoundException(__('Invalid d mukei item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DMukeiItem->delete($id)) {
			$this->Flash->success(__('The d mukei item has been deleted.'));
		} else {
			$this->Flash->error(__('The d mukei item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
