<?php

namespace Vujung\Duan1\Controllers\Admin;

use Vujung\Duan1\Controller;

class DashboardController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {        
        $this->renderAdmin('dashboard');
    }
}
