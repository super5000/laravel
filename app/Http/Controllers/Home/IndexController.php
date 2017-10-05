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
