<?php
//fwrite(fopen(파일경로,옵션),'쓸내용')
$content = "fwrite 추가합니다.";
$fileName = "helloworld.txt";

$fp = fopen($fileName,"a+");
$fw = fwrite($fp,$content);

if($fw==false){
  echo "파일 쓰기에 실패했습니다.";
}
else{
  echo "파일 쓰기에 성공했습니다.";
}

fclose($fp);
 ?>
