<?php
$u_id = $_GET['u_id'];
$pwd = $_GET['pwd'];

include "inc/dbcon.php";

$sql = "select * from users where id='$u_id'";
$sql2 = "select * from users where id='$u_id' and password='$pwd'";

try {
  $result = mysqli_query($dbcon, $sql);
  $array = mysqli_fetch_array($result);
  $num_match = mysqli_num_rows($result);

  if (!$num_match) {
    echo "IN";
  } else {
    $result2 = mysqli_query($dbcon, $sql2);
    $num_match_2 = mysqli_num_rows($result2);
    if (!$num_match_2) {
      echo "PN";
    } else {
      // 세션 시작
      session_start();

      $_SESSION["s_idx"] = $array["seq"];
      $_SESSION["s_name"] = $array["name"];
      $_SESSION["s_id"] = $array["id"];

      // 페이지 이동
      echo "Y";
    }
  }
} finally {
  mysqli_close($dbcon);
}
?>