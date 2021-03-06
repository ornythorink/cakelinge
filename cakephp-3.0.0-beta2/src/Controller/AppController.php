<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {


protected $assetImg;
protected $assetJs;
protected $imgCachePath;
protected $imgCacheUri;
   
/**
 * Initialization hook method.
 *
 * Use this method to add common initialization code like loading components.
 *
 * @return void
 */
	public function initialize() {
		$this->loadComponent('Flash');	
        $this->loadComponent('Cookie', array('expiry' => '1 day'));

        $this->assetImg = Configure::read('App.envImgUrl') ;
        $this->assetJs  = Configure::read('App.envJsUrl') ;
        $this->imgCachePath = Configure::read('App.imgCachePath') ;
        $this->imgCacheUri  = Configure::read('App.imgCacheUri') ;
        $this->set( 'assetImg', $this->assetImg);
        $this->set( 'assetJs', $this->assetJs);
        //$this->set( 'imgCachePath', $this->imgCachePath);
        //$this->set( 'imgCacheUri', $this->imgCacheUri);
	}
    
}
