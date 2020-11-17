<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
?>

<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>실적 관리</title>
		<a href="program_index.php">프로그램 관리</a>
	  <style type="text/css">
		  table {border-collapse:collapse; text-align:center; }
		  td {width:100px;}
		  a {text-decoration:none;}
	  </style>
    </head>
    <body>
      <h1>실적관리</h1>
		<h3>기본 정보</h3>
		<a href="1createinfo.php">기본 정보 및 연락처 추가</a><br/>
		<br/>
      <table border="1">
        <tr>
          <td>id</td> <td>지역</td> <td>기관명</td> <td>사업명</td>
			<td>총 학급수</td> <td>총 학생수</td> <td>총 교육시간</td> <td>총 봉사자수</td>
			<td>진행학기</td> <td>안밖</td> <td>수정</td>
            <?php
              $sql = "SELECT * FROM info";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
                $filtered = array(
                  'id'=>$row['id'],
				  'region'=>$row['region'],
				  'orz'=>$row['orz'],
				  'work'=>$row['work'],
					'class'=>$row['class'],
					'student'=>$row['student'],
					'educate_hour'=>$row['educate_hour'],
					'volunteer'=>$row['volunteer'],
					'semester'=>$row['semester'],
					'innout'=>$row['innout']
                );
                ?>
                <tr>
                  <td><?=$filtered['id']?></td>
                  <td><?=$filtered['region']?></td>
                  <td><?=$filtered['orz']?></td>
				  <td><?=$filtered['work']?></td>
				 <td><?=$filtered['class']?></td>
					<td><?=$filtered['student']?></td>
					<td><?=$filtered['educate_hour']?></td>
					<td><?=$filtered['volunteer']?></td>
					<td><?=$filtered['semester']?></td>
					<td><?=$filtered['innout']?></td>
				  <td><a href="1index.php?id=<?=$filtered['id']?>">update</a></td>
					
                </tr>
                <?php
              }
            ?>
        </tr>
      </table>
	  
	  <?php
		$escaped = array(
		  'region'=>'',
		  'orz'=>'',
		  'work'=>''
		);
		$label_submit = 'Create information';
		$form_action = '1process_create_info.php';
		$form_id = '';
		if(isset($_GET['id'])){
		  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
		  settype($filtered_id, 'integer');
		  $sql = "SELECT * FROM info WHERE id = {$filtered_id}";
		  $result = mysqli_query($conn, $sql);
		  $row = mysqli_fetch_array($result);
		  $escaped['region'] = htmlspecialchars($row['region']);
		  $escaped['orz'] = htmlspecialchars($row['orz']);
		  $escaped['work'] = htmlspecialchars($row['work']);
		  $label_submit = 'Update Information';
		  $form_action = '1update.php';
		  $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
		}
		?>
	  <!-- <form action="<?=$form_action?>" method="post">
      <?=$form_id?>
      <p><input type="text" name="region" placeholder="지역" value="<?=$escaped['region']?>"></p>
	  <p><input type="text" name="orz" placeholder="학교명기관명" value="<?=$escaped['orz']?>"></p>
	  <p><input type="text" name="work" placeholder="사업명" value="<?=$escaped['work']?>"></p>
      <p><input type="submit" value="<?=$label_submit?>"></p>
	  </form> -->
	  
	  
	  <br/><br/>
	  <h3>연락처</h3>
	  <table border="1">
		  <tr>
			  <td>id</td> <td>진행일자</td> <td>담당교사</td> <td>유선전화</td> <td>휴대폰</td> <td>팩스</td> <td>주소</td> 
			  <?php
			  $sql = "SELECT * FROM infotel";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
                $filtered = array(
                  'id'=>$row['id'],
				  'progdate'=>$row['progdate'],
                  'teacher'=>$row['teacher'],
                  'tel'=>$row['tel'],
				  'mobile`'=>$row['mobile'],
				  'fax'=>$row['fax'],
				  'address'=>$row['address']
                );
                ?>
                <tr>
                  <td><?=$filtered['id']?></td>
				  <td><?=$filtered['progdate']?></td>
                  <td><?=$filtered['teacher']?></td>
                  <td><?=$filtered['tel']?></td>
				  <td><?=$filtered['mobile']?></td>
			      <td><?=$filtered['fax']?></td>
				  <td><?=$filtered['address']?></td>
                </tr>
                <?php
              }
            ?>
        </tr>
      </table>
    </body>
  </html>