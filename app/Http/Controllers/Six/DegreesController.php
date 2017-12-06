<?php

namespace App\Http\Controllers\Six;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class DegreesController extends Controller
{

  public function create_user()
  {
    // echo phpinfo();
    // die;
    // 生成171号段1亿个用户，每个用户有随机的150个联系人
    $start = 17100000000;
    $end = 17100002000;
    // $end = 17199999999;
    // 创建一个新用户
    $friends_num = 10;
    for ($i=$start; $i < $end; $i++) {
      // 给新用户添加150名好友联系人
      $friends = [];
      for ($j=0; $j < $friends_num; $j++) {
        // 保证新的好友不是自己
        $friend = rand($start,$end);
        while ($i == $friend) {
          $friend = rand($start,$end);
        }
        $friends[] = $friend;
        Redis::sadd("user:$friend",$i);
      }
      Redis::sadd("user:$i",$friends);
    }
    echo "OK";
  }

  // 查找任意两个联系人之间的距离
  public function separation()
  {
    list($tmp1, $tmp2) = explode(' ', microtime());
    $start_time = Redis::set('time',date('Y-m-d H:i:s',time()).substr($tmp1,1,7));
    $start = 17100000000;
    $end = 17100002000;
    // $end = 17199999999;
    // echo $user1 = rand($start,$end);
    echo $user1 = 17100001512;
    echo "</br>";
    // echo $user2 = rand($start,$end);
    echo $user2 = 17100000356;
    // echo $user2 = 17100000819;
    echo "</br>";
    while ($user1 == $user2) {
      echo $user2 = rand($start,$end);
    }
    // 判断user1与user2是否为一度好友
    $result = Redis::sismember("user:$user1",$user2);
      echo "1度"."</br>";
      echo $user1." -> ".$user2;
    }else {
      $friends = $this->find_friends($user1, $user2);
      if (count($friends)) {
        echo count($friends)."度</br>";
        for ($j=0; $j < count($friends); $j++) {
          echo $friends[$j]." -> ";
        }
        echo $user2;
        echo "not found";
      }
      // // 获取user1所有好友
      // $friend_user1 = Redis::smembers("user:$user1");
      // for ($i=0; $i < count($friend_user1); $i++) {
      //   $result = Redis::sismember("user:$friend_user1[$i]",$user2);
      //   if ($result) {
      //     echo "2"."</br>";
      //     echo $user1." -> ".$friend_user1[$i]." -> ".$user2;
      //     break;
      //   }
      // }
    }
    echo "</br>++++++++++++++</br>";
    list($tmp1, $tmp2) = explode(' ', microtime());
    $end_time = Redis::append('time',"</br>".date('Y-m-d H:i:s',time()).substr($tmp1,1,7));
    echo Redis::get('time');
  }

  public function find_friends($user1, $user2)
  {
    // echo $user1;
    // echo "</br>";
    // echo $user2;
    // die;
    static $depth = 2;
    static $friend_relation = [];
    echo "</br>----------$depth</br>";
    $friend_relation[] = $user1;

    // 获取user1所有好友
    $friend_user1 = Redis::smembers("user:$user1");
    for ($i=0; $i < count($friend_user1); $i++) {
      // 判断$friend_user1[$i]与user2是否为好友
      $result = Redis::sismember("user:".$friend_user1[$i],$user2);
      if ($result) {
        $friend_relation[] = $friend_user1[$i];
        return $friend_relation;
        // break;
      }
    }

    if (count($friend_relation) == $depth-1) {
      if (++$depth > 5) {
        // echo "not found";
        // echo $user1." -> ".$user2;
        // $friend_relation[] = $user1;
        return 0;
      }else {
        for ($k=0; $k < count($friend_user1); $k++) {
          // $friend_relation[count($friend_relation)-1] = $friend_user1[$k];
          $result2 = $this->find_friends($friend_user1[$k], $user2);
          if ($result2) {
            // return 1;
            return $result2;
            break;
          }
        }
        return 0;
      }
    }else {
      $friend_user1 = Redis::smembers("user:$user1");
      for ($k=0; $k < count($friend_user1); $k++) {
        // $friend_relation[count($friend_relation)-1] = $friend_user1[$k];
        $result2 = $this->find_friends($friend_user1[$k], $user2);
        if ($result2) {
          // return 1;
          return $result2;
          break;
        }
      }
      return 0;
    }


      // for ($i=0; $i < count($friend_user1); $i++) {
      //   $this->find_friends($friend_user1[$i],$user2);
      // }
  }

  // 每新增一个新用户建立新的六度分隔关系

}
