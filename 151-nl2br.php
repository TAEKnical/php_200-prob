<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200/108-2-connectDB.php';

    $sql = "SELECT * FROM prodReview ORDER BY prodReviewID DESC LIMIT 1";
    $res = $dbConnect->query($sql);

    $prodReview = $res->fetch_array(MYSQLI_ASSOC);
    echo nl2br($prodReview['content']);
    //php는 textarea에서 입력된 문자열에 \n이 섞여있는 것을 인지하지 못한다.
    //때문에 \n을 br태그로 치환해주는 nl2br 함수를 사용해야 한다.
?>
