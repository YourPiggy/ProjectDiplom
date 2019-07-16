<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка SLC</title>
	<link rel="stylesheet" href="../PHPzachot/css/Admin.css">
</head>
	<body>
		<div class="main">
			<h1>Выберите раздел</h1>
		</div>
		<form action="/card/add" method="POST" enctype="multipart/form-data" >
 			<p><select name="list1">
  			<option>Выберите из списка:</option>
  			<option value="1">Физическим лицам</option>
  			<option value="2">Юридическим лицам и индивидуальным предпринимателями</option>
  			<option value="3">Банкротство</option>
  			<option value="4">Сопровождение участия в долевом строительстве</option>
  			<option value="5">Антикризисные мероприятия</option>
 			</select></p>
			<textarea name="serv" rows="8" cols="80"></textarea>
 			<p><input type="submit" value="Добавить услугу"></p>
		</form>
	</body>
</html>
