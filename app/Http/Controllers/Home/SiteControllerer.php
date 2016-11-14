<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteControllerer extends Controller
{
    /**
     * 收货地址
     *
     * @return \Illuminate\Http\Response
     */
    public function site()
    {
        //
		return view('Home.take.site');
    }


}
