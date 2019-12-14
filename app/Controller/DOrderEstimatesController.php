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

	public $helpers = array('Html', 'Form');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');


	public function confirmcart() {
		//POSTで入って来た
		if($this->request->is('post')){
//			$order_estimate_cd = $this->request->data(変数名検討中)
			//必要な値を持っている(要らんか?
			$options = array('conditions' => array('DOrderEstimate.' . $this->DOrderEstimate->primaryKey => '2
			'));//※テスト用仮
			//DOrderEstimate上に目的のレコードが存在しているか確認（していない場合エラー終了
			if($this->DOrderEstimate->find('first', $options) != null){//レコードが見つかる＝POST内容が正しい
				echo 'レコードあり';
//				var_dump($this->DOrderEstimate->find('first', $options));
				$order = $this->DOrderEstimate->find('first', $options);
				$order = $order['DOrderEstimate'];
				$temp = '';
				$cart = array(
						'cart_cd' => '',
						'login_cd' => $this->Cookie->read('lcdc'),
						'user_cd' => $this->Cookie->read('ucdc'),
						'item_cd' => $order['item_cd'],
						'item_no' => $order['item_no'],
						'item_name1' => $temp,
						'item_name2' => $temp,
						'catg_l_cd' => $temp,
						'catg_m_cd' => $temp,
						'fixed_price' => $temp,
						'code_price' => $temp,
						'discount_rate' => $temp,
						'sales_price' => $temp,
						'item_img1' => $temp,
						'maker_price' => $temp,
						'nouki' => $temp,
						'order_num' => $temp,
						'sub_total_price' => $temp,
						'biko_sub' => $temp,
						'update_day' => $temp,
						'souryou' => $temp,
						'stock_flag' => $temp,
						'sales_limit' => $temp,
						'open_price_flag' => $temp,
						's_free_flag' => $temp,
						'upload_flag' => $temp,
						'hontai_price' => $temp,
						'sub_total_hontai_price' => $temp,
						'souryo_taxfree' => $temp,
						'fixed_price_hontai' => $temp

				);

				$apple = array("orange", "banana");
				$apple['mac']='OS';
				var_dump($apple);

			}else {
				echo 'ぬる';
				var_dump($this->DOrderEstimate->find('first', $options));

			}
		}



//こっから本来の
		$this->loadModel("DCart");
//		$estimateid = $this->request->data('Dinfos.estimateid');
		$estimateid = '106247';//テスト用固定No、実装時にはPOSTで受ける
		if ($this->request->is('post')){
			$ans = $this->DCart->find('all', array('conditions' => array('cart_cd' => $estimateid)));


//			var_dump($ans);
//		if ($this->DOrderEstimate->save($ans['0']["DOrderEstimate"])){
			$this->Session->setFlash("おｋ");
//		} else {
//			$this->Session->setFlash("だめ");
			}
//		}
	}


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
