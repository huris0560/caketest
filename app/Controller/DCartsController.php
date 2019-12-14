<?php
App::uses('AppController', 'Controller');
/**
 * DCarts Controller
 *
 * @property DCart $DCart
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DCartsController extends AppController {

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
		$this->DCart->recursive = 0;
		$this->set('dCarts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DCart->exists($id)) {
			throw new NotFoundException(__('Invalid d cart'));
		}
		$options = array('conditions' => array('DCart.' . $this->DCart->primaryKey => $id));
		$this->set('dCart', $this->DCart->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DCart->create();
			if ($this->DCart->save($this->request->data)) {
				$this->Flash->success(__('The d cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d cart could not be saved. Please, try again.'));
			}
		}
	}

	public function afterestimate(){//nekocoreから作成済みの同人誌オーダーを受け取る

		if($this->request->is('post')){//自分にポストが来たことを確認
			$systs = $this->request->data('systs');				//見積もりシステムから投げられるPOSTの受領
			$estimateid = $this->request->data('estimateid');
			$token =  $this->request->data('token');			//tokenはトークン生成後の変数としていたので一時退避


			//参照元チェック
			if($systs  != "" && $estimateid != "" && $token_1 != ""){//
				$match_tkn = sha1($systs.$estimateid.XML_SECRET);
				if($match_tkn != $token_1){//受領トークンと生成トークンが等しいか確認？
					$this->Flash->error(__('内部エラー：データを正しく取得できませんでした。'));
					$this->render('afterestimate');
				}//トークン生成
				$sts = time();
				$token = sha1($sts.$estimateid.XML_SECRET);
				//XML取得URL生成
				$rep_url = XML_LWP_URL ."?sts=" .$sts ."&eid=" .$estimateid ."&tkn=" .$token;
//				$rest_data ="hoge";

				//XMLでのデータ取得
				$rest_data = $this->_api_rest('GET', $rep_url);
//				return $rest_data;
				//取得データチェック
				if('1'){
					//データ入力チェック
					if (isset($rest_data['EstimateNo'])
							|| isset($rest_data['SumPrice'])
							|| isset($rest_data['HonBusu'])
							|| isset($rest_data['HonPage'])

							|| isset($rest_data['HyosiDeadline'])
							|| isset($rest_data['HyosiDiscountDeadline'])
							|| isset($rest_data['HyosiExpressDeadline'])
							|| isset($rest_data['HonbunDeadline'])
							|| isset($rest_data['HonbunDiscountDeadline'])
							|| isset($rest_data['HonbunExpressDeadline'])
							|| isset($rest_data['KuchieDeadline'])
							|| isset($rest_data['KuchieDiscountDeadline'])
							|| isset($rest_data['KuchieExpressDeadline'])
							|| isset($rest_data['ExpirationDate'])

							|| isset($rest_data['PackPrice'])
							|| isset($rest_data['AsobiKasan'])
							|| isset($rest_data['KuchieKasan'])
							|| isset($rest_data['AccountPric'])
							|| isset($rest_data['PackDiscoun'])
							|| isset($rest_data['PackDiscoun'])
							|| isset($rest_data['PackExpress'])
							|| isset($rest_data['PackExpress'])
							|| isset($rest_data['HyosiDiscou'])
							|| isset($rest_data['HyosiDiscou'])
							|| isset($rest_data['HyosiExpres'])
							|| isset($rest_data['HyosiExpres'])
							|| isset($rest_data['HonbunDisco'])
							|| isset($rest_data['HonbunDisco'])
							|| isset($rest_data['HonbunExpre'])
							|| isset($rest_data['HonbunExpre'])
							|| isset($rest_data['KuchieDisco'])
							|| isset($rest_data['KuchieDisco'])
							|| isset($rest_data['KuchieExpre'])
							|| isset($rest_data['KuchieExpre'])
							|| isset($rest_data['PutFoilDisc'])
							|| isset($rest_data['PutFoilDisc'])
							|| isset($rest_data['PutFoilExpr'])
							|| isset($rest_data['PutFoilExpr'])
							|| isset($rest_data['OtherOption'])
							|| isset($rest_data['PriceWithou'])
							|| isset($rest_data['ExternalTax'])
							|| isset($rest_data['PackCoverPrice'])
							|| isset($rest_data['PackBodyPrice']))
								{//値が入っていない場合falseを返すのみ。
									$this->render('afterestimate');
								}else{
								//各種時間情報挿入
								$rest_data['hyosi_limit_time'] = '15:00:00';
								$rest_data['hyosi_discount_limit_time'] = '15:00:00';
								$rest_data['hyosi_express_limit_time'] = '15:00:00';
								$rest_data['honbun_limit_time'] = '15:00:00';
								$rest_data['honbun_discount_limit_time'] = '15:00:00';
								$rest_data['honbun_express_limit_time'] = '15:00:00';
								$rest_data['kuchie_limit_time'] = '15:00:00';
								$rest_data['kuchie_discount_limit_time'] = '15:00:00';
								$rest_data['kuchie_express_limit_time'] = '15:00:00';
								$this->DCart->save($rest_data);

								//次のページへの前処理
//								$order_step_url =  '/sp-bin/mypage/cart.cgi?dojin=1&estimate_cd='.urlencode(utf8_encode($rest_data));
//								旧来の処理ではエスケープした文字列を後処理に回していたが、redirect後にDBから読ませる処理へ
								$send_no = $resr_data
							}
						}
					}
			}else{
				$this->Flash->error(__('内部エラー：参照元を特定できませんでした。'));
				$this->render('afterestimate');
			}

		$this->Flash->error(__('エラー：不正なページ遷移を検知しました。'));//POST無しでここに入った場合
		$this->render('afterestimate');
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DCart->exists($id)) {
			throw new NotFoundException(__('Invalid d cart'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DCart->save($this->request->data)) {
				$this->Flash->success(__('The d cart has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The d cart could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DCart.' . $this->DCart->primaryKey => $id));
			$this->request->data = $this->DCart->find('first', $options);
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
		if (!$this->DCart->exists($id)) {
			throw new NotFoundException(__('Invalid d cart'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DCart->delete($id)) {
			$this->Flash->success(__('The d cart has been deleted.'));
		} else {
			$this->Flash->error(__('The d cart could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
