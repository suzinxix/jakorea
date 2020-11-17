<?php
$conn = mysqli_connect('localhost', 'root', 'sm2020', 'topic');
?>


<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>프로그램 관리</title>
	  <style type="text/css">
		  table {border-collapse:collapse; text-align:center; }
		  td {width:120px;}
	  </style>
    </head>
    <body>
      <h1>프로그램 관리</h1>
      <a href="program_create.php">create info</a>
      <table border="1">
        <tr>
          <td>id</td> <td>구분</td> <td>지역</td> <td>(학년)프로그램명</td> <td>학급</td> 
			<td>남</td> <td>여</td>	<td>학생수</td> <td>교육시간</td> 	
			<td>자봉(대)</td> <td>자봉(직)</td> <td>자봉(은)</td> 
			<td>진행교사</td> <td>업데이트</td>
			
            <?php
              $sql = "SELECT * FROM program";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
                $filtered = array(
                  'id'=>$row['id'],
                  'sort'=>$row['sort'],
					'region'=>$row['region'],
					'prog_name'=>$row['prog_name'],
					'class'=>$row['class'],
					'man'=>$row['man'],
					'woman'=>$row['woman'],
					'studentnum'=>$row['studentnum'],
					'eduhour'=>$row['eduhour'],
					'volun_university'=>$row['volun_university'],
					'volun_office'=>$row['volun_office'],
					'volun_retiree'=>$row['volun_retiree'],
					'educator'=>$row['educator']
                );
                ?>
                <tr>
                  <td><?=$filtered['id']?></td>
                  <td><?=$filtered['sort']?></td>
					<td><?=$filtered['region']?></td>
					<td><?=$filtered['prog_name']?></td>
                  <td><?=$filtered['class']?></td>
					<td><?=$filtered['man']?></td>
					<td><?=$filtered['woman']?></td>
					<td><?=$filtered['studentnum']?></td>
					<td><?=$filtered['eduhour']?></td>
					<td><?=$filtered['volun_university']?></td>
					<td><?=$filtered['volun_office']?></td>
					<td><?=$filtered['volun_retiree']?></td>
					<td><?=$filtered['educator']?></td>
				  <td><a href="1index.php?id=<?=$filtered['id']?>">update</a></td>
                </tr>
                <?php
              }
            ?>
        </tr>
      </table>
