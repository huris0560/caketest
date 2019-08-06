<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CustomersController extends AppController {

	public $helpers = array('Html', 'Form');

//		$this->Session->write('Login.Session', '');//Sessionの書き方メモ

	function beforeRender() {
//neko_authのinとoutを確認
		$neko_auth_login = $this->Session->read('Neko.authLongin');
		$neko_auth_time = $this->Session->read('Neko.authTime');
		$neko_auth_timeout = $this->Session->read('Neko.authTimeOut');
		$now = time();
		if($this->action =='login'){
			return 0;
		}
		elseif($neko_auth_login != 'in'){//ログイン状態がinではない場合ログイン画面へ遷移
			$this->redirect(array(
				'controller' => 'Customers',
				'action' => 'login'
			));
		}elseif ($neko_auth_timeout < $now){//$neko_auth_time == time()){前回のログインアクセスから30分以上たっていたらログアウトに書き換えてログイン画面へ
			$this->Session->write('Neko.authLongin', 'out');
			$this->Session->write('Neko.authTime', '');
			$this->Session->write('Neko.authTimeOut', '');
			$this->Flash->error(__('前回のアクセスから一定時間が経過しました。再度ログインしてください。'));//
			$this->redirect(array(
				'controller' => 'Customers',
				'action' => 'login'
			));
		}elseif ($neko_auth_timeout > $now){//ログイン状態かつタイムアウトではない→ログイン時間更新のみ
			$this->Session->write('Neko.authLongin', 'in');
			$this->Session->write('Neko.authTime', time());
			$this->Session->write('Neko.authTimeOut', time()+1800);
		}else {//予期せぬエラーでログイン画面へ遷移（基本ここには入らない筈)
			$this->redirect(array(
					'controller' => 'Customers',
					'action' => 'login'
			));
			$this->Flash->error(__('予期せぬエラーが発生しました。再度ログインしてください。'));//
		}
		//$login_time = $this->Session->read('Login.time');
	}

	/**
	 * Logins
	 *
	 * @var array
	 */
	public function nekoin(){

		$sha256 = Security::hash('CakePHP Framework', 'sha256', true);
		$newHash = Security::hash('nyanko','sha256',true);

		$username = $this->request->data('Customer.username');
		$password = $this->request->data('Customer.password');

		$test01 = "nyanko";
		echo "test6をハッシュ化すると[ ".$newHash."<br>";
		echo "Security::hash('nyanko','sha256',true);を討ってる　".Security::hash('nyanko','sha256',true)."<br>";
		echo "Security::hash($test01,'sha256',true);を討ってる　".Security::hash($test01,'sha256',true)."<br>";

		$pass = $this->Customer->find('all', array('conditions' => array('customer_name' => $username)));
		$pass2 = $pass['0']['Customer']['password'];
		echo $username . "でデータベースから取り出してハッシュ化しない生値として読む ".$pass2."<br>";
		echo "POSTしたPWのハッシュ化 ".Security::hash($password,'sha256',true)."<br>";
		echo "POSTしたPWのハッシュ化 ".Security::hash($this->request->data('Customer.password'),'sha256',true)."<br>";
		echo "POSTしたPW ".$password ."<br>";


			//		var_dump($this->Customer->find('all', array('conditions' => array('customer_name'=>'testman2'))));
	}
	public function login(){
		if ($this->request->is('post')) {//自分にポストが来た
			$username = $this->request->data('Customer.username');//POST受領
			$password = $this->request->data('Customer.password');
			$nekoHash = Security::hash($password,'sha256',true);
			$PW = $this->Customer->find('all', array('conditions' => array('customer_name'=>$username)));
			if(empty($PW)){
				$this->Flash->error(__('IDか両方違う(確認用、メッセージは修正せよ)'));//Flashでメッセージを表示するだけ
				return 0;
			}
			if ($nekoHash == $PW['0']['Customer']['password']){//自分にポストが来たIDPWが正しいか確認
				$this->Session->write('Neko.authLongin', 'in');
				$this->Session->write('Neko.authTime', time());
				$this->Session->write('Neko.authTimeOut', time()+1800);
				$this->redirect(array(
						'controller' => 'Customers',
						'action' => 'index'
				)
			);
			} else {
				$this->Flash->error(__('PWが違います(確認用、メッセージは修正せよ)'));//Flashでメッセージを表示するだけ
			}
		}
	}

	public function logout() {
		//Session情報をログアウトに
		$this->redirect(); //redirect
	}




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
		$this->Customer->recursive = 0;
		$this->set('customers', $this->Paginator->paginate());

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
		$this->set('customer', $this->Customer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();
			if ($this->Customer->save($this->request->data)) {
				$this->Flash->success(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The customer could not be saved. Please, try again.'));
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Customer->save($this->request->data)) {
				$this->Flash->success(__('The customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
			$this->request->data = $this->Customer->find('first', $options);
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
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Customer->delete($id)) {
			$this->Flash->success(__('The customer has been deleted.'));
		} else {
			$this->Flash->error(__('The customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
