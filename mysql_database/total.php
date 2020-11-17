<?php
  $conn = mysqli_connect(
	  '172.17.0.18', 
	  'root', 
	  'sm2020', 
	  'topic'
  );
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
	<body>
		<h1><a href="index.php">홈 화면</a></h1>
		<table border="1">
      <tr>
        <td>id</td><td>정보</td> <td>서울</td> <td>지방</td> <td>계</td> 
        <?php
        $totalsql = "SELECT * FROM total";
        $totalresult = mysqli_query($conn, $totalsql);
        while($row = mysqli_fetch_array($totalresult)){
          $filtered = array(
            'id'=>htmlspecialchars($row['id']),
            '정보'=>htmlspecialchars($row['정보']),
            '서울'=>htmlspecialchars($row['서울']),
			'지방'=>htmlspecialchars($row['지방']),
			'계'=>htmlspecialchars($row['계'])
          );
          ?>
          <tr>
            <td><?=$filtered['id']?></td>
            <td><?=$filtered['정보']?></td>
            <td><?=$filtered['서울']?></td>
			<td><?=$filtered['지방']?></td>
			 <td><?=$filtered['계']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>
    </body>
</html>