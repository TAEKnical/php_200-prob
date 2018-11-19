<?php
  //fread(fopen(파일경로,옵션),'불러올용량');
  //용량 확인은 filesize('파일경로');
  //파일 존재 여부 확인은 file_exists('파일경로');

  $fileName = "helloworld.txt";

  if(file_exists($fileName)){
    $fopen = fopen($fileName,"r");
    if($fopen){
      $fread = fread($fopen,filesize($fileName));
      if($fread){
        echo $fread; // 내용 출력
        fclose($fopen);//파일 닫기
      }
      else {
        echo "파일 읽기에 실패했습니다.";
      }
    }
    else{
      echo "파일 열기에 실패했습니다.";
    }
  }
  else {
    echo "파일이 존재하지 않습니다.";
  }
 ?>
