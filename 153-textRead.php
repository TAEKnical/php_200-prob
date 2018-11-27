<?php
  $filePathName="./text.txt";

  if(file_exists($filePathName)){
    $fp = fopen($filePathName,'r');
    if($fp){
      $fr = fread($fp,filesize($filePathName));
      if($fr){
        echo nl2br($fr);
        fclose($fp);
      }
      else {
        echo "파일 읽기에 실패했습니다.";
      }
    }
    else {
      echo "파일 열기에 실패했습니다.";
    }
  }
  else {
    echo "파일이 존재하지 않습니다.";
  }
?>
