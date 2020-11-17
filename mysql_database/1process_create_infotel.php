<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
$sql = "INSERT INTO infotel (progdate, teacher, tel, mobile, fax, address)
	VALUES('{$_POST['progdate']}',
	'{$_POST['teacher']}', 
	'{$_POST['tel']}', 
	'{$_POST['mobile']}', 
	'{$_POST['fax']}', 
	'{$_POST['address']}'
	)";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  echo mysqli_error($conn);
} else {
  echo '성공했습니다. <a href="1index.php">돌아가기</a>';
}
?>