<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
 	//预约列表
    public function index(){
        //显示视图模板
        return view('Admin.books.list');
    }

    //预约商品
    public function add(){
        //显示视图模板
        return view('Admin.books.add');
    }
}
