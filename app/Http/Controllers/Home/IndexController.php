<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
  public function index(){
    
    list($tmp1, $tmp2) = explode(' ', microtime());
    echo $start_time = date('Y-m-d H:i:s',time()).substr($tmp1,1,7);
    $start_time = time().substr($tmp1,1,7);
    echo "</br>";
    echo "</br>";
  }
}
