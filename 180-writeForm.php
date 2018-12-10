<?php
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/171-session.php";
  include $_SERVER["DOCUMENT_ROOT"]."/php200project/common/179-checkSignSession.php";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
   </head>
   <body>
      <form name="boardWrite" action="181-saveBoard.php" method="post">
        제목
        <br><br>
        <input type="text" name="title" required>
        <br><br>
        내용
        <br><br>
        <textarea name="content" rows="10" cols="80"></textarea>
        <br><br>
        <input type="submit" value="저장"/>
      </form>
   </body>
 </html>
