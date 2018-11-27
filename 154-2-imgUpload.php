<?php
  //보통은 POST로 전송하면 $_POST배열에 값이 전달되었으나, 파일은 $_FILES에 전송된다.
  echo '<pre>';
  var_dump($_FILES);
  echo "</pre>";
?>
