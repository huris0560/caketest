<?php
App::uses('Controller', 'Controller');
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'add',//ページ遷移がわかりやすいように一度addに移動
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
		'authorize' => array('Controller')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view', 'login' ,'nekoin');
    }
    //...

    public function isAuthorized($user) {
    	// Admin can access every action
    	if (isset($user['role']) && $user['role'] === 'admin') {
    		return true;
    	}

    	// デフォルトは拒否
    	return false;
    }
}