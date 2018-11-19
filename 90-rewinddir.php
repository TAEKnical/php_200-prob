<?php
//readdir()함수를 사용하여 나온 데이터를 하나씩 반환한다
//readdir()의 기능을 다시 사용할 수는 없다.

$folderName="../php200/";
$opendir = opendir($folderName);
if($opendir){
  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
  rewinddir($opendir);
  echo "<br>rewindder() 함수 실행 후<br>";

  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
  echo readdir($opendir)."<br>";
}
 ?>
