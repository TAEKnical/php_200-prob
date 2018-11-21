<?php
namespace agroup;

class say{
  function hello(){
    echo "say hello1~";
  }
}

namespace bgroup;

class say{
  function hello(){
    echo "say hello2~";
  }
}

use \agroup\say as asay;
use \bgroup\say as bsay;

$say1=new asay;
$say1->hello();
echo "<br>";
$say2=new bsay;
$say2->hello();
 ?>
