<?php
/**
 * Created by PhpStorm.
 * User: hagez
 * Date: 2017/05/28
 * Time: 20:31
 */

namespace App\Controller;

use App\Controller\AppController;

class TodoController extends AppController
{
    public function index()
    {
    }
    //エスケープ処理に必要、文字列の中に、文字列を含める場合に使用する
    private function h($s)
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }
}