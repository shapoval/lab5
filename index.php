<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');?>
<html>
<head>
<title>5 лабораторная - авторизация</title>
<link href = "style.css" rel = "stylesheet">
</head>
<body>
<form method = "post" name = "form" class = "form">
<fieldset>
<h4>Онлайн блокнот вер. 0.1</h4>
<hr>
<label for = "email">Логин</label><br>
<input type = "text" name = "email" class = "inp"> <br>
<label for = "pass">Пароль</label><br>
<input type = "password" name = "pass" class = "inp"><br>
<input type = "submit" name = "submit" class = "inpb"><br>
<a href = "reg.php" class = "link">Зарегистрироваться</a>
<?php
$err = array();
 foreach($err AS $error)
        {
            print $error;
		}
?>
<?php
include ("bd.php");
if(isset($_POST['submit']))
{
 $password=$_POST['pass'];
 $login = $_POST['email'];
    $query = mysql_query("SELECT id, pass,name, family FROM users WHERE email='".$_POST['email']."'",$db);
    $data = mysql_fetch_assoc($query);

   
    if($data['pass'] === $_POST['pass'])
    {
      $_SESSION['name'] = $data['name']. " ". $data['family']; 
    echo '<script language="JavaScript"> 
  window.location.href = "notepad.php"
</script>';
	
	
    }
    else
    {
       echo $err[] = "<br><br><div class = 'nsac'><p>Неправильный логин/пароль!</p></div>";
    }
}
?>
</form>
</fieldset>
</body>
</html>