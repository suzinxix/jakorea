<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
	  <h3>기본 정보</h3>
    <form action="1process_create_info.php" method="POST">
      <p><input type="text" name="region" placeholder="지역"></p>
	  <p><input type="text" name="orz" placeholder="숙대"></p>
      <p><input type="text" name="work" placeholder="삼성"></p>
		<p><input type="text" name="class" placeholder="class"></p>
		<p><input type="text" name="student" placeholder="student"></p>
		<p><input type="text" name="educate_hour" placeholder="educate_hour"></p>
		<p><input type="text" name="volunteer" placeholder="volunteer"></p>
		<p><input type="text" name="semester" placeholder="semester"></p>
		<p><input type="text" name="innout" placeholder="innout"></p>
      <p><input type="submit"></p>
    </form>
	  
	  <h3>연락처 정보</h3>
	<form action="1process_create_infotel.php" method="POST">
      <p><input type="date" name="progdate" placeholder="YYMMDD"></p>
	  <p><input type="text" name="teacher" placeholder="김영철"></p>
      <p><input type="number" name="tel" placeholder="02xxxxxxx"></p>
	  <p><input type="number" name="mobile" placeholder="010xxxxxxxx"></p>
	  <p><input type="number" name="fax" placeholder="팩스 번호"></p>
	  <p><input type="text" name="address" placeholder="서울시 용산구"></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>