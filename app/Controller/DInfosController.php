<?php
App::uses('AppController', 'Controller');
/**
 * DInfos Controller
 *
 * @property DInfo $DInfo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DInfosController extends AppController {

	public function after_estimate(){//nekocoreから作成済みの同人誌オーダーを受け取る
		if($this->request->is('post')){//自分にポストが来たことを確認
			$systs = $this->request->data('systs');//見積もりシステムから投げられるPOSTの受領
			$estimateid = $this->request->data('estimateid');
//			$token =  $this->request->data('token');//tokenはトークン生成後の変数としていたので一時退避
			if($systs  != "" && $estimateid != "" && $this->request->data('token') != ""){//一個上に連動して受領トークンは変数へ代入せずにrequestから取る。
				$match_tkn = sha1($systs.$estimateid.XML_SECRET);
				if($match_tkn != $token){//受領トークンと生成トークンが等しいか確認・・・え、これ意味ある？
					//エラー表示する？元ページに遷移？
				}
				//トークン生成
				$sts = time();
				$token = sha1($sts.$estimateid.XML_SECRET);
				//XML取得URL生成
				$rep_url = XML_LWP_URL ."?sts=" .$sts ."&eid=" .$estimateid ."&tkn=" .$token;
			}

			$rest_data = api_rest(GET, $rep_url);
			$estimateid = "" ;
//			$this->redirect(array('controller' => 'Customers','action' => 'index'));//ポストを投げられた以外の動作、現在は仮にインデックスへ遷移
		}

	}


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

	public function recvorder(){//nekocoreから作成済みの同人誌オーダーを受け取る
		$systs = $this->request->data('systs');//POST受領
		$estimateid = $this->request->data('estimateid');

		$this->redirect(array('controller' => 'Customers','action' => 'index'));
	}



	public function nekoin(){//テストヘッド、ねこいんにredirectするだけ
		$this->redirect(array('controller' => 'Customers','action' => 'nekoin'));
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
		$this->DInfo->recursive = 0;
		$this->set('dInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		$options = array('conditions' => array('DInfo.' . $this->DInfo->primaryKey => $id));
		$this->set('dInfo', $this->DInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DInfo->create();
			if ($this->DInfo->save($this->request->data)) {
				$this->Flash->success(__('The d info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d info could not be saved. Please, try again.'));
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
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DInfo->save($this->request->data)) {
				$this->Flash->success(__('The d info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DInfo.' . $this->DInfo->primaryKey => $id));
			$this->request->data = $this->DInfo->find('first', $options);
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
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DInfo->delete($id)) {
			$this->Flash->success(__('The d info has been deleted.'));
		} else {
			$this->Flash->error(__('The d info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DInfo->recursive = 0;
		$this->set('dInfos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		$options = array('conditions' => array('DInfo.' . $this->DInfo->primaryKey => $id));
		$this->set('dInfo', $this->DInfo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DInfo->create();
			if ($this->DInfo->save($this->request->data)) {
				$this->Flash->success(__('The d info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d info could not be saved. Please, try again.'));
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
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DInfo->save($this->request->data)) {
				$this->Flash->success(__('The d info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DInfo.' . $this->DInfo->primaryKey => $id));
			$this->request->data = $this->DInfo->find('first', $options);
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
		if (!$this->DInfo->exists($id)) {
			throw new NotFoundException(__('Invalid d info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DInfo->delete($id)) {
			$this->Flash->success(__('The d info has been deleted.'));
		} else {
			$this->Flash->error(__('The d info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
