<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
$sql = "INSERT INTO program (
	sort, region, prog_name, class, man, woman, studentnum, eduhour, volun_university, volun_office, volun_retiree, educator) 
	VALUES(
		'{$_POST['sort']}', 
		'{$_POST['region']}',
		'{$_POST['prog_name']}',
		'{$_POST['class']}',
		'{$_POST['man']}',
		'{$_POST['woman']}',
		'{$_POST['studentnum']}',
		'{$_POST['eduhour']}',
		'{$_POST['volun_university']}',
		'{$_POST['volun_office']}',
		'{$_POST['volun_retiree']}',
		'{$_POST['educator']}'
	)
";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  echo mysqli_error($conn);
} else {
  echo "성공";
}
?>