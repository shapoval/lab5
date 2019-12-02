<?php session_start();
header('Content-Type: text/html; charset=utf-8');
?>
<html>
<head>
<title>5 лабораторная - блокнот</title>
<link href = "style.css" rel = "stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
<form  class = "form">
<fieldset>
<h4>Онлайн блокнот вер. 0.1</h4>


<div contenteditable="true" onKeyUp="Change();" id="textarea"></div>

<script>
function Change()
{
   
  var textarea = document.getElementById('textarea')
 
 var original = textarea.textContent
         
         original = original.replace (/(\<)|(\>)/g, function(a){
           //alert(a)// что нашли
           if(a=="<"){return "&lt;"};
           if(a==">"){return "&gt;"};
           if(a==" "){return "&nbsp;"};            }); 
      
           
      
                  }
</script>




<table>
    <tr><td><div class = "red"></div></td><td>16-ричный код цветов</td><td><div class = "teg"></div></td><td>XML|HTML-теги</td><td><div class = "brown"></div></td><td>Комментарии PHP</td>
   <tr><td><div class = "yellow"></div></td><td>IP-адреса v4 и v6</td><td><div class = "teginput"></div></td><td>Текст в тегах</td><td><div class = "time"></div></td><td>Дата, время</td>
   <tr><td><div class = "blue"></div></td><td>E-mail</td><td><div class = "metka"></div></td><td>Обычный текст</td><td><div class = "wrongss"></div></td><td>Ошибка</td>
</table>
</fieldset>
</form>


</body>
</html>
