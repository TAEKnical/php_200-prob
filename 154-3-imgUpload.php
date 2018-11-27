<?php
  //임시 저장된 정보
  $myTempFile = $_FILES['imgFile']['tmp_name'];

  //파일 타입 및 확장자 구하기
  $fileTypeExtension = explode("/",$_FILES['imgFile']['type']);

  //파일 타입
  $fileType = $fileTypeExtension[0];
  //파일 확장자
  $extension = $fileTypeExtension[1];
  //확장자 검사
  $isExtGood = false;

  switch($extension){
    case 'jpeg':
    case 'bmp':
    case 'gif':
    case 'png':
    $isExtGood = true;
    break;
    default:
      echo "허용하는 확장자는 jpg, bmp, gif, png 입니다 -switch";
      exit;
      break;
  }

  //이미지 파일이 맞는지 확인
  if($fileType == 'image'){
    if($isExtGood){
      $myFile="./test.{$extension}"; // 서버에 저장할 파일명
      $imageUpload = move_uploaded_file($myTempFile,$myFile); //옮기는 작업은 move_uploaded_file 함수로 수행

      if($imageUpload==true){
        echo "파일이 정상적으로 업로드 되었습니다.<br>";
        echo "<img src='{$myFile}' width='2000' />";
      }
      else {
        echo "파일 업로드에 실패했습니다.";
      }
    }
    else {
      echo "허용하는 확장자는 jpg, bmp, gif, png 입니다 -else";
      exit;
    }
  }
  else {
    echo "이미지 파일이 아닙니다.";
    exit;
  }
?>
