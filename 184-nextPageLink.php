<?php
  //전체 레코드 수 확인
  $sql = "SELECT count(boardID) FROM board";
  $result = $dbConnect->query($sql);

  $boardTotalCount = $result->fetch_array(MYSQLI_ASSOC);
  $boardTotalCount = $boardTotalCount['count(boardID)'];

  //총 페이지 수
  $totalPage = ceil($boardTotalCount / $numView); //ceil은 올림함수

  //처음 페이지 이동 링크
  echo "<a href='./183-list.php?page=1'>처음</a>&nbsp;";

  if($page !=1){
    $previousPage = $page - 1;
    echo "<a href='./183-list.php?page={$previousPage}'>이전</a>";
  }

  //현재 페이지의 앞 뒤 페이지 수 표시
  $pageTerm = 5;

  //처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
  $startPage = $page-$pageTerm;
  if($startPage < 1){
    $startPage = 1;
  }

  $lastPage = $page + $pageTerm;
  if($lastPage >=$totalPage){
    $lastPage = $totalPage;
  }

  for($i = $startPage; $i<=$lastPage;$i++){
    $nowPageColor = "unset";
    if($i==$page){
      $nowPageColor="hotpink";
    }
    echo "&nbsp<a href='./183-list.php?page={$i}'";
    echo "style='color:{$nowPageColor}'>{$i}</a>&nbsp";
  }

  //다음 페이지 이동링크
  if($page !=$totalPage){
    $nextPage = $page+1;
    echo "<a href='./183-list.php?page={$nextPage}'>다음</a>";
  }
  //마지막 페이지 이동 링크
  echo "&nbsp;<a href='./183-list.php?page={$totalPage}'>끝</a>";
 ?>
