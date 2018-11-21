<?php
namespace agroup;

function hello(){
  echo "say hello~";
}

namespace bgroup;
function hello(){
  echo "say hello~";
}

echo \agroup\hello();
echo "<br>";
echo \bgroup\hello();
 ?>
