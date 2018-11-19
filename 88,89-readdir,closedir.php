<?php
//폴더 읽기
//opendir('폴더명')
//readdir($opendir);

$folderName="../php200/";
//디렉터리 있는지 확인
if(is_dir($folderName)){
  echo "폴더가 존재합니다<br>";
  $opendir=opendir($folderName);
    if($opendir){
      echo "폴더를 열었습니다<br>";

      while(($readdir = readdir($opendir))){
        echo $readdir."<br>"; //여러개의 파일이 있을 것이므로 반복문을 통해 호출한다. 더이상 불러올 파일이 없으면 false값이 반환되고 반복문이 종료된다.
      }
      closedir($opendir); //용무가 끝나면 폴더를 닫는다. 다른 코드가 해당 폴더를 기준으로 적용될 우려가 있기 때문이다.
    }
    else{
      echo "폴더를 열지 못했습니다.";
    }
}
else{
  echo "폴더가 존재하지 않습니다.";
}

 ?>
