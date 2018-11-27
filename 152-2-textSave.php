<?php
//textarea 태그에서 입력한 텍스트를 파일로 저장하는 방법
  $content = $_POST['text'];
  $fileName = 'text.txt';

  $fp = fopen($fileName,'w');
  if($fp){
    $fw = fwrite($fp,$content);

    if($fw){
      echo "파일 쓰기 완료";
    }
    else {
      echo "파일 쓰기 실패";
    }
  }
  else {
    echo "파일 열기 실패";
  }
 ?>
