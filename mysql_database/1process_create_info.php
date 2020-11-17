<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
$sql = "INSERT INTO info (
	region, orz, work, class, student, educate_hour, volunteer, semester, innout) 
	VALUES(
		'{$_POST['region']}', 
		'{$_POST['orz']}', 
		'{$_POST['work']}',
		'{$_POST['class']}',
		'{$_POST['student']}',
		'{$_POST['educate_hour']}',
		'{$_POST['volunteer']}',
		'{$_POST['semester']}',
		'{$_POST['innout']}'
	)
";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  echo mysqli_error($conn);
} else {
  echo '성공했습니다. <a href="1index.php">돌아가기</a>';
	echo $sql;
}
?>