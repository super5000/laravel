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

    // echo "</br>";
    // echo var_dump(($str));
    // echo "</br>";
    // for ($i=0; $i < 100; $i++) {
    //   echo mt_rand();
    //   echo "<br>";
    // }

    $array = ["name"=>[1,2,5,8,2,4,2]];
    echo json_encode($array);
    echo "<br>";
    echo json_encode(usort($array,$this->my_sort()));

  }
}
