<?php
App::uses('AppController', 'Controller');
/**
 * Admins Controller
 *
 * @property Admin $Admin
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController {
//	public $components = array(//'temp');
//			'Flash',
//			'Auth' => array(//認証設定
//					'loginRedirect' => array(
//							'controller' => 'admins',
//							'action' => 'index'
//					),
//					'logoutRedirect' => array(
//							'controller' => 'pages',
//							'action' => 'display',
//							'home'
//					),
//					'authenticate' => array(
//							'Form' => array(
//									'userModel' => 'Admin',
//									'passwordHasher' => 'Blowfish',
//									'fields'=>array(
//											'username' => 'name',
//											'password' => 'password'
//									)
//							)
//					),
//					'loginAction' => array(
//							'action' => 'login'
//					),
//					'authorize' => array('Controller')
//			),
//			'Paginator'
//	);


	public function beforeFilter() {
		parent::beforeFilter();
//		$this->Auth->authorize = array('controller');
		// ユーザー自身による登録とログアウトを許可する
//		$this->Auth->allow('add', 'logout');
//		$this->Auth->loginAction = array(
//				'controller' => 'admins',
//				'action' => 'login'
//		);
//		$this->Auth->loginRedirect = array(
//				'controller' => 'admins',
//				'action' => 'index'
//		);
//		$this->Auth->logoutRedirect = array(
//				'controller' => 'admins',
//				'action' => 'add'//ページ遷移がわかりやすいように一度addに移動
//		);

//		$this->Auth->authenticate = array(
//					'Form' => array(
//					'passwordHasher' => 'Blowfish'
//			)
//		);

//		$this->Auth->allow('add', 'logout');
//		$this->Auth->authenticate = array(
//				'Basic' => array('userModel' => 'Admin'),
//				'Form' => array('userModel' => 'Admin')
//		);
	}

//	public function isAuthorized($user) {
//		// 登録済ユーザーは投稿できる
//		if ($this->action === 'add') {
//			return true;
//		}

		// 投稿のオーナーは編集や削除ができる
//		if (in_array($this->action, array('edit', 'delete'))) {
//			$postId = (int) $this->request->params['pass'][0];
//			if ($this->Post->isOwnedBy($postId, $user['id'])) {
//				return true;
//			}
//		}

//		return parent::isAuthorized($user);
//	}

/**
 * Components
 *
 * @var array
 */
// component2重回避　public $components = array('Paginator');

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
			$options = array('conditions' => array('Admin.' . $this->Admin->primaryKey => $id));
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
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->Admin->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Flash->error(__('管理者名かPW間違い'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
