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

$say1=new \agroup\say();
$say1->hello();
echo "<br>";
$say2=new \bgroup\say();
$say2->hello();
 ?>
