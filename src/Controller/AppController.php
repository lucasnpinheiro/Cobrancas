<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Database\Type;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $UserInfo = array();
    public $helpers = [
        'Html' => [
            'className' => 'MyHtml'
        ],
        'Form' => [
            'className' => 'MyForm'
        ],
        'Paginator' => [
            'className' => 'MyPaginator'
        ],
        'Modal' => [
            'className' => 'MyModal'
        ],
        'Text',
        'Url'
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('Cookie');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Usuarios',
                'action' => 'index',
            ],
            'loginAction' => [
                'controller' => 'Usuarios',
                'action' => 'login',
                'plugin' => null
            ],
            'logoutRedirect' => '/',
            'authorize' => ['controller'],
            'authenticate' => [
                'Form' => [
                    'passwordHasher' => [
                        'className' => 'Default',
                    ],
                    'fields' => ['username' => 'usuario', 'password' => 'senha'],
                    'userModel' => 'Usuarios',
                    'scope' => ['Usuarios.status' => 1],
                ]
            ]
        ]);
    }

    public function isAuthorized($user) {
        return true;
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        if (isset($this->request->params['prefix'])) {
            if (!in_array($this->request->params['prefix'], ['administrador', 'clientes'])) {
                $this->Auth->logout();
                $this->redirect(['controller' => 'Usuarios', 'action' => 'logout', 'prefix' => FALSE]);
            }
            $this->Auth->allow();
        } else {
            $this->Auth->allow();
        }
    }

}
