<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    //管理员列表
    public function index(){
        //显示视图模板
        return view('Admin.admins.list');
    }

    //添加管理员
    public function add(){
        //显示视图模板
        return view('Admin.admins.add');
    }
}
