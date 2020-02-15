<?php
App::uses('AppController', 'Controller');
/**
 * DUsers Controller
 *
 * @property DUser $DUser
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');


	public function dojinpaymentmethod (){//

		//ログインチェック※確認中は殺す

//$this->_neko_auth();
		//モデル読み込み
		$this->loadModel("DOrderEstimate");
		//データチェック
		if($this->request->is('get')){//Getで飛んできた
			$estimate_cd = $this->request->query['estimate_cd'];
			$dojin = $this->request->query['dojin'];
			$this->set('estimate_cd', $estimate_cd);
			$this->set('dojin', $dojin);

			//Getで取得した決済内容を変数へ格納
			$options = array('conditions' => array('DOrderEstimate.' .'estimate_no' => $estimate_cd));
			$orderestimate = $this->DOrderEstimate->find('first', $options);
			$user_cd = $orderestimate['DOrderEstimate']['user_cd'];
			//見積もりデータが存在していない場合
			if (empty($this->DOrderEstimate->find('first', $options))){//見積もりデータが存在していない場合
			//エラー画面表示
				$this->Flash->error(__('この見積もりは無効です。'));
				$this->redirect('error');
			}else {//見積もりが存在しているので情報取得
			//確認画面表示
				return 0;
			}
		}
	}


	public function dojinordercheck(){
		//ログインチェック※確認中は殺す
		//$this->_neko_auth();
		//モデル読み込み
		$this->loadModel("DOrderEstimate");
		//データチェック
		if($this->request->is('post')){
			//POST内容を変数へ
			$cart = $this->request->data('cart');

			$estimate_cd = $cart['estimate_cd'];
			$dojin =  $cart['dojin'];
			$pay_method = $cart['pay_mathod'];
			if($pay_method == '9'){
				$pay_method_text = '銀行振込';
				$this->set('pay_method', 'bankpay');
				$this->set('nextaction', 'bankpay');
			}elseif ($pay_method == '1'){
				$pay_method_text = 'クレジットカード決済';
				$this->set('pay_method', 'creditpay');
				$this->set('nextaction', 'creditpay');
			}else {
				$pay_method_text = 'エラー処理入れる';
			}

			$this->set('pay_method_text', $pay_method_text);
			$this->set('estimate_cd', $estimate_cd);
			$this->set('dojin', $dojin);


			//見積もりデータが存在していない場合
			$options = array('conditions' => array('DOrderEstimate.' .'estimate_no' => $estimate_cd));

			if (empty($this->DOrderEstimate->find('first', $options))){//見積もりデータが存在していない場合
				//エラー画面表示
				$this->Flash->error(__('この見積もりは無効です。'));
				$this->redirect('error');
			}else {//処理
				//今回のご注文内容をDBから取得
				$orderestimate = $this->DOrderEstimate->find('first', $options);
				$user_cd = $orderestimate['DOrderEstimate']['user_cd'];
				//viewにわたす
				$this->set('cart' , $orderestimate);

				//確認画面表示
				return 0;
			}
		}
	}

	public function error(){
	}
	public function dojindeliveryaddr(){//

//ログインチェック※確認中は殺す

//		$this->_neko_auth();
		//モデル読み込み
		$this->loadModel("DOrderEstimate");
		//データチェック
		if($this->request->is('get')){//Getで飛んできた
			$estimate_cd = $this->request->query['estimate_cd'];
			$dojin = $this->request->query['dojin'];
			$this->set('estimate_cd', $estimate_cd);
			$this->set('dojin', $dojin);

			//Getで取得した決済内容を変数へ格納
			$options = array('conditions' => array('DOrderEstimate.' .'estimate_no' => $estimate_cd));
			$orderestimate = $this->DOrderEstimate->find('first', $options);
			$user_cd = $orderestimate['DOrderEstimate']['user_cd'];



			//見積もりデータが存在していない場合
			if (empty($this->DOrderEstimate->find('first', $options))){//見積もりデータが存在していない場合
			//エラー画面表示
				$this->Flash->error(__('この見積もりは無効です。'));
				$this->redirect('error');
			}else {//見積もりが存在しているので情報取得

			//確認画面表示
				return 0;
			}
		}
	}

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

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DUser->recursive = 0;
		$this->set('dUsers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DUser->exists($id)) {
			throw new NotFoundException(__('Invalid d user'));
		}
		$options = array('conditions' => array('DUser.' . $this->DUser->primaryKey => $id));
		$this->set('dUser', $this->DUser->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DUser->create();
			if ($this->DUser->save($this->request->data)) {
				$this->Flash->success(__('The d user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d user could not be saved. Please, try again.'));
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
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
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
