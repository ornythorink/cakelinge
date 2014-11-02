<?php
namespace App\Controller;

use App\Controller\AppController;

class RestrictedZoneController extends AppController {

	/**
	 * Initialization hook method.
	 *
	 * Use this method to add common initialization code like loading components.
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();
		$this->loadComponent('Flash');	
        $this->loadComponent('Cookie', array('expiry' => '1 day'));  
	

        $this->loadComponent("Auth", array(
        'Auth' => array(
            'authenticate' => array(
                'Authenticate.Cookie' => array(
                    'fields' => array(
                        'username' => 'login',
                        'password' => 'password'
                            ),
                            'userModel' => 'SomePlugin.User',
                        )
                    )
                )
            )
        );                   
    
    }   
    
    public function isAuthorized($user) {
        // Admin peuvent accéder à chaque action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
    
        // Par défaut refuser
        return false;
    }
}