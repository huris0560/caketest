<?php
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');

// app/Controller/AppController.php
class AppController extends Controller {
    //...
	public $components = array(
		'Cookie',
		'Session',
		'Flash',
		'Auth'// => array(
//			'loginRedirect' => array(
//					'controller' => 'customers',
//					'action' => 'index'
//			),
//			'logoutRedirect' => array(
//				'controller' => 'customers',
//				'action' => 'login',
//				'home'
//			),
//			'authenticate' => array(
//				'Form' => array(
//					'passwordHasher' => 'Blowfish'
//				)
//			),
//		'authorize' => array('Controller')

//	)
);

    public function beforeFilter() {

//cake上のAuthcomponent
        $this->Auth->allow('index',
        		'add',
        		'view',
        		'login',
        		'logout',
        		'nekoin',
        		'dojincartconfirm',
        		'error' ,'afterestimate',
        		'dojindeliveryaddr',
        		'dojinpaymentmethod',
        		'dojinordercheck'
        		);

//myaonログインチェック//
//		$postdata = $this->request->data;//POST情報の保存
        //確認前に今いるURLを保存
        $neko_referer_url = Router::url('/');

//必要情報を変数に挿入
        $neko_auth_status = $this->Session->read('Neko.authStatus');
        $neko_auth_time = $this->Session->read('Neko.authTime');
        $neko_auth_timeout = $this->Session->read('Neko.authTimeOut');
        $now = time();

        //来訪者がカスタマーかゲストか確認する。
        if($this->Cookie->read('Neko.customerName')!=null){				//cookieにユーザー名が保存されている→cookie期限内に再来訪のカスタマー
        	if ($neko_auth_timeout >= $now){							//かつタイムアウト状態ではない。
        		$this->Session->write('Neko.userStatus','customer');	//ログイン状態をカスタマー（非タイムアウト）へ
        		$this->Session->write('Neko.authTime', time());			//非タイムアウト状態でページ遷移を行った場合ログイン時間を更新
        		$this->Session->write('Neko.authTimeOut', time()+1800);
        		return 0;
        	}else {														//タイムアウトしたカスタマー
        		$this->Session->write('Neko.userStatus','timeout');
        		return 0;
        	}
        }
        $this->Session->write('Neko.userStatus','guest');//cookieにユーザー名が保存されていない→ゲスト
        return 0;
    }

    public function beforeRender() {
    }

    public function isAuthorized($user) {//現在使用していない。
    // Admin can access every action
    	if (isset($user['role']) && $user['role'] === 'admin') {
    		return true;
    	}
    	// デフォルトは拒否
    	return false;
    }

	public function _api_rest($method, $uri, $query = null, $data = null){
    	$ch = curl_init();
//		$basic_url = "http://localhost/sample_api/";
		$options = array(
				CURLOPT_URL => $uri,
				CURLOPT_HEADER => false,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_TIMEOUT => 60,
				CURLOPT_CUSTOMREQUEST => $method,
//				CURLOPT_POSTFIELDS => http_build_query($data), // URLエンコードして application/x-www-form-urlencoded でエンコード。URLエンコードしないとmultipart/form-dataになる
			); curl_setopt_array($ch, $options);
		$response = curl_exec($ch);//json_decode(curl_exec($ch), true); // 第2引数をtrueにすると連想配列で返ってくる

//		curl_getinfo($ch);
		curl_close($ch);

        return $response;
    }



    public function _neko_auth(){
//$neko_auth_status
//customer
//guest
//timeout
//logout


    	$path = $this->request->here;
		$neko_referer_url = Router::url('/');

    	//必要情報を変数に挿入
    	$neko_auth_status = $this->Session->read('Neko.authStatus');
    	$neko_auth_time = $this->Session->read('Neko.authTime');
    	$neko_auth_timeout = $this->Session->read('Neko.authTimeOut');
    	$now = time();


    	if($neko_auth_status != 'customer'){//ログイン状態がcustomerではない場合ログイン画面へ遷移
			if($neko_auth_status == 'timeout'){//タイムアウト状態
				$this->Session->write('Neko.longinReferer', $neko_referer_url);
				$this->Session->write('Neko.authTime', '');//ログイン時間をクリア
				$this->Session->write('Neko.authTimeOut', '');//ログインタイムアウト時間をクリア
				$this->Flash->error(__('前回のアクセスから一定時間が経過しました。再度ログインしてください。'));
				$this->redirect(array(
						'controller' => 'Customers',
						'action' => 'login'
				));
			}else {
				$this->Session->write('Neko.longinReferer', $neko_referer_url);
				$this->Session->write('Neko.authTime', '');//ログイン時間をクリア
				$this->Session->write('Neko.authTimeOut', '');//ログインタイムアウト時間をクリア
				$this->Flash->error(__('ログインまたは会員登録をお願いします。'));
				$this->redirect(array(
					'controller' => 'Customers',
					'action' => 'login'
				));
			}
    	}else{//ログインステータスがカスタマー＝ログイン中なのでスルー
    		return 0;
    	}

		//予期せぬエラーでログイン画面へ遷移（基本ここには入らない)
		$this->Session->write('Neko.longinReferer', $neko_referer_url);
		$this->Session->write('Neko.authTime', '');//ログイン時間をクリア
		$this->Session->write('Neko.authTimeOut', '');//ログインタイムアウト時間をクリア
		$this->Flash->error(__('予期せぬエラーが発生しました。再度ログインしてください。'));
		$this->redirect(array(
    			'controller' => 'Customers',
    			'action' => 'login'
    	));
    }
}
