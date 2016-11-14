<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台首页
Route::get('/', function () {
    return view('Home.home.index');
});
Route::get('/home/1', function () {
    return view('/Home.home.1');
});
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->middleware('vcode');

//验证码
Route::get('/vcode','VcodeController@create');
Route::get('/useCode','VcodeController@useCode');
//注册的跳转路由
Route::get('profile','UserController@profile');
Route::get('adminProfile','Admin\UserController@profile');


//设置成功和失败的跳转路由
//Route::get('/success','JumpController@success');
//Route::get('/error','JumpController@error');

//注册提交的数据
//Route::post('/register/doreg','RegController@doreg');

//注册ajax验证用户名
Route::get('/checkname/{name}','RegController@checkname');


//用户协议
Route::get('/uxieyi',function (){
	return view('register.uxieyi');
});

//隐私政策
Route::get('/yisi',function (){
	return view('register.yisi');
});
//输出session 测试
Route::get('/regyes','RegController@regyes');

//重置密码操作路由
// 发送密码重置链接路由
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//后台首页
Route::get('/admin', function () {
    return view('Admin.index');
});

//添加商品首页测试
/*
Route::get('/goods', function () {
    return view('Admin.goods.add');
});
*/

//登录路由
Route::get('/login', 'Auth\AuthAdminController@getLogin');

Route::post('/login', 'Auth\AuthAdminController@postLogin');

Route::get('/logout', 'Auth\AuthAdminController@getLogout');

//显示商城用户列表
Route::get('/users/list','Admin\UsersController@index');
//商城用户回收站
Route::get('/users/recycle','Admin\UsersController@recycle');
//显示管理员用户列表
Route::get('/admins/list','Admin\AdminController@index');
//添加管理员页面
Route::get('/admins/add','Admin\AdminController@add');

//添加管理员
Route::post('/admins/add1','Admin\AdminController@add1');

/************************后台商品*************************************/

// //添加管理员
// Route::post('/admins/add1','Admin\AdminController@add1');

//显示商品列表
Route::get('/goods/list','Admin\GoodsController@index');
//添加商品界面
Route::get('/goods/add','Admin\GoodsController@add');
//添加商品操作
Route::post('/goods/insert','Admin\GoodsController@insert');

//修改界面
Route::get('/admins/modi/{id}','Admin\AdminController@modi');

//修改用户操作
Route::post('/admins/update/','Admin\AdminController@update');

//上传图片
Route::get('/admins/photo/','Admin\AdminController@photo');

// //修改图片
// Route::get('/admins/photo/','Admin\AdminController@photo');
//登录时间
Route::get('/admins/logintime/','Admin\AdminController@logintime');


//删除用户操作
Route::get('/admins/delete/{id}','Admin\AdminController@delete');

//禁用启用操作
Route::get('/admins/change/{id}','Admin\AdminController@change');

//用户详情界面
Route::get('/admins/specifics/{id}','Admin\AdminController@detail');

//用户详情修改界面
Route::get('/admins/particular/{id}','Admin\AdminController@deta');

//用户详情操作
Route::post('/admins/amend/','Admin\AdminController@amend');


//添加商品属性界面
Route::get('/goods/addAttr/{id}','Admin\GoodsController@addAttr');
//添加商品属性操作
Route::post('/goods/doAddattr/','Admin\GoodsController@doAddattr');
//商品详情页面
Route::get('/goods/detail/{id}','Admin\GoodsController@detail');
//删除商品详情
Route::get('/goods/Attrdelete/{id}','Admin\GoodsController@Attrdelete');

//修改商品界面
Route::get('/goods/modify/{id}','Admin\GoodsController@modify');
//修改商品操作
Route::post('/goods/update','Admin\GoodsController@update');
//修改商品状态
Route::get('/goods/changeState/{id}','Admin\GoodsController@changeState');
//修改商品收藏状态
Route::get('/goods/changeCollectState/{id}','Admin\GoodsController@changeCollectState');
//删除商品
Route::get('/goods/delete/{id}','Admin\GoodsController@delete');


//显示收藏列表
Route::get('/collects/list','Admin\CollectController@index');
//删除指定收藏
Route::get('/collects/delete/{id}','Admin\CollectController@delete');

//后台商品搜索
Route::get('/goodsSousuo/{txt}','Admin\goodsSearchController@goodsSearch');








/***********************后台分类******************************************/
//显示分类列表
Route::get('/types/list','Admin\TypesController@index');
//添加分类
Route::get('/types/add','Admin\TypesController@add');
//添加分类操作
Route::post('/types/insert','Admin\TypesController@insert');
//修改分类界面
Route::get('/types/modify/{id}','Admin\TypesController@modify');
//修改分类操作
Route::post('/types/update','Admin\TypesController@update');
//删除分类的路由
Route::get('/types/delete/{id}','Admin\TypesController@delete');

/***************************************************************************************/
//前台路由

//
//前台基准页面
Route::get('/base','Home\BaseController@index');
/*Route::get('/leftbar',function(){
	return view('home.leftbar');
});

Route::get('/footbar',function(){
	return view('home.footbar');
});

Route::get('/topbar',function(){
	return view('home.topbar');
});

Route::get('/basea',function(){
	return view('home.basea');
});*/
//小米首页
Route::get('/home','Home\IndexController@index');

//列表页面
Route::get('/home/list','Home\IndexController@goodslist');

//搜索列表页面
Route::get('/home/searchlist/{search}','Home\GoodsController@searchlist');
//搜索
Route::get('/home/searchgood/{keyword}','Home\GoodsController@searchgood');

//搜索列表页面
Route::get('/home/typesearch/{tid}','Home\GoodsController@typesearch');


//类别搜索页面
Route::get('/home/typesearch/{tid}','Home\GoodsController@typesearch');

//购买商品
Route::get('/buygoods/{id}','Home\GoodsController@buygoods');

//修改喜欢商品状态
Route::get('/buygoods/changes/{id}/{user_id}','Home\GoodsController@changes');

//加入购物车
Route::get('/getGoods/{sid}/{vid}/{cid}','Home\GoodsController@getGoods');

//网站详情
Route::get('/books/wzxq','Admin\wzpzController@wzxq');

//前台网站详情
//oute::get('/shangshang/shangshang','Admin\qianwzpzController@wzxq');

//网站修改

Route::get('/books/wzx/{id}','Admin\wzpzController@wzx');
Route::post('/books/wzup','Admin\wzpzController@wzup');



//喜欢的商品
Route::get('/like/goods','Home\AccessoriesController@like');

//商品未评价
Route::get('/evaluate/appraise','Home\AppraiseController@appraise');

//商品评价
Route::get('/evaluate/review/{gid}','Home\AppraiseController@review');

//商品评价操作
Route::post('/evaluate/affixion','Home\AppraiseController@affixion');

//个人详细信息
Route::get('/person/details','Home\PersonalController@sink');

//修改头像
Route::post('/person/update','Home\PersonalController@update');

//修改详细信息
Route::post('/person/datum','Home\PersonalController@datum');

//修改地区
Route::post('/person/region','Home\PersonalController@region');

//回复评论
Route::get('/revert/reply/{gid}','Home\ReplyController@reply');

//回复评论
Route::post('/revert/discuss','Home\ReplyController@discuss');

//账号安全
Route::get('/oneself/safety','Home\SpaceController@safety');

//修改账号密码
Route::post('/oneself/update','Home\SpaceController@update');

//修改手机号
Route::post('/oneself/mobile','Home\SpaceController@mobile');

//填写密保问题
Route::post('/oneself/ask','Home\SpaceController@ask');

//修改成功
Route::get('/oneself/win','Home\SpaceController@win');

//个人中心
Route::get('/oneself/centre','Home\SpaceController@spac');

//修改账号密码页面
Route::get('/retrieve/account','Home\RetrieveControllerer@account');

//修改账号密码页面2
Route::post('/retrieve/huser','Home\RetrieveControllerer@huser');

//修改账号密码页面3
Route::post('/retrieve/husers','Home\RetrieveControllerer@husers');

//修改账号密码页面4
Route::post('/retrieve/huserd','Home\RetrieveControllerer@huserd');


//优惠券
Route::get('/discount/index','Home\DiscountController@index');

//领取优惠券
Route::get('/discount/add/{dis_id}/{user_id}','Home\DiscountController@add');

//未失效优惠券
Route::get('/discount/coupon','Home\DiscountController@coupon');

//已失效优惠券
Route::get('/discount/lose','Home\DiscountController@lose');
/************************************************************************/
/*后台*/

//添加用户界面
Route::get('/users/add','Admin\UsersController@add');

//添加操作
Route::post('/users/insert','Admin\UsersController@insert');

//修改界面
Route::get('/users/modi/{id}','Admin\UsersController@modi');

//修改用户操作
Route::post('/users/update/','Admin\UsersController@update');

//删除用户操作
Route::get('/users/delete/{id}','Admin\UsersController@delete');

//禁用启用操作
Route::get('/users/change/{id}','Admin\UsersController@change');

//用户详情界面
Route::get('/users/specifics/{id}','Admin\UsersController@detail');

//用户详情修改界面
Route::get('/users/particular/{id}','Admin\UsersController@deta');

//用户详情操作
Route::post('/users/amend/','Admin\UsersController@amend');

//优惠券界面
Route::get('/discount/list','Admin\DiscountController@index');

//添加优惠券界面
Route::get('/discount/add','Admin\DiscountController@add');

//添加操作
Route::post('/discount/insert','Admin\DiscountController@insert');

//修改界面
Route::get('/discount/modi/{dis_id}','Admin\DiscountController@modi');

//修改优惠券操作
Route::post('/discount/update/','Admin\DiscountController@update');

//删除优惠券操作
Route::get('/discount/delete/{id}','Admin\DiscountController@delete');

//有效无效操作
Route::get('/discount/change/{id}','Admin\DiscountController@change');





/************************************************************************/
//轮播图控制器
//图片列表显示
Route::get('/ppt/ppt','Admin\pptController@ppt');
//图片列表增加
Route::get('/ppt/pptadd','Admin\pptController@pptadd');
Route::post('/ppt/pptadds','Admin\pptController@pptadds');
//图片删除
Route::get('/ppt/pptdelete/{id}','Admin\pptController@pptdelete');
//图片修改视图
Route::get('/ppt/pptupdate/{id}','Admin\pptController@pptupdate');
Route::post('/ppt/pptup','Admin\pptController@pptup');



/*****************蔡英杰***********************/
//显示订单列表
Route::get('/orders/list','Admin\OrdersController@index');
//等待发货
Route::get('/orders/wait','Admin\OrdersController@wait');
//确认收货
Route::get('/orders/confirm','Admin\OrdersController@confirm');
//退货退款
Route::get('/orders/refund','Admin\OrdersController@refund');
//回收站
Route::get('/orders/recycle','Admin\OrdersController@recycle');
//修改订单页面
Route::get('/orders/modify/{id}','Admin\OrdersController@modify');
//修改订单
Route::post('/orders/update','Admin\OrdersController@update');

//显示评价列表
Route::get('/appraises/list','Admin\AppraisesController@index');
//评价回复
Route::get('/appraises/reply','Admin\AppraisesController@reply');
//删除评价操作
Route::get('/appraises/delete/{id}','Admin\AppraisesController@delete');
//删除回复操作
Route::get('/appraises/Rdelete/{id}','Admin\AppraisesController@Rdelete');
//前台订单列表
Route::get('home/order','Home\MyOrdersController@index');

//前台收货地址列表
Route::get('/home/address','Home\uderAddressController@index');
//删除收货地址路由
Route::get('/address/delete/{aid}','Home\uderAddressController@del');
//添加收货地址路由
Route::post('/address/add','Home\uderAddressController@add');

//删除订单的路由
Route::get('/order/delete/{gid}','Admin\OrdersController@delete');
//将商品加入到购物车中
Route::get('/addCart1/{gid}/{uid}','Home\cartController@add');
//购物车页面
Route::get('/addCart/{uid}','Home\cartController@index');
//增加购物车商品
Route::get('/addCart/raiseNum/{id}/{num}','Home\cartController@raiseNum');
//减少购物车商品
Route::get('/addCart/reduceNum/{id}/{num}','Home\cartController@reduceNum');
//删除购物车商品
Route::get('/addCart/delete/{id}','Home\cartController@delete');


//支付路由
Route::get('/home/pay/{aid}','Home\MyOrdersController@pay');
//订单取消路由
Route::get('/home/cancel/{aid}','Home\MyOrdersController@cancel');

//添加订单页面
Route::get('/addorder/{uid}','Home\addOrderController@addOrder');

//提交订单信息
Route::get('/sAddorder/{uid}/{aid}','Home\addOrderController@sAddOrder');



//友情链接列表显示
Route::get('/friendlink/friendlink','Admin\friendlinkController@friendlink');

//友情链接列表增加
Route::get('/friendlink/friendlinkzj','Admin\friendlinkController@friendlinkzj');

//添加友情链接增加操作
Route::post('/friendlink/addfriendlinkzj','Admin\friendlinkController@addfriendlinkzj');

//友情连接删除
Route::get('/friendlink/frienddelete/{id}','Admin\friendlinkController@frienddelete');

//友情链接修改
Route::get('/friendlink/friendupdate/{id}','Admin\friendlinkController@friendupdate');

Route::post('/friendlink/friendup','Admin\friendlinkController@friendup');

/*****************end蔡英杰***********************/