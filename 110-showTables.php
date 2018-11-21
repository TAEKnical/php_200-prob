<?php
  include $_SERVER['DOCUMENT_ROOT']."/php200/108-2-connectDB.php";

  $sql = "SHOW TABLES";
  $res = $dbConnect->query($sql);

  if($res){
    $list = $res->fetch_array(MYSQLI_BOTH);
    //fetch_array 함수는 인자에 따라 데이터형을 다르게 반환한다
    //MYSQLI_NUM : 인덱스를 숫자로 사용
    //MYSQLI_ASSOC : 인덱스를 문자로 사용
    //MYSQLI_BOTH : 인덱스를 문자와 숫자로 사용

    echo "테이블 목록<br>";

    for($i = 0 ; $i < (count($list)-1); $i++){
      echo $list[$i];
      echo '<br>';
    }
  }
  else{
    echo "테이블 존재 안함";
  }
 ?>
