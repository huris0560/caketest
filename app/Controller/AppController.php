<?php
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
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
		'authorize' => array('Controller') // この行を追加しました
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
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