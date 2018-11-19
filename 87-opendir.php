<?php
  $folderName = 'hello';
  $opendir=opendir($folderName);

  if($opendir){
    echo "{$folderName} 폴더를 열었습니다.";
    //print($opendir); 해보면 Resource id#3 이라고 출력됨.이러한 값을 handle이라고 하는데, 시스템에 악영향을 줄 수 있는 데이터를 이런 식으로 표시한다.
  }
  else{
    echo "{$folderName} 폴더를 여는데 실패했습니다.";
  }

  echo "<br>";

  $folderName = "world";
  $opendir = opendir($folderName);

  if($opendir){
    echo "{$folderName} 폴더를 열었습니다.";
  }
  else{
    echo "{$folderName} 폴더를 여는데 실패했습니다.";
  }

 ?>
