<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller{

  function my_sort($a,$b)
  {
  if ($a==$b) return 0;
  return ($a<$b)?-1:1;
  }

  public function index(){
    list($tmp1, $tmp2) = explode(' ', microtime());
    echo $start_time = date('Y-m-d H:i:s',time()).substr($tmp1,1,7);
    $start_time = time().substr($tmp1,1,7);
    echo "</br>";
    echo "</br>";

    // $hjk = get_browser(null,true);
    // echo json_encode($hjk);
    // eval($hjk);
    // for ($i=0; $i < 100; $i++) {
    //   echo uniqid()."</br>";
    // }

    // $filename = base_path()."/test.log";
    // echo json_encode(unpack("C*",md5_file($filename,TRUE)));
    // echo "</br>";
    // echo var_dump(md5(file_get_contents($filename)));
    // echo "</br>";
    // // echo var_dump(md5("/Users/caozhi/SITE/laravel/test.log/Users/caozhi/SITE/laravel/test.log/Users/caozhi/SITE/laravel/test.log/Users/caozhi/SITE/laravel/test.log/Users/caozhi/SITE/laravel/test.log/Users/caozhi/SITE/laravel/test.log"));
    // echo "</br>";
    // $str = "bcd+efg-hi*jk,lnabopqrs,t<br>uvwa.ba\bcxy";
    // var_dump($str);
    // echo "</br>";
    // var_dump(htmlentities(html_entity_decode($str)));
    // $str = "alkdhfgkjasdfhjsdgkj687678ykjasdhkjfdfhjjh    \n
    // ";
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

    // pos() 函数是 current() 函数 的别名。它可返回数组中当前元素的值。
    // next() 函数把指向当前元素的指针移动到下一个元素的位置，并返回当前元素的值。
    // natsort() 函数用自然顺序算法对给定数组中的元素排序。
    // natcasesort() 函数用不区分大小写的自然顺序算法对给定数组中的元素排序。
    // ksort() 函数按照键名对数组排序，为数组值保留原来的键。
    // krsort() 函数将数组按照键逆向排序，为数组值保留原来的键。
    // key() 函数返回数组内部指针当前指向元素的键名。
    // in_array() 函数在数组中搜索给定的值。
    // extract() extract() 函数
  }
}
