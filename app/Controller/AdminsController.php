<?php
App::uses('AppController', 'Controller');
/**
 * Admins Controller
 *
 * @property Admin $Admin
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController {


	public function beforeFilter() {
		parent::beforeFilter();
		// ユーザー自身による登録とログアウトを許可する
		$this->Auth->allow('add', 'logout');
		$this->Auth->authenticate = array(
				'Basic' => array('userModel' => 'Admin'),
				'Form' => array('userModel' => 'Admin')
		);
	}


	public function isAuthorized($admin) {
		// 登録済ユーザーは投稿できる
		if ($this->action === 'add') {
			return true;
		}

		// 投稿のオーナーは編集や削除ができる
		if (in_array($this->action, array('edit', 'delete'))) {
			$postId = (int) $this->request->params['pass'][0];
			if ($this->Post->isOwnedBy($postId, $admin['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($admin);
	}

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
		$this->Admin->recursive = 0;
		$this->set('admins', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Admin->exists($id)) {
			throw new NotFoundException(__('Invalid admin'));
		}
		$options = array('conditions' => array('Admin.' . $this->Admin->primaryKey => $id));
		$this->set('admin', $this->Admin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function add() {
		if ($this->request->is('post')) {
			$this->Admin->create();
			if ($this->Admin->save($this->request->data)) {
				$this->Flash->success(__('The admin has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(
					__('The admin could not be saved. Please, try again.')
					);
		}
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


//	public function edit($id = null) {
//		$this->Admin->id = $id;
//		if (!$this->Admin->exists()) {
//			throw new NotFoundException(__('Invalid admin'));
//		}
//		if ($this->request->is('post') || $this->request->is('put')) {
//			if ($this->Admin->save($this->request->data)) {
//				$this->Flash->success(__('The admin has been saved'));
//				return $this->redirect(array('action' => 'index'));
//			}
//			$this->Flash->error(
//					__('The admin could not be saved. Please, try again.')
//					);
//		} else {
//			$this->request->data = $this->Admin->findById($id);
//			unset($this->request->data['Admin']['password']);
//		}
//	}

	public function edit($id = null) {
		if (!$this->Admin->exists($id)) {
			throw new NotFoundException(__('Invalid admin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Admin->save($this->request->data)) {
				$this->Flash->success(__('The admin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Admin.' . $this->User->primaryKey => $id));
			$this->request->data = $this->Admin->find('first', $options);
		}
		$admin = $this->Admin->Admin->find('list');
		$this->set(compact('admin'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function delete($id = null) {
		// Prior to 2.5 use
		// $this->request->onlyAllow('post');

		$this->request->allowMethod('post');

		$this->Admin->id = $id;
		if (!$this->Admin->exists()) {
			throw new NotFoundException(__('Invalid admin'));
		}
		if ($this->Admin->delete()) {
			$this->Flash->success(__('Admin deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Flash->error(__('Admin was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Flash->error(__('Invalid adminname or password, try again'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
