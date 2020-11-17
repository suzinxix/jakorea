<?php
  $conn = mysqli_connect('172.17.0.18', 'root', 'sm2020', 'topic');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>basic_form</title>
    </head>
    <body>
        <h1><a href="index.php">Basic Form</a></h1>
		<h3>기본 정보</h3>
        <table border="1">
      <tr>
        <td>지역</td> <td>학교/기관명</td> <td>사업명</td> <td>기관별 학급수</td> <td>기관별 학생수</td>
		   <td>기관별 교육시간</td> <td>기관별 봉사자수</td> <td>진행학기</td> <td>안/밖</td>
		</tr>	
        
      
    </table>
		
	<form action="process_basic_form2.php" method="GET">
		<p><input type="text" name="info_2" placeholder="서울" required></p>
		<p><input type="text" name="info_3" placeholder="숙명여자대학교"></p>
		<p><input type="text" name="info_4" placeholder="프라임 사업"></p>
		<p><input type="number" name="info_5" placeholder="15"></p>
		<p><input type="number" name="info_6" placeholder="20"></p>
		<p><input type="number" name="info_7" placeholder="3"></p>
		<p><input type="number" name="info_8" placeholder="14"></p>
		<p><input type="number" name="info_9" placeholder="2"></p>
		<p><input type="text" name="info_10" placeholder="안 or 밖"></p>
		<p><input type="submit"></p>
		
		<?php
		$conn = mysqli_connect('172.17.0.18', 'root', 'sm2020', 'topic');
		$sql = "SELECT * FROM topic";
		$rs = mysqli_query($conn, $sql);
		$info = mysqli_fetch_array($rs);
		echo "<table border='1'>
		<tr>
        <td>지역</td> <td>학교/기관명</td> <td>사업명</td> <td>기관별 학급수</td> <td>기관별 학생수</td>
		   <td>기관별 교육시간</td> <td>기관별 봉사자수</td> <td>진행학기</td> <td>안/밖</td>
		</tr>";
		?>
		
		
		
    </form>
	
		
		
	<h3>연락처 정보</h3>
	<table border="1">
		<td>진행일자</td> <td>담당교사</td> <td>유선전화</td> <td>휴대전화</td> <td>팩스</td> <td>주소</td>
		<?php
		$sql2 = "select * from info2";
		$result2 = mysqli_query($conn, $sql2);
		while($row = mysqli_fetch_array($result2)) {
			$filtered = array(
				'진행일자'=>htmlspecialchars($row['진행일자']),
				'담당교사'=>htmlspecialchars($row['담당교사']),
				'유선전화'=>htmlspecialchars($row['유선전화']),
				'휴대전화'=>htmlspecialchars($row['휴대전화']),
				'팩스'=>htmlspecialchars($row['팩스']),
				'주소'=>htmlspecialchars($row['주소'])
			);}
		?>
	</table>
		
		<form action="infotel.php" method="POST">
      <p><input type="text" name="진행일자" placeholder="YYMMDD" value="<?=$filtered['진행일자']?>"></p>
      <p><input type="text" name="담당교사" placeholder="김철수" value="<?=$filtered['담당교사']?>"></p>
	  <p><input type="text" name="유선전화" placeholder="02xxxxxxx" value="<?=$filtered['유선전화']?>"></p>
	<p><input type="text" name="휴대전화" placeholder="010xxxxxxxx" value="<?=$filtered['휴대전화']?>"></p>
	<p><input type="text" name="팩스" placeholder="팩스" value="<?=$filtered['팩스']?>"></p>
	<p><input type="text" name="주소" placeholder="서울시 용산구" value="<?=$filtered['주소']?>"></p>
      <p><input type="submit"></p>
    </form>
    </body>
</html>