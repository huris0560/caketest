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

	/**
	 * Logins
	 *
	 * @var array
	 */


	public function _after_estimate(){//nekocoreから作成済みの同人誌オーダーを受け取る

//		if($this->request->is('post')){//自分にポストが来たことを確認
//			$systs = $this->request->data('systs');//見積もりシステムから投げられるPOSTの受領
//			$estimateid = $this->request->data('estimateid');

			$systs = '1573119411';
			$estimateid = '5dc3e5b2-6d5c-4276-a654-2fdecaeab14b';
			$token_1 = '71fbb4157aba5243970966726811925622a6ba02';
//			$token =  $this->request->data('token');//tokenはトークン生成後の変数としていたので一時退避
			if($systs  != "" && $estimateid != "" && $token_1 != ""){//$this->request->data('token')一個上に連動して受領トークンは変数へ代入せずにrequestから取る。
				$match_tkn = sha1($systs.$estimateid.XML_SECRET);
				if($match_tkn != $token_1){//受領トークンと生成トークンが等しいか確認・・・え、これ意味ある？
					//エラー表示する？元ページに遷移？
				}
				//トークン生成
				$sts = time();
				$token = sha1($sts.$estimateid.XML_SECRET);
				//XML取得URL生成
				$rep_url = XML_LWP_URL ."?sts=" .$sts ."&eid=" .$estimateid ."&tkn=" .$token;
			}
//			$rest_data ="hoge";
			$rest_data = $this->_api_rest('GET', $rep_url);
			return $rest_data;

//			$this->redirect(array('controller' => 'Customers','action' => 'index'));//ポストを投げられた以外の動作、現在は仮にインデックスへ遷移
//		}

			//レスポンスがNullならエラー終了
			if(isset($rest_data)){
				echo "おｋ";
		}
	}

	public function nekoin(){
		$this->set('select1', $this->Customer->find('list', array(
				'fields' => array('id', 'customer_name')
		)));

		$id = 'あｆｋ';
		$this->set('color', $id);
		$test1 = $this->request->data('Customer.test1');
//		$test2 = $this->request->data('Customer.test2');
		$test2 = $this->request->query['test2'];


//		$tempdate = $this->_after_estimate();

//		$sha256 = Security::hash('CakePHP Framework', 'sha256', true);
//		$newHash = Security::hash('nyanko','sha256',true);


//		$tempPostData = $this->request->data('tempPostData');

//		$test01 = "nyanko";


//ハッシュ化関連テスト
//		echo "Security::hash('nyanko','sha256',true);　".Security::hash('nyanko','sha256',true)."<br>";
//		echo "Security::hash($test01,'sha256',true);　".Security::hash($test01,'sha256',true)."<br>";

//		$pass = $this->Customer->find('all', array('conditions' => array('customer_name' => $username)));
//		$pass2 = $pass['0']['Customer']['password'];

		echo "POSTで送られてきたのは". $test1. "<br>"; //.$test2 ."<br>";
		echo "GETで送られてきたのは". var_dump($test2). "<br>"; //.$test2 ."<br>";

//		echo "いろいろ取ってみる ".$this->Session->read('Neko.longinReferer')."<br>";//$this->request->referer('/')."<br>";
//		echo "POSTしたPWのハッシュ化 ".Security::hash($this->request->data('Customer.password'),'sha256',true)."<br>";
//		echo "POSTしたPW ".$password ."<br>";
//		echo "外部からの直POST ".$tempPostData ."<br>";
//		echo "XML_SECRET ".XML_SECRET ."<br>";
	}


	public function login(){
//		$url = $this->referer(null, true);
//		echo "URL".$url."<br>";
//		echo "REFURL".$this->Session->read('Neko.longinReferer');//$this->Session->read('RedererUrl');
//		$return_url = $this->Session->read('Neko.longinReferer');

//		if($url = " /Customers/login"){//リファラから取得したURLがlogin以外からだった場合は更新(memo あれ？これ要らんのでは？
//		}else {
//			$this->Session->write('RedererUrl', $url);
//				$this->Session->write('Neko.userName', $username);
//		}
		if ($this->request->is('post')) {//自分にポストが来た
			$username = $this->request->data('Customer.ログインID');//POST受領
			$password = $this->request->data('Customer.パスワード');
			$nekoHash = Security::hash($password,'sha256',true);
			$PW = $this->Customer->find('all', array('conditions' => array('customer_name'=>$username)));
			if(empty($PW)){
				$this->Flash->error(__('IDかIDPW両方違う(確認用、メッセージは修正せよ)'));//Flashでメッセージを表示するだけ
				return 0;
			}

			if ($nekoHash == $PW['0']['Customer']['password']){//自分にポストが来たIDPWが正しいか確認
				$this->Session->write('Neko.authStatus', 'customer');
				$this->Session->write('Neko.userName', $username);
				$this->Cookie->write('Neko.userName', $username);
				$this->Session->write('Neko.authTime', time());
				$this->Session->write('Neko.authTimeOut', time()+1800);
				$this->Flash->success(__('ログインに成功しました。'));
				$this->redirect(array('controller' => 'Customers','action' => 'index')); //$return_url);
			} else {
				$this->Flash->error(__('PWが違います(確認用、メッセージは修正せよ)'));//Flashでメッセージを表示するだけ
			}
		}
	}

	public function logout() {
		//Session情報をログアウトに
		$this->Session->write('Neko.authStatus', 'out'
				);
		$this->Session->write('Neko.userName', '');
				$this->Flash->success(__('You have successfully logged out.'));
		$this->redirect(array(
						'controller' => 'Customers',
						'action' => 'index'
		)
				); //redirect
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
