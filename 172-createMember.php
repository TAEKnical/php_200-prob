<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/connection/163-connection.php";

  $sql = "CREATE TABLE member (";
  $sql .= "memberID int(10) UNSIGNED NOT NULL AUTO_INCREMENT,";
  $sql .= "email VARCHAR(4) UNIQUE NOT NULL,";
  $sql .= "nickname VARCHAR(10) NOT NULL,";
  $sql .= "pw VARCHAR(40) DEFAULT NULL,";
  $sql .= "birthday VARCHAR(10) NOT NULL,";
  $sql .= "regTime int(11) NOT NULL,";
  $sql .= "PRIMARY KEY (memberID)";
  $sql .= ") CHARSET=utf8";

  $res = $dbConnect->query($sql);

  if($res){
    echo "테이블 생성 완료";
  }
  else {
    echo "테이블 생성 실패";
  }

?>
