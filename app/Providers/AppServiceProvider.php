<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


       $types = DB::table('goodstype')->select('tid','tname','is_topnav','is_leftnav')->get();
        // dd($types);
        // $topnav = $types['is_topnav'];
        // $leftnav = $types['is_leftnav'];
         // dd($types);

        $count= DB::table('goodstype')->count();

        for($i=0; $i<$count; $i++){
            $results[$types[$i]->tname] = DB::table('goods')->where('type_id',$types[$i]->tid)->where('state','1')->get();
            $topnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_topnav');
            $leftnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_leftnav');
        }

        $ppts = DB::table('ppt')->get();

        $user = DB::table('users')->get();

        $web = DB::table('web')->get();

        $res = DB::table('friendlink')->get();

        //dd($res);

    //dd($results);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        //return view('Admin.goods.list',['goods'=>$goods]);

       view()->share('results',$results);
       view()->share('topnav',$topnav);
       view()->share('leftnav',$leftnav);
       view()->share('web',$web);
       view()->share('res',$res);
        view()->share('ppts',$ppts);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
