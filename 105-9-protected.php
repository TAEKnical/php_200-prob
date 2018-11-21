<?php
  class a{
    protected function hello(){
      echo "say hello~";
    }
    public function print(){
      $this -> hello();
    }
  }

  $a = new a();
  $a -> print();
 ?>
