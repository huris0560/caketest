<?php
App::uses('AppController', 'Controller');
/**
 * DCreditProcs Controller
 *
 * @property DCreditProc $DCreditProc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
date_default_timezone_set('Asia/Tokyo');

class DCreditProcsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

	//class SB_Payment {



	public function creditpay(){

		$this->set('temp', 'hoge');

		//ログインチェック
		//$this->_neko_auth();

		//モデル読み込み
		$this->loadModel("DOrderEstimate");
		$this->loadModel("DUser");
		if($this->request->is('post')){	//POSTで入ってきている事を確認
			//POST内容を変数へ
			$cart = $this->request->data('cart');
			$estimate_cd = $cart['estimate_cd'];
			$dojin =  $cart['dojin'];
			$pay_method = $cart['pay_method'];

			$this->set('estimate_cd', $estimate_cd);
			$this->set('dojin', $dojin);
			//カート情報収集
			$options = array('conditions' => array('DOrderEstimate.' .'estimate_no' => $estimate_cd));
			$orderestimate = $this->DOrderEstimate->find('first', $options);
			var_dump($orderestimate);
			$this->set('cart' , $orderestimate);



			//トークン化javascript実施


			//支払いに必要な情報を読み込み
			$cust_code = $orderestimate['DOrderEstimate']['user_cd'];
			$order_id = $orderestimate['DOrderEstimate']['order_cd'];
			$item_id ='00001';//固定値
			$item_name = '同人誌受注';
			$amount = $orderestimate['DOrderEstimate']['sum_price'];
			$free1 ='';
			$free2 ='';
			$free3 ='';
			$token ='';
			$tokenKey = '';
			$divide_times = '';
			echo $amount;

			//画面表示に必要な情報を取得＆Viewへ渡す



			//ファンクション試験

//	$hoge = $this->_do_credit_authorization($cust_code, $order_id, $item_id, $item_name, $amount, $free1, $free2, $free3, $token, $tokenKey, $divide_times);



		return 0;
		}
	}


	public function SB_credit_pay(){//eet改
		//ctpを描画しないようにする
		$this->autoRender =false;
		// Ajax通信でこのアクションが実行された時だけ処理を行う
		if ($this->request->is('ajax')) {
			// 支払いに必要なデータを変数へ代入


			$card_co     = $this->request->data['card_co'];;
			$haiso_time  = $this->request->data['haiso_time'];
			$hinmoku     = $this->request->data['hinmoku'];
			$item_memo   = $this->request->data['item_memo'];
			$token       = $this->request->data['token'];
			$tokenKey    = $this->request->data['tokenKey'];
			$card_nm     = $this->request->data['card_nm'];
			$card_pay    = $this->request->data['card_pay'];
			$pay_times   = $this->request->data['pay_times'];
			$pay_sid     = $this->request->data['pay_sid'];
			$df          = $this->request->data['df'];
			$ecd         = $this->request->data['ecd'];
			$user_cd     = $this->request->data['user_cd'];
			$free1       = $this->request->data['$card_nm'];
			$free2       = "";
			$free3       = "";
			$cust_code   = $this->request->data['$user_cd'];
			$item_id     = "00001";
			$item_name   = "物販・印刷受注";
			$divide_times =$this->request->data['$pay_times'];



			$piyo = $this->request->data['hoge'];
			// 必要な処理を実装していく

			$resp = $piyo.'を受領しました';

			// 戻り値を返却する
			return json_encode($resp);
		}
	}


	public function hoge() {//備忘用ajax受け答え試用霊
		// HTMLを描画しないようにする
		$this->autoRender = false;
		// Ajax通信でこのアクションが実行された時だけ処理を行う
		if ($this->request->is('ajax')) {
			// 送られてきたリクエストデータを取得する
			$piyo = $this->request->data['piyo'];
			// 必要な処理を実装していく

			// 戻り値を返却する
			return json_encode('処理成功');
		}
	}




	public function _do_credit_authorization($cust_code, $order_id, $item_id, $item_name, $amount, $free1, $free2, $free3, $token, $tokenKey, $divide_times){//決済要求（ワンタイムトークン利用）
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		$tax                      = '0';//
//		$free1                    = "";
//		$free2                    = "";
//		$free3                    = "";
		$order_rowno              = "";
		$sps_cust_info_return_flg = "1";//固定値
		$cust_manage_flg          = '0';
		$cardbrand_return_flg     = '1';
		$encrypted_flg            = '1';
		$request_date             = date("YmdHis");
		$limit_second             = '';//省略
		$hashkey                  = HASHKEY;
		$basic_username           = BASIC_USERNAME;
		$basic_PW                 = BASIC_PASS;

		//クレジットカード支払い回数を取引区分に変換
		if ($divide_times == ''){//支払い回数が1回の場合取引区分10：一括
			$dealings_type ='10';
			$divide_times ='1';
		}else{//それ以外の場合には取引区分61：分割
			$dealings_type ='61';
		}

		//空白文字の削除
		$merchant_id              = trim($merchant_id);
		$service_id               = trim($service_id);
		$cust_code                = trim($cust_code);
		$order_id                 = trim($order_id);
		$item_id                  = trim($item_id);
		$item_name                = trim($item_name);
		$tax                      = trim($tax);
		$amount                   = trim($amount);
		$free1                    = trim($free1);
		$free2                    = trim($free2);
		$free3                    = trim($free3);
		$order_rowno              = trim($order_rowno);
		$sps_cust_info_return_flg = trim($sps_cust_info_return_flg);
		$dealings_type            = trim($dealings_type);
		$divide_times             = trim($divide_times);
		$token                    = trim($token);
		$tokenKey                 = trim($tokenKey);
		$cust_manage_flg          = trim($cust_manage_flg);
		$encrypted_flg            = trim($encrypted_flg);
		$request_date             = trim($request_date);
		$limit_second             = trim($limit_second);
		$hashkey                  = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id              = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id               = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$cust_code                = mb_convert_encoding($cust_code, 'Shift_JIS', 'UTF-8');
		$order_id                 = mb_convert_encoding($order_id, 'Shift_JIS', 'UTF-8');
		$item_id                  = mb_convert_encoding($item_id, 'Shift_JIS', 'UTF-8');
		$item_name                = mb_convert_encoding($item_name, 'Shift_JIS', 'UTF-8');
		$tax                      = mb_convert_encoding($tax, 'Shift_JIS', 'UTF-8');
		$amount                   = mb_convert_encoding($amount, 'Shift_JIS', 'UTF-8');
		$free1                    = mb_convert_encoding($free1, 'Shift_JIS', 'UTF-8');
		$free2                    = mb_convert_encoding($free2, 'Shift_JIS', 'UTF-8');
		$free3                    = mb_convert_encoding($free3, 'Shift_JIS', 'UTF-8');
		$order_rowno              = mb_convert_encoding($order_rowno, 'Shift_JIS', 'UTF-8');
		$sps_cust_info_return_flg = mb_convert_encoding($sps_cust_info_return_flg, 'Shift_JIS', 'UTF-8');
		$dealings_type            = mb_convert_encoding($dealings_type, 'Shift_JIS', 'UTF-8');
		$divide_times             = mb_convert_encoding($divide_times, 'Shift_JIS', 'UTF-8');
		$token                    = mb_convert_encoding($token, 'Shift_JIS', 'UTF-8');
		$tokenKey                 = mb_convert_encoding($tokenKey, 'Shift_JIS', 'UTF-8');
		$cust_manage_flg          = mb_convert_encoding($cust_manage_flg, 'Shift_JIS', 'UTF-8');
		$encrypted_flg            = mb_convert_encoding($encrypted_flg, 'Shift_JIS', 'UTF-8');
		$request_date             = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second             = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                  = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');
		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$cust_code .
		$order_id .
		$item_id .
		$item_name .
		$tax .
		$amount .
		$free1 .
		$free2 .
		$free3 .
		$order_rowno .
		$sps_cust_info_return_flg .
		$dealings_type .
		$divide_times .
		$token .
		$tokenKey .
		$cust_manage_flg .
		$encrypted_flg .
		$request_date .
		$limit_second .
		$hashkey;

		//		echo $result;


		// SHA1変換
		$sps_hashcode = sha1($result);
		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST01-00131-101\">" .
		"<merchant_id>"                 . $merchant_id              . "</merchant_id>" .
		"<service_id>"                  . $service_id               . "</service_id>" .
		"<cust_code>"                   . $cust_code                . "</cust_code>" .
		"<order_id>"                    . $order_id                 . "</order_id>" .
		"<item_id>"                     . $item_id                  . "</item_id>" .
		"<item_name>"                   . base64_encode($item_name) . "</item_name>" .
		"<tax>"                         . $tax                      . "</tax>" .
		"<amount>"                      . $amount                   . "</amount>" .
		"<free1>"                       . base64_encode($free1)     . "</free1>" .
		"<free2>"                       . base64_encode($free2)     . "</free2>" .
		"<free3>"                       . base64_encode($free3)     . "</free3>" .
		"<order_rowno>"                 . $order_rowno              . "</order_rowno>" .
		"<sps_cust_info_return_flg>"    . $sps_cust_info_return_flg . "</sps_cust_info_return_flg>" .
		"<dtls>" .
		"<dtl>" .
		"</dtl>" .
		"</dtls>" .
		"<pay_method_info>" .
		"<dealings_type>"               . $this->_ango($dealings_type)      . "</dealings_type>".
		"<divide_times>"                . $this->_ango($divide_times)       . "</divide_times>".
		"</pay_method_info>" .
		"<pay_option_manage>" .
		"<token>"                       . $token                    . "</token>" .
		"<token_key>"                   . $tokenKey                 . "</token_key>" .
		"<cust_manage_flg>"             . $cust_manage_flg          . "</cust_manage_flg>" .
		"</pay_option_manage>" .
		"<encrypted_flg>"               . $encrypted_flg            . "</encrypted_flg>" .
		"<request_date>"                . $request_date             . "</request_date>" .
		"<limit_second>"                . $limit_second             . "</limit_second>" .
		"<sps_hashcode>"                . $sps_hashcode             . "</sps_hashcode>" .
		"</sps-api-request>";



		// 接続URL
		$url = API_URL;
		// データ送信処理
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}
		return $vals;
	}


	public function _do_credit_confirm($sps_transaction_id, $tracking_id){//確定要求
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		$processing_datetime      = '';//処理日時　非必須項目おそらく決済処理を行った日時だが、受け渡し方法を用意していない。
		$request_date             = date("YmdHis");
		$limit_second             = '';//省略
		$hashkey                  = HASHKEY;
		$basic_username           = BASIC_USERNAME;
		$basic_PW                 = BASIC_PASS;


		//空白文字の削除
		$merchant_id              = trim($merchant_id);
		$service_id               = trim($service_id);
		$sps_transaction_id       = trim($sps_transaction_id);
		$tracking_id              = trim($tracking_id);
		$processing_datetime      = trim($processing_datetime);
		$request_date             = trim($request_date);
		$limit_second             = trim($limit_second);
		$hashkey                  = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id              = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id               = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$sps_transaction_id       = mb_convert_encoding($sps_transaction_id, 'Shift_JIS', 'UTF-8');
		$tracking_id              = mb_convert_encoding($tracking_id, 'Shift_JIS', 'UTF-8');
		$processing_datetime      = mb_convert_encoding($processing_datetime, 'Shift_JIS', 'UTF-8');
		$request_date             = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second             = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                  = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');

		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$sps_transaction_id .
		$tracking_id .
		$processing_datetime .
		$request_date .
		$limit_second .
		$hashkey;


		// SHA1変換
		$sps_hashcode = sha1($result);

		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST02-00101-101\">" .
		"<merchant_id>"                 . $merchant_id               . "</merchant_id>" .
		"<service_id>"                  . $service_id                . "</service_id>" .
		"<sps_transaction_id>"          . $sps_transaction_id        . "</sps_transaction_id>" .
		"<tracking_id>"                 . $tracking_id               . "</tracking_id>" .
		"<processing_datetime>"         . $processing_datetime       . "</processing_datetime>" .
		"<request_date>"                . $request_date              . "</request_date>" .
		"<limit_second>"                . $limit_second              . "</limit_second>" .
		"<sps_hashcode>"                . $sps_hashcode              . "</sps_hashcode>" .
		"</sps-api-request>";



		// 接続URL
		$url = API_URL;

		// データ送信処理
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}
		return $vals;
	}


	public function _do_credit_salesrequire($sps_transaction_id, $tracking_id, $amount, $processing_datetime){//売上要求、部分売上要求
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		$request_date             = date("YmdHis");
		$limit_second             = '';//省略
		$hashkey                  = HASHKEY;
		$basic_username           = BASIC_USERNAME;
		$basic_PW                 = BASIC_PASS;

		//空白文字の削除
		$merchant_id              = trim($merchant_id);
		$service_id               = trim($service_id);
		$sps_transaction_id       = trim($sps_transaction_id);
		$tracking_id              = trim($tracking_id);
		$processing_datetime      = trim($processing_datetime);
		$amount                   = trim($amount);
		$request_date             = trim($request_date);
		$limit_second             = trim($limit_second);
		$hashkey                  = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id              = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id               = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$sps_transaction_id       = mb_convert_encoding($sps_transaction_id, 'Shift_JIS', 'UTF-8');
		$tracking_id              = mb_convert_encoding($tracking_id, 'Shift_JIS', 'UTF-8');
		$processing_datetime      = mb_convert_encoding($processing_datetime, 'Shift_JIS', 'UTF-8');
		$request_date             = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second             = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                  = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');
		$amount                   = mb_convert_encoding($amount, 'Shift_JIS', 'UTF-8');

		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$sps_transaction_id .
		$tracking_id .
		$processing_datetime .
		$amount .
		$request_date .
		$limit_second .
		$hashkey;

		//		echo $result;


		// SHA1変換
		$sps_hashcode = sha1($result);

		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST02-00201-101\">" .
		"<merchant_id>"                 . $merchant_id               . "</merchant_id>" .
		"<service_id>"                  . $service_id                . "</service_id>" .
		"<sps_transaction_id>"          . $sps_transaction_id        . "</sps_transaction_id>" .
		"<tracking_id>"                 . $tracking_id               . "</tracking_id>" .
		"<processing_datetime>"         . $processing_datetime       . "</processing_datetime>" .
		"<pay_option_manage>".
		"<amount>"                  . $amount                    . "</amount>" .
		"</pay_option_manage>".
		"<request_date>"                . $request_date              . "</request_date>" .
		"<limit_second>"                . $limit_second              . "</limit_second>" .
		"<sps_hashcode>"                . $sps_hashcode              . "</sps_hashcode>" .
		"</sps-api-request>";


		// 接続URL
		$url = API_URL;

		// データ送信処理
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}elseif($vals["0"]["value"] == "OK"){
		}
		return $vals;
	}



	public function _do_credit_refund($sps_transaction_id, $tracking_id){//取消返金要求
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		$processing_datetime      = '20190323192350';//処理日時　非必須項目おそらく決済処理を行った日時だが、受け渡し方法を用意していない。
		$request_date             = date("YmdHis");
		$limit_second             = '';//省略
		$hashkey                  = HASHKEY;
		$basic_username           = BASIC_USERNAME;
		$basic_PW                 = BASIC_PASS;

		//空白文字の削除
		$merchant_id              = trim($merchant_id);
		$service_id               = trim($service_id);
		$sps_transaction_id       = trim($sps_transaction_id);
		$tracking_id              = trim($tracking_id);
		$processing_datetime      = trim($processing_datetime);
		$request_date             = trim($request_date);
		$limit_second             = trim($limit_second);
		$hashkey                  = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id              = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id               = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$sps_transaction_id       = mb_convert_encoding($sps_transaction_id, 'Shift_JIS', 'UTF-8');
		$tracking_id              = mb_convert_encoding($tracking_id, 'Shift_JIS', 'UTF-8');
		$processing_datetime      = mb_convert_encoding($processing_datetime, 'Shift_JIS', 'UTF-8');
		$request_date             = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second             = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                  = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');

		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$sps_transaction_id .
		$tracking_id .
		$processing_datetime .
		$request_date .
		$limit_second .
		$hashkey;

		// SHA1変換
		$sps_hashcode = sha1($result);

		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST02-00303-101\">" .
		"<merchant_id>"                 . $merchant_id               . "</merchant_id>" .
		"<service_id>"                  . $service_id                . "</service_id>" .
		"<sps_transaction_id>"          . $sps_transaction_id        . "</sps_transaction_id>" .
		"<tracking_id>"                 . $tracking_id               . "</tracking_id>" .
		"<processing_datetime>"         . $processing_datetime       . "</processing_datetime>" .
		"<request_date>"                . $request_date              . "</request_date>" .
		"<limit_second>"                . $limit_second              . "</limit_second>" .
		"<sps_hashcode>"                . $sps_hashcode              . "</sps_hashcode>" .
		"</sps-api-request>";


		// 接続URL
		$url = API_URL;

		// データ送信処理
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}
		return $vals;
	}


	public function _do_credit_partrefund($sps_transaction_id, $tracking_id, $amount, $processing_datetime){//部分返金要求
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		$request_date             = date("YmdHis");
		$limit_second             = '';//省略
		$hashkey                  = HASHKEY;
		$basic_username           = BASIC_USERNAME;
		$basic_PW                 = BASIC_PASS;

		//空白文字の削除
		$merchant_id              = trim($merchant_id);
		$service_id               = trim($service_id);
		$sps_transaction_id       = trim($sps_transaction_id);
		$tracking_id              = trim($tracking_id);
		$processing_datetime      = trim($processing_datetime);
		$amount                   = trim($amount);
		$request_date             = trim($request_date);
		$limit_second             = trim($limit_second);
		$hashkey                  = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id              = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id               = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$sps_transaction_id       = mb_convert_encoding($sps_transaction_id, 'Shift_JIS', 'UTF-8');
		$tracking_id              = mb_convert_encoding($tracking_id, 'Shift_JIS', 'UTF-8');
		$processing_datetime      = mb_convert_encoding($processing_datetime, 'Shift_JIS', 'UTF-8');
		$request_date             = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second             = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                  = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');
		$amount                   = mb_convert_encoding($amount, 'Shift_JIS', 'UTF-8');

		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$sps_transaction_id .
		$tracking_id .
		$processing_datetime .
		$amount .
		$request_date .
		$limit_second .
		$hashkey;


		// SHA1変換
		$sps_hashcode = sha1($result);

		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST02-00307-101\">" .
		"<merchant_id>"                 . $merchant_id               . "</merchant_id>" .
		"<service_id>"                  . $service_id                . "</service_id>" .
		"<sps_transaction_id>"          . $sps_transaction_id        . "</sps_transaction_id>" .
		"<tracking_id>"                 . $tracking_id               . "</tracking_id>" .
		"<processing_datetime>"         . $processing_datetime       . "</processing_datetime>" .
		"<pay_option_manage>".
		"<amount>"                  . $amount                    . "</amount>" .
		"</pay_option_manage>".
		"<request_date>"                . $request_date              . "</request_date>" .
		"<limit_second>"                . $limit_second              . "</limit_second>" .
		"<sps_hashcode>"                . $sps_hashcode              . "</sps_hashcode>" .
		"</sps-api-request>";


		// 接続URL
		$url = API_URL;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}elseif($vals["0"]["value"] == "OK"){
		}
		return $vals;
	}




	//試製再与信API　まだ使用禁止で！

	public function _re_credit_authorization($tracking_id, $cust_code, $order_id, $item_id, $amount){//決済要求（ワンタイムトークン利用）
		$merchant_id              = SBP_SHOP_MERCHANT_ID;
		$service_id               = SBP_SERVICE_ID;
		//	$tax                      = '0';//
		$sps_cust_info_return_flg = "1";//固定値
		$cust_manage_flg              = '0';
		$pay_info_control_type        = 'B';
		$pay_info_detail_control_type = 'B';
		$encrypted_flg                = '1';
		$request_date                 = date("YmdHis");
		$limit_second                 = '';//省略
		$hashkey                      = HASHKEY;
		$basic_username               = BASIC_USERNAME;
		$basic_PW                     = BASIC_PASS;

		//クレジットカード支払い回数を取引区分に変換
		if ($divide_times == ''){//支払い回数が1回の場合取引区分10：一括
			$dealings_type ='10';
			$divide_times ='1';
		}else{//それ以外の場合には取引区分61：分割
			$dealings_type ='61';
		}

		//空白文字の削除
		$merchant_id                    = trim($merchant_id);
		$service_id                     = trim($service_id);
		$tracking_id                    = trim($tracking_id);
		$cust_code                      = trim($cust_code);
		$order_id                       = trim($order_id);
		$item_id                        = trim($item_id);
		//	$tax                            = trim($tax);
		$amount                         = trim($amount);
		$sps_cust_info_return_flg       = trim($sps_cust_info_return_flg);
		//		$dealings_type                  = trim($dealings_type);
		//		$divide_times                   = trim($divide_times);
		//		$token                          = trim($token);
		//		$tokenKey                       = trim($tokenKey);

		$pay_info_control_type          = trim($pay_info_control_type);
		$pay_info_detail_control_type   = trim($pay_info_detail_control_type);

		$cust_manage_flg                 = trim($cust_manage_flg);
		$encrypted_flg                  = trim($encrypted_flg);
		$request_date                   = trim($request_date);
		$limit_second                   = trim($limit_second);
		$hashkey                        = trim($hashkey);

		//Shift_JIS変換変換
		$merchant_id                    = mb_convert_encoding($merchant_id, 'Shift_JIS', 'UTF-8');
		$service_id                     = mb_convert_encoding($service_id, 'Shift_JIS', 'UTF-8');
		$tracking_id                    = mb_convert_encoding($tracking_id, 'Shift_JIS', 'UTF-8');
		$cust_code                      = mb_convert_encoding($cust_code, 'Shift_JIS', 'UTF-8');
		$order_id                       = mb_convert_encoding($order_id, 'Shift_JIS', 'UTF-8');
		$item_id                        = mb_convert_encoding($item_id, 'Shift_JIS', 'UTF-8');
		$tax                            = mb_convert_encoding($tax, 'Shift_JIS', 'UTF-8');
		$amount                         = mb_convert_encoding($amount, 'Shift_JIS', 'UTF-8');
		$sps_cust_info_return_flg       = mb_convert_encoding($sps_cust_info_return_flg, 'Shift_JIS', 'UTF-8');
		//		$dealings_type                  = mb_convert_encoding($dealings_type, 'Shift_JIS', 'UTF-8');
		//		$divide_times                   = mb_convert_encoding($divide_times, 'Shift_JIS', 'UTF-8');

		$pay_info_control_type          = mb_convert_encoding($pay_info_control_type, 'Shift_JIS', 'UTF-8');
		$pay_info_detail_control_type   = mb_convert_encoding($pay_info_detail_control_type, 'Shift_JIS', 'UTF-8');

		$cust_manage_flg                = mb_convert_encoding($cust_manage_flg, 'Shift_JIS', 'UTF-8');
		$encrypted_flg                  = mb_convert_encoding($encrypted_flg, 'Shift_JIS', 'UTF-8');
		$request_date                   = mb_convert_encoding($request_date, 'Shift_JIS', 'UTF-8');
		$limit_second                   = mb_convert_encoding($limit_second, 'Shift_JIS', 'UTF-8');
		$hashkey                        = mb_convert_encoding($hashkey, 'Shift_JIS', 'UTF-8');

		//送信情報結合
		$result =
		$merchant_id .
		$service_id .
		$tracking_id .
		$cust_code .
		$order_id .
		$item_id .
		//	$tax .
		$amount .
		$sps_cust_info_return_flg .
		//		$dealings_type .
		//		$divide_times .

		$pay_info_control_type .
		$pay_info_detail_control_type .

		$cust_manage_flg .
		$encrypted_flg .
		$request_date .
		$limit_second .
		$hashkey;

		//		echo $result;


		// SHA1変換
		$sps_hashcode = sha1($result);
		// POSTデータ生成
		$postdata =
		"<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>" .
		"<sps-api-request id=\"ST01-00131-101\">" .
		"<merchant_id>"                              . $merchant_id                          . "</merchant_id>" .
		"<service_id>"                               . $service_id                           . "</service_id>" .
		"<tracking_id>"                              . $tracking_id                          . "</tracking_id>" .
		"<cust_code>"                                . $cust_code                            . "</cust_code>" .
		"<order_id>"                                 . $order_id                             . "</order_id>" .
		"<item_id>"                                  . $item_id                              . "</item_id>" .
		//		"<tax>"                                      . $tax                                  . "</tax>" .
		"<amount>"                                   . $amount                               . "</amount>" .
		"<sps_cust_info_return_flg>"                 . $sps_cust_info_return_flg             . "</sps_cust_info_return_flg>" .
		"<dtls>" .
		"<dtl>" .
		"</dtl>" .
		"</dtls>" .
		"<pay_method_info>" .
		"</pay_method_info>" .
		"<pay_option_manage>" .
		"<pay_info_control_type>"                   . $pay_info_control_type                 . "</pay_info_control_type>" .
		"<pay_info_detail_control_type>"            . $pay_info_detail_control_type          . "</pay_info_detail_control_type>" .
		"<cust_manage_flg>"                         . $cust_manage_flg                       . "</cust_manage_flg>" .
		"</pay_option_manage>" .
		"<encrypted_flg>"                           . $encrypted_flg                         . "</encrypted_flg>" .
		"<request_date>"                            . $request_date                          . "</request_date>" .
		"<limit_second>"                            . $limit_second                          . "</limit_second>" .
		"<sps_hashcode>"                            . $sps_hashcode                          . "</sps_hashcode>" .
		"</sps-api-request>";

		// 接続URL
		$url = API_URL;
		// データ送信処理
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERPWD,$basic_username.":".$basic_PW);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		if (!defined('CURL_SSLVERSION_TLSv1_2')) define('CURL_SSLVERSION_TLSv1_2', 6);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		$result = curl_exec($ch);
		//		レスポンスのarray化＆復号
		$simple = $result;
		$p = xml_parser_create();
		xml_parse_into_struct($p, $simple, $vals, $index);
		xml_parser_free($p);
		//返答がちゃんと帰ってきているか確認、帰ってきていない場合には失敗で返す。
		$check_result = strpos($result, "res_result");
		if($check_result === FALSE){
			return $vals;
		}
		return $vals;
	}


	public function _pad_8bite($str){
		$leng =ceil( strlen($str)/8)*8;
		return str_pad($str,$leng);
	}

	public function _ango($input){//encryption
		if ($input ==''){
			return '';
		}
		$pass       = '202fd5e2928cde586fcb770d';
		$iv         = '3f2facf4';
		$raw_output = OPENSSL_RAW_DATA;
		$method     = 'DES-EDE3-CBC';
		$input      = $this->_pad_8bite($input);
		$enc        = openssl_encrypt($input, $method, $pass, $raw_output, $iv);
		$enc        = base64_encode($enc);
		return $enc;
	}

	public function _hukugo($input){//Decryption
		$pass       = '202fd5e2928cde586fcb770d';
		$iv         = '3f2facf4';
		$raw_output = false;
		$method     = 'DES-EDE3-CBC';
		$input      =base64_decode($input);
		$dec = openssl_decrypt($input,   $method, $pass, $raw_output, $iv);
		//		echo $enc;
		return $dec;
	}

	public function _getErrorMessageByCode($errorCode) {
		//SBペイメント ST01 対応

		$errorMessage = 'コードの判定に失敗しました。';
		$errorMessage45 = '';
		$errorMessage678 = '';

		if (strlen($errorCode) == 8) {
			$code123 = substr($errorCode, 0, 3);
			$code45 = substr($errorCode, 3, 2);
			$code678 = substr($errorCode, 5, 3);

			if ($code45 >= '00' || $code45 <= '14') {
				//リクエストXML に関連するエラー
				switch ($code45) {
					case '00':
						$errorMessage45 = 'XML 形式エラー';
						break;
					case '01':
						$errorMessage45 = '支払方法有効性エラー';
						break;
					case '02':
						$errorMessage45 = 'API リクエストID 存在エラー';
						break;
					case '03':
						$errorMessage45 = '必須エラー';
						break;
					case '04':
						$errorMessage45 = '属性エラー';
						break;
					case '05':
						$errorMessage45 = '桁数エラー';
						break;
					case '06':
						$errorMessage45 = '形式エラー';
						break;
					case '07':
						$errorMessage45 = '定義値エラー';
						break;
					case '09':
						$errorMessage45 = 'ハッシュ値エラー';
						break;
					case '10':
						$errorMessage45 = 'リクエスト有効期限エラー';
						break;
					case '12':
						$errorMessage45 = '処理対象トラッキングID エラー';
						break;
					case '13':
						$errorMessage45 = '指定不可エラー';
						break;
					case '14':
						$errorMessage45 = 'マーチャントID・サービスID 不正エラー';
						break;
						//SBペイメント内部処理で発生するエラー
					case '80':
						$errorMessage45 = 'GWシステムエラー';
						break;
					case '81':
						$errorMessage45 = 'APIリクエストパラメータエラー';
						break;
					case '83':
						$errorMessage45 = 'GWレコード検索エラー';
						break;
					case '86':
						$errorMessage45 = '決済会社システムエラー';
						break;
						//API処理で発生するエラー
					case '90':
						$errorMessage45 = 'APIシステムエラー';
						break;
					case '92':
						$errorMessage45 = 'GW接続エラー';
						break;
					case '93':
						$errorMessage45 = '再入力上限回数制限エラー';
						break;
					case '94':
						$errorMessage45 = '決済未完了エラー';
						break;
					case '95':
						$errorMessage45 = '顧客情報整合性エラー';
						break;
					case '96':

						$errorMessage45 = '2重リクエストエラー';
						break;
				}
			}

			if ($code678 >= '000' || $code678 <= '030') {
				//共通項目
				switch ($code678) {
					case '000':
						$errorMessage678 = 'API リクエストID';
						break;
					case '001':
						$errorMessage678 = 'マーチャントID';
						break;
					case '002':
						$errorMessage678 = 'サービスID';
						break;
					case '003':
						$errorMessage678 = '顧客ID';
						break;
					case '004':
						$errorMessage678 = '購入ID';
						break;
					case '005':
						$errorMessage678 = '商品ID';
						break;
					case '006':
						$errorMessage678 = '商品名称';
						break;
					case '007':
						$errorMessage678 = '税額';
						break;
					case '008':
						$errorMessage678 = '金額(税込)';
						break;
					case '009':
						$errorMessage678 = '結果通知先CGI';
						break;
					case '010':
						$errorMessage678 = '自由欄1';
						break;
					case '011':
						$errorMessage678 = '自由欄2';
						break;
					case '012':
						$errorMessage678 = '自由欄3';
						break;
					case '013':
						$errorMessage678 = '請求番号枝番';
						break;
					case '014':
						$errorMessage678 = '明細行番号';
						break;
					case '015':
						$errorMessage678 = '明細商品ID';
						break;
					case '016':
						$errorMessage678 = '明細商品名称';
						break;
					case '017':
						$errorMessage678 = '明細数量';
						break;
					case '018':
						$errorMessage678 = '明細税額';
						break;
					case '019':
						$errorMessage678 = '明細金額(税込)';
						break;
					case '020':
						$errorMessage678 = '決済区分';
						break;
					case '021':
						$errorMessage678 = '最終課金月';
						break;
					case '022':
						$errorMessage678 = 'キャンペーンタイプ';
						break;
					case '023':
						$errorMessage678 = 'リクエスト日時';
						break;
					case '024':
						$errorMessage678 = 'リクエスト許容時間';
						break;
					case '025':
						$errorMessage678 = 'チェックサム';
						break;
					case '027':
						$errorMessage678 = '処理対象トラッキングID';
						break;
					case '028':
						$errorMessage678 = '3DES 暗号化フラグ';
						break;
					case '030':
						$errorMessage678 = 'SBPS 顧客情報返却フラグ';
						break;
				}
			}
			switch ($code123) {
				case '101':
					//クレジットカード決済
					switch ($code45) {
						case '20':
							$errorMessage45 = 'クレジットカード不正カードフィルタエラー';
							break;
						case '21':
							$errorMessage45 = 'クレジットセンターエラー';
							break;
						case '22':
							$errorMessage45 = 'クレジットカード利用限度額超過';
							break;
						case '23':
							$errorMessage45 = 'クレジットカード使用不可';
							break;
						case '24':
							$errorMessage45 = '暗証番号不正';
							break;
						case '25':
							$errorMessage45 = 'クレジットカード利用限度回数超過';
							break;
						case '26':
							$errorMessage45 = 'クレジットカード取扱不可';
							break;
						case '27':
							$errorMessage45 = 'クレジットカード番号・有効期限誤り';
							break;
						case '28':
							$errorMessage45 = '取引内容取扱不可';
							break;
						case '29':
							$errorMessage45 = '指定ボーナス回数利用不可';
							break;
						case '30':
							$errorMessage45 = '指定ボーナス月利用不可';
							break;
						case '31':
							$errorMessage45 = '指定ボーナス金額利用不可';
							break;
						case '32':
							$errorMessage45 = '指定支払開始月利用不可';
							break;
						case '33':
							$errorMessage45 = '指定分割回数利用不可';
							break;
						case '34':
							$errorMessage45 = '指定分割金額利用不可';
							break;
						case '35':
							$errorMessage45 = '指定初回お支払い金額利用不可';
							break;
						case '36':
							$errorMessage45 = 'その他与信エラー';
							break;
						case '39':
							$errorMessage45 = '与信結果が存在しないため、売上処理を中止しました。';
							break;
						case '40':
							$errorMessage45 = '与信取消済みのため、売上処理を中止しました。';
							break;
						case '41':
							$errorMessage45 = '売上処理が完了済みのため、処理を中止しました。';
							break;
						case '42':
							$errorMessage45 = '売上処理の処理日時は、与信日から3ヶ月目末日まで有効です。';
							break;
						case '44':
							$errorMessage45 = '与信結果が存在しないため、返金処理を中止しました。';
							break;
						case '45':
							$errorMessage45 = '与信取消済みのため、返金処理を中止しました。';
							break;
						case '46':
							$errorMessage45 = '返金処理済みのため、返金処理を中止しました。';
							break;
						case '51':
							$errorMessage45 = '与信結果が存在しないため、与信取消処理を中止しました。';
							break;
						case '52':
							$errorMessage45 = '与信取消済みのため、与信取消処理を中止しました。';
							break;
						case '56':
							$errorMessage45 = '返金処理は、売上日以降かつ、与信取消日から3ヶ月目末日まで有効です。';
							break;
						case '36':
							$errorMessage45 = 'その他与信エラー';
							break;
						case '36':
							$errorMessage45 = 'その他与信エラー';
							break;
						case '36':
							$errorMessage45 = 'その他与信エラー';
							break;
						case '61':
							$errorMessage45 = 'セキュリティコード誤り';
							break;
						case '63':
							$errorMessage45 = '認証アシスト情報必須エラー';
							break;
						case '64':
							$errorMessage45 = 'SmartLink センターエラー';
							break;
						case '65':
							$errorMessage45 = '決済会社判定エラー「G12:カード使用不可」';
							break;
						case '66':
							$errorMessage45 = '決済会社判定エラー「G30:取引判定保留(有人判定)」';
							break;
						case '67':
							$errorMessage45 = '決済会社判定エラー「G44:セキュリティコード誤り」';
							break;
						case '68':
							$errorMessage45 = '決済会社判定エラー「G54:1 口座利用回数または金額エラー」';
							break;
						case '69':
							$errorMessage45 = '決済会社判定エラー「G55:1 日限度額オーバー」';
							break;
						case '70':
							$errorMessage45 = '決済会社判定エラー「G60:事故カード」';
							break;
						case '71':
							$errorMessage45 = '決済会社判定エラー「G61:無効カード」';
							break;
						case '72':
							$errorMessage45 = '決済会社判定エラー「G65:会員番号エラー」';
							break;
						case '73':
							$errorMessage45 = '決済会社判定エラー「G83:有効期限エラー」';
							break;
						case '74':
							$errorMessage45 = '決済会社判定エラー「G85:サービス対象外エラー」';
							break;
						case '75':
							$errorMessage45 = '決済会社判定エラー(1:アンマッチ(照合NG))';
							break;
						case '76':
							$errorMessage45 = '決済会社判定エラー(9:照会不可)';
							break;
						case '77':
							$errorMessage45 = '決済会社判定エラー(5:SLN センターで代行オーソリを実施)';
							break;
						case '78':
							$errorMessage45 = 'クレジットカード情報保存フラグ指定エラー';
							break;
						case 'K2':
							$errorMessage45 = 'クレジットカード使用不可(G30:本取引は保留となりました。)';
							break;
						case 'K3':
							$errorMessage45 = 'クレジットカードブランド返却フラグ指定エラー';
							break;
						case 'K4':
							$errorMessage45 = '与信結果が存在しないため、NG 与信情報変更処理を中止しました。';
							break;
						case 'K5':
							$errorMessage45 = '正常与信済みのため、NG 与信情報変更処理を中止しました。';
							break;
					}
					switch ($code678) {
						case '200':
							$errorMessage678 = 'クレジットカード番号';
							break;
						case '201':
							$errorMessage678 = 'クレジットカード有効期限';
							break;
						case '202':
							$errorMessage678 = '取引区分';
							break;
						case '203':
							$errorMessage678 = '分割回数';
							break;
						case '204':
							$errorMessage678 = 'ボーナス併用回数';
							break;
						case '205':
							$errorMessage678 = 'クレジットカード情報保存フラグ';
							break;
						case '209':
							$errorMessage678 = 'セキュリティコード';
							break;
						case '214':
							$errorMessage678 = '決済情報使用特定タイプ';
							break;
						case '215':
							$errorMessage678 = '決済支払方法使用特定タイプ';
							break;
						case '217':
							$errorMessage678 = 'クレジットカードブランド返却フラグ';
							break;
						case '227':
							$errorMessage678 = 'トークン';
							break;
						case '228':
							$errorMessage678 = 'トークンキー';
							break;
						case '229':
							$errorMessage678 = '永久トークン';
							break;
					}
					break;
				case '401':
					//ドコモ払い
					break;
				case '402':
					//au かんたん決済
					break;
				case '513':
					//JCB PREMO 決済・ハウスプリペイド決済
					break;
				case '601':
					//Apple Pay
					break;
				case '604':
					//Google Pay
					break;
				case '701':
					//WEB コンビニ決済
					break;
				case '702':
					//総合振込決済
					break;
				case '703':
					//Pay-easy
					break;
				case '710':
					//NP 後払い
					break;
				case '999':
					//共通項目
					break;
			}
		}
		if (!empty($errorMessage45)) {
			$errorMessage = $errorMessage45;
		}
		if (!empty($errorMessage678)) {
			$errorMessage .= ' 項目 ' . $errorMessage678;
		}
		return 'コード：' . $errorCode . ' / ' . $errorMessage;
	}


	//決済結果のarrayから指定したキーワードのタグのvalueを抽出します。
	public function extracter($str_array, $keyword){
		foreach ($str_array as $v1){
			foreach ($v1 as $key => $value) {
				if($value == $keyword){
					foreach ($v1 as $key => $value){
						if($key == "value"){
							return $value;
						}
					}
				}
			}
		}
		unset($v1);
		unset($value);
		unset($key);
	}
}
