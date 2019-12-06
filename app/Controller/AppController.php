<?php
App::uses('Controller', 'Controller');
App::uses('AppController', 'Controller');

// app/Controller/AppController.php
class AppController extends Controller {
    //...
	public $components = array(
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
        $this->Auth->allow('index', 'add', 'view', 'login' ,'logout' ,'nekoin' ,'confirmcart');
    }
    //...
    public function beforeRender() {
 //   	$postdata = $this->request->data;//POST情報の保存
    	//確認前に今いるURLを保存
    	$neko_referer_url = Router::url('/');
//    	$neko_referer_url = Router::url();
//    	$this->Session->write('Neko.longinReferer', $neko_referer_url);

    	//neko_authのinとoutを確認

    	$neko_auth_login = $this->Session->read('Neko.authLongin');
    	$neko_auth_time = $this->Session->read('Neko.authTime');
    	$neko_auth_timeout = $this->Session->read('Neko.authTimeOut');

    	$now = time();
    	if($this->action =='login'){
    		return 0;
    	}
    	elseif($neko_auth_login != 'in'){//ログイン状態がinではない場合ログイン画面へ遷移
    		$this->Session->write('Neko.longinReferer', $neko_referer_url);
    		$this->redirect(array(
    				'controller' => 'Customers',
    				'action' => 'login'
    		));
    	}elseif ($neko_auth_timeout < $now){//前回のログインアクセスから30分以上たっていたらログアウトに書き換えてログイン画面へ
    		$this->Session->write('Neko.longinReferer', $neko_referer_url);
    		$this->Session->write('Neko.authLongin', 'out');
    		$this->Session->write('Neko.authTime', '');
    		$this->Session->write('Neko.authT
					imeOut', '');
    		$this->Flash->error(__('前回のアクセスから一定時間が経過しました。再度ログインしてください。'));
    		$this->Session->write('Neko.longinReferer', $neko_referer_url);
    		$this->redirect(array(
    				'controller' => 'Customers',
    				'action' => 'login'
    		));
    	}elseif ($neko_auth_timeout > $now){//ログイン状態かつタイムアウトではない→ログイン時間更新のみ
    		$this->Session->write('Neko.authLongin', 'in');
    		$this->Session->write('Neko.authTime', time());
    		$this->Session->write('Neko.authTimeOut', time()+1800);
    	}else {//予期せぬエラーでログイン画面へ遷移（基本ここには入らない筈)
    		$this->Session->write('Neko.longinReferer', $neko_referer_url);
    		$this->redirect(array(
    				'controller' => 'Customers',
    				'action' => 'login'
    		));
    		$this->Flash->error(__('予期せぬエラーが発生しました。再度ログインしてください。'));
    	}
    	//$login_time = $this->Session->read('Login.time');
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
}
