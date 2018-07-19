<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

//Eventクラスを読み込む
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class MemberController extends MemberBaseController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function beforeRender(Event $event)
    {
        $this->set('Member', $this->member);
        $this->viewBuilder()->setLayout('layout');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([
            'register',
            'registerConfirm',
            'registerComplete',
        ]);
    }

    public function initialize()
    {
        parent::initialize();
    }

    public function register() {

        // hostory.back有効期限切れの対応
        session_start();
        header('Expires: -1');
        header('Cache-Control:');
        header('Pragma:');

        // POSTの場合
        if ($this->request->is('post')) {
            $entity = $this->Member->newEntity();
            $entity = $this->Member->patchEntity($entity, $this->request->data);
            $errors = $entity->errors();

            $this->set('errors', $errors);

            // エラー内容を表示
            if(!empty($errors)){
                foreach ($errors as $key => $error) {
                    foreach ($error as $error_messages) {
                        $this->Flash->error($error_messages, ['key' => $key]);
                    }
                    unset($key, $error_messages);
                }
                unset($error);
            } else {
                // 書面確認画面へ
                $this->redirect(['action' => 'registerConfirm']);
            }
        }
    }

    public function registerConfirm() {
        // $entity = $this->Member->newEntity();
        // $entity = $this->Member->patchEntity($entity, $this->request->data);

        // $this->set('entity', $entity->errors());

        // if(!empty($entity->errors())){
        //     $this->render('register');
        // }


        // if ($this->request->is('post')) {
        //     $savedata = $this->request->data;
        //     $user = $this->Member->newEntity($savedata);

        //     $errors = $user->errors();
        
        //     if (empty($errors)) {
        //         $this->redirect(['action' => 'confirm']);
        //     } else {
        //         foreach ($errors as $key => $error) {
        //             foreach ($error as $error_messages) {
        //                 $this->Flash->error($error_messages, ['key' => $key]);
        //             }
        //             unset($key, $error_messages);
        //         }
        //         unset($error);
        //         $this->render($action = 'register');
        //     }
        // }

    }

    public function registerComplete() {

    }

    public function login() {
        
    }

    public function index() {
        
    }

}
