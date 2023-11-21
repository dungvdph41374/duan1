<?php

namespace Vujung\Duan1\Controllers\Client;

use Vujung\Duan1\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('client/home');
    }
}
