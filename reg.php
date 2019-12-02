<html>
<head>
<title>5 лабораторная - форма регистрации</title>
<link href = "style.css" rel = "stylesheet"  type="text/css" media="screen">
</head>
<body>
<div id="content">
	<form id="jform" method="post">
		<fieldset>
			<legend>Форма регистрации</legend>
			<p>
				<label for="fullname" class="block">ФИО:</label>
				<input type="text" name="fullname" id="fullname" />
			</p>
            <p>
				<label for="birthday" class="block">Дата выдачи паспорта:</label>
				<input type="text" name="birthday" id="birthday" />
            </p>
            <p>
				<label for="numserial" class="block">Серия и номер паспорта:</label>
				<input type="text" name="numserial" id="numserial" />
            </p>
			</fieldset>
	
		
	</form>
</div>
<script type="text/javascript" src="jquery-1.5.1.min.js" charset="utf-8"></script>
<script type="text/javascript" src="validation.js" charset="utf-8"></script>


</body>
</html>