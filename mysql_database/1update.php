<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'region'=>mysqli_real_escape_string($conn, $_POST['region']),
  'orz'=>mysqli_real_escape_string($conn, $_POST['orz']),
  'work'=>mysqli_real_escape_string($conn, $_POST['work'])
);

$sql = "
  UPDATE info
    SET
      region = '{$filtered['region']}',
      orz = '{$filtered['orz']}',
	  work = '{$filtered['work']}'
    WHERE
      id = {$filtered['id']}
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '업데이트를 실패했습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  header('Location: 1index.php?id='.$filtered['id']);
}
?>