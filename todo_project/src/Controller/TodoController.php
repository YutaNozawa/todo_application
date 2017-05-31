<?php
/**
 * Created by PhpStorm.
 * User: hagez
 * Date: 2017/05/28
 * Time: 20:31
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Database\Exception;
use Cake\ORM\TableRegistry;

class TodoController extends AppController
{
    public function index()
    {
        try {
            $todos = TableRegistry::get('Todos')->getByAllData();
            _ajax();
            $this->set('todos', $todos);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
    //エスケープ処理
    private function h($s)
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }
    private function _ajax()
    {
        if ($this->request->is('post')) {
            try {

                $res = $this->request->getData('check1');
                header('Content-Type: application/json');

                echo json_encode($res);
                exit;

            } catch (Exception $e) {
                //例外処理が発生した場合はリダイレクトさせてメッセージを表示させている
                header($this->request->getServerParams(), ' 500 Internal Server Error', true, 500);
                echo $e->getMessage();
                exit;
            }
        }
    }
}