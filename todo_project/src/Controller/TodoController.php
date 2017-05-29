<?php
/**
 * Created by PhpStorm.
 * User: hagez
 * Date: 2017/05/28
 * Time: 20:31
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class TodoController extends AppController
{
    public function index()
    {
        $todos = TableRegistry::get('Todos')->getByData();
    }
    //エスケープ処理
    private function h($s)
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }
}