<?php
//파일내용 한줄씩 읽기
//fgets(fopen(파일경로,옵션),불러올용량);
//fgets는 줄바꿈을 만나면 가져오는 것을 종료한다. 그래서 한번에 한 줄만 가져올 수 있다. 불러올 txt파일은 언제 줄바꿈이 일어날 지 모르기 때문에 512바이트로 넉넉하게 잡아주었다.
$fileName = "helloworld.txt";
if(file_exists("helloworld.txt")){
  $fopen=fopen($fileName,"r");
  $readByte=512;
  if($fopen){
    while($fgets=fgets($fopen,$readByte)){
      echo $fgets."<br>";
    }
  }
  else {
    echo "파일을 여는 데 실패했습니다.";
  }
}
else {
  echo "파일이 존재하지 않습니다.";
}
fclose($fopen);
 ?>
