<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller{

  public function index(){
    list($tmp1, $tmp2) = explode(' ', microtime());
    echo $start_time = date('Y-m-d H:i:s',time()).substr($tmp1,1,7);
    $start_time = time().substr($tmp1,1,7);
    echo "</br>";
    echo "</br>";



    echo "</br>";
    echo "</br>";
    list($tmp1, $tmp2) = explode(' ', microtime());
    echo number_format(time().substr($tmp1,1,7) - $start_time, 6);
    echo "</br>";
    echo $start_time = date('Y-m-d H:i:s',time()).substr($tmp1,1,7);
  }

  public function index23(){
    // $user = DB::table('class_user')->where('id','1')->value('phone_no');
    $user = class_user::all();

    echo $user;die;
    // echo $value = $request->session()->get('key');
    // session(['abc'=>"123"]);
    // $jjj = session('abc');
    // echo json_encode($jjj);
    // echo Redis::dbsize();
    // echo $user = Redis::setex('usr:0001',10,'khgj');
    // echo json_encode($user);
    // $user = Redis::keys('name');
    // echo json_encode($user)."</br>";
    // echo Redis::setbit('name1',31,1);
    // echo Redis::lindex('mylist',1);
    // $user = Redis::lrange('mylist',0,-1);
    // echo json_encode($user);
    // die;
    // echo "</br>";
    // echo Redis::get('name');die;
    // echo $url = route('profile');
    // return redirect()->route('profile');

    // echo ('index');
    // $user = Redis::keys('*');
    // dd('dsfs');
    // echo $user = Redis::set('name','haohaotghau123');
    // echo json_encode($user);
    // echo $user = Redis::get('hahah');
    return view('home/index/index',['abc'=>123]);
  }

  public function index1(){
    // echo Redis::dbsize();
    // echo $user = Redis::setex('usr:0001',10,'khgj');
    // echo json_encode($user);
    // $user = Redis::keys('name');
    // echo json_encode($user)."</br>";
    // echo Redis::setbit('name1',31,1);
    // echo Redis::lindex('mylist',1);
    // $user = Redis::lrange('mylist',0,-1);
    // echo json_encode($user);
    // die;
    // echo "</br>";
    // echo Redis::get('name');die;
    // echo $url = route('profile');
    return redirect()->route('profile');

    // echo ('index');
    // $user = Redis::keys('*');
    // dd('dsfs');
    // echo $user = Redis::set('name','haohaotghau123');
    // echo json_encode($user);
    // echo $user = Redis::get('hahah');
    // return view('home/index/index',['abc'=>123]);
  }


  public function index12(){
    echo "SDO_DAS_ChangeSummary";
    echo ('index');
    echo $user = Redis::get('*');
    echo $user = Redis::get('hahah');
    $demm = 0;
    $user = DB::table('lab_user')->where('id','1')->value('phone_no');
    $user = DB::table('lab_user')->select('name', 'phone_no')->where('id',1)->get();
    $query = DB::table('lab_user')->distinct('phone_no')->where('id',1)->get();
    $query = DB::table('lab_user')->simplePaginate(10);
    $user = $query->addSelect('phone_no')->get();
    echo $de;
    echo DB::facade();die;
    $user = DB::select("SELECT * FROM lab_user where phone_no = ? or name = ?", ['17191190322', 'hh']);
    echo $user;
    echo json_encode($user);
  }

}
