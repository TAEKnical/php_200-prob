<?php
  class a{
    function hello(){
      echo "say hello~";
    }
  }

  class b extends a{
  }

  $b = new b();
  $b -> hello();
 ?>
