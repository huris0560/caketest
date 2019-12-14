<?php
App::uses('AppController', 'Controller');
/**
 * CopyTest01s Controller
 *
 * @property CopyTest01 $CopyTest01
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CopyTest01sController extends AppController {

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


	public function nekoin(){//Copytest１の指定したtestNoのテーブル内容を同testNoのCopytest２にコピーする

		$this->loadModel("CopyTest02");
		$id='255';
//		echo $id;

		if (!$this->CopyTest02->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$ans = $this->CopyTest02->find('all', array('conditions' => array('testNo' => $id)));
		$put = array('testtestNo' => null);
		$ans2 = array_merge($put, $ans['0']["CopyTest02"]);
		$result = Hash::remove($ans2, 'testNo');
		var_dump($result);
		$this->CopyTest01->create();
		if ($this->CopyTest01->save($result)){//$this->CopyTest02->find('first', $options))){//		if (!$this->CopyTest02->query($sql)){
			$this->Session->setFlash("おｋ");
//			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash("だめ");
//			$this->redirect(array('action' => 'index'));
		}

	}


	public function index() {
		$this->CopyTest01->recursive = 0;
		$this->set('copyTest01s', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		$options = array('conditions' => array('CopyTest01.' . $this->CopyTest01->primaryKey => $id));
		$this->set('copyTest01', $this->CopyTest01->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CopyTest01->create();
			if ($this->CopyTest01->save($this->request->data)) {
				$this->Flash->success(__('The copy test01 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test01 could not be saved. Please, try again.'));
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
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CopyTest01->save($this->request->data)) {
				$this->Flash->success(__('The copy test01 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test01 could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CopyTest01.' . $this->CopyTest01->primaryKey => $id));
			$this->request->data = $this->CopyTest01->find('first', $options);
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
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CopyTest01->delete($id)) {
			$this->Flash->success(__('The copy test01 has been deleted.'));
		} else {
			$this->Flash->error(__('The copy test01 could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CopyTest01->recursive = 0;
		$this->set('copyTest01s', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		$options = array('conditions' => array('CopyTest01.' . $this->CopyTest01->primaryKey => $id));
		$this->set('copyTest01', $this->CopyTest01->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CopyTest01->create();
			if ($this->CopyTest01->save($this->request->data)) {
				$this->Flash->success(__('The copy test01 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test01 could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CopyTest01->save($this->request->data)) {
				$this->Flash->success(__('The copy test01 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The copy test01 could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CopyTest01.' . $this->CopyTest01->primaryKey => $id));
			$this->request->data = $this->CopyTest01->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->CopyTest01->exists($id)) {
			throw new NotFoundException(__('Invalid copy test01'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CopyTest01->delete($id)) {
			$this->Flash->success(__('The copy test01 has been deleted.'));
		} else {
			$this->Flash->error(__('The copy test01 could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
