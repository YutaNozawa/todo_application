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
    public function post()
    {
        if (!isset($this->request->getData('mode'))) {
            throw new \Cake\Core\Exception\Exception('mode not set');
        }

        $mode = $this->request->getData('mode');

        if ($mode == 'update') {
            $this->_update();
        }

        if ($mode == 'create') {
            $this->_create();
        }

        if ($mode == 'delete') {
            $this->_delete();
        }

    }

    private function _update()
    {
        if (!isset($this->request->getData('id'))) {
            throw new \Cake\Core\Exception\Exception('[update] id not set');
        }

        $todosTable = TableRegistry::get('Todos');

        $todo = $todosTable->get($this->request->getData('id'));

        $todo->state = ($todo->state + 1) % 2;

        $todosTable->patchEntity($todo, $todo->state);

        $todosTable->save($todo);

        return [
            'state' => $todo->state
        ];

    }
    private function _create()
    {

    }
    private function _delete()
    {

    }
}