<?php
App::uses('AppController', 'Controller');
/**
 * DOrderEstimates Controller
 *
 * @property DOrderEstimate $DOrderEstimate
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DOrderEstimatesController extends AppController {

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
		$this->DOrderEstimate->recursive = 0;
		$this->set('dOrderEstimates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DOrderEstimate->exists($id)) {
			throw new NotFoundException(__('Invalid d order estimate'));
		}
		$options = array('conditions' => array('DOrderEstimate.' . $this->DOrderEstimate->primaryKey => $id));
		$this->set('dOrderEstimate', $this->DOrderEstimate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DOrderEstimate->create();
			if ($this->DOrderEstimate->save($this->request->data)) {
				$this->Flash->success(__('The d order estimate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d order estimate could not be saved. Please, try again.'));
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
		if (!$this->DOrderEstimate->exists($id)) {
			throw new NotFoundException(__('Invalid d order estimate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DOrderEstimate->save($this->request->data)) {
				$this->Flash->success(__('The d order estimate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d order estimate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DOrderEstimate.' . $this->DOrderEstimate->primaryKey => $id));
			$this->request->data = $this->DOrderEstimate->find('first', $options);
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
		if (!$this->DOrderEstimate->exists($id)) {
			throw new NotFoundException(__('Invalid d order estimate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DOrderEstimate->delete($id)) {
			$this->Flash->success(__('The d order estimate has been deleted.'));
		} else {
			$this->Flash->error(__('The d order estimate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
