<?php
//이전 페이지에서 값 가져오기
$name = $_POST["name"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$number = $_POST["mobile"];
//$apply = $_POST["apply"];F
$birth = $year . '/' . $month . '/' . $day;
$mobile = $country . ' ' . $number;

//시간 구하기
$reg_date = date("Y-m-d");

// 값 확인
/*
echo "<p> 이름 :".$name."</p>";
echo "<p> 아이디 :".$uid."</p>";
echo "<p> 비밀번호 :".$pwd."</p>";
echo "<p> 이메일 :".$email."</p>";
echo "<p> 성별 :".$gender."</p>";
echo "<p> 가입일 :".$reg_date."</p>";
*/

// DB
include "inc/dbcon.php";

$sql = "insert into users(id, password, name, birth, email, gender, mobile, reg_date) values( '$uid', '$pwd', '$name', '$birth', '$email', '$gender', '$mobile', '$reg_date')";

try {
  mysqli_query($dbcon, $sql);
} finally {
  mysqli_close($dbcon);
}

//리디렉션
echo "<script type=\"text/javascript\">
location.href = \"login.php\";
</script>";
?>