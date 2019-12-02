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
      
           
           function times(timess){
               let newArray = timess.split(":", 2);
               var wordForm = function(num,word){  
                   cases = [2, 0, 1, 1, 1, 2];  
                   return word[ (num%100>4 && num%100<20)? 2 : cases[(num%10<5)?num%10:5] ];  
               }
               var h = newArray[0]+wordForm(newArray[0], [' час', ' часа', ' часов']);
               var m = newArray[1]+wordForm(newArray[1], [' минута', ' минуты', ' минут']);
               return h + " " + m;
               }
               function date(datess){
                   let newArray = datess.split(/\.|\-|\//);
                   m = newArray[1]
              var arr=[
              'января',
              'февраля',
              'марта',
              'апреля',
              'мая',
              'июня',
              'июля',
              'августа',
              'сентября',
              'октября',
              'ноября',
              'декабря',
           ];
                   return m = newArray[0] + " " + arr[m-1] + " " +newArray[2] + " года";
                   }
           

         var input= original.replace(/(?<=&lt;[a-zA-Zа-яА-Я0-1]+&gt;)([\s\S]*?)(?=&lt;\/[a-zA-Zа-яА-Я0-9]+&gt;)/gmi,
               (username) => "<span class='exists'>" + username + "</span>")
         textarea.innerHTML = input
text = textarea.innerHTML = input
var email = text.replace(/([a-z0-9_\.-]+@[a-z0-9]+\.(ru|com|net))/gm,
     (username) => "<span class='exists1'>" + username + "</span>")
   textarea.innerHTML = email;
   text = textarea.innerHTML = email

   var color = text.replace(/(#[a-zA-Z0-9]{6})/gm,
   (username) => "<span class='exists2'>" + username + "</span>")
   textarea.innerHTML = color;
   text = textarea.innerHTML = color

   var ip = text.replace(/((([0-9A-Fa-f]{1,4}:){7}[0-9A-Fa-f]{1,4}|(\d{1,3}\.){3}\d{1,3}))/gm,
   (username) => "<span class='exists3'>" + username + "</span>")
   textarea.innerHTML = ip;
   text = textarea.innerHTML = ip

   var commit = text.replace(/((\/\/)[а-яА-Яa-zA-Z]+)/gm,
   (username) => "<span class='exists4'>" + username + "</span>")
   textarea.innerHTML = commit;
   text = textarea.innerHTML = commit

   var commit2 = text.replace(/(\/\*(.*?)\*\/)/gm,
   (username) => "<span class='exists4'>" + username + "</span>")
   textarea.innerHTML = commit2;
   text = textarea.innerHTML = commit2
  
   var teg = text.replace(/((&lt;|&lt;\/)(\w+)&gt;)/gm,
   (username) => "<span class='exists5'>" + username + "</span>")
   textarea.innerHTML = teg;
   text = textarea.innerHTML = teg
 
   var time = text.replace(/((0[0-9]+?|1[0-9]+?|2[0-3]+?)\:(0[0-9]+?|1[0-9]+?|2[0-9]+?|3[0-9]+?|4[0-9]+?|5[0-9]+?))/gm,
   (username) => times(username))
   textarea.innerHTML = time;
   text = textarea.innerHTML = time

   var dates = text.replace(/(((0[1-9]|[12][0-9]|3[01])[\-|\/|\.](0[1-9]|1[012])[\-|\/|\.](19|20))\d\d)/gm,
   (username) => date(username))
   textarea.innerHTML = dates;
   text = textarea.innerHTML = dates


   var wrongdate = text.replace(/(((3[2-9]+?|4[0-9]+?|5[0-9]+?|6[0-9]+?|7[0-9]+?|8[0-9]+?|9[0-9])(\/|\.|\-)[0-9]{2}(\/|\.|\-)[\d]{4}|[\d]{2}(\/|\.|\-)(1[3-9]+?|2[0-9]+?|3[0-9]+?|4[0-9]+?|5[0-9]+?|6[0-9]+?|7[0-9]|8[0-9]|9[0-9])(\/|\.|\-)[\d]{4}))/gm,
   (username) => "<span class='wrongs'> Неверная дата </span>")
   textarea.innerHTML = wrongdate;
   text = textarea.innerHTML = wrongdate

   var wrongtime = text.replace(/((2[4-9]+?|4[0-9]+?|5[0-9]+?|6[0-9]+?|7[0-9]+?|8[0-9]+?|9[0-9])\:[0-9]{2}|[\d]{2}\:(6[0-9]+?|7[0-9]|8[0-9]|9[0-9]))/gm,
   (username) => "<span class='wrongs'> Неверное время </span>")
   textarea.innerHTML = wrongtime;
   text = textarea.innerHTML = wrongtime

   var wrongtime1 = text.replace(/Неверное\sвремя/gm,
   (username) => "<span class='wrongs'> Неверное время </span>")
   textarea.innerHTML = wrongtime1;
   text = textarea.innerHTML = wrongtime1

   var wrongdate1 = text.replace(/Неверная\sдата/gm,
   (username) => "<span class='wrongs'> Неверная дата </span>")
   textarea.innerHTML = wrongdate1;
   text = textarea.innerHTML = wrongdate1


   var close = text.replace(/((&lt;|\(|\[|\{)[a-z]+\s)/gm,
   (username) =>  "<span class='wrongs'>" + username + "</span>")
   textarea.innerHTML = close;
   text = textarea.innerHTML = close


   const div = $('div').get(0);
   const range = document.createRange();
    range.selectNodeContents(div);
    range.collapse(false);
    const sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
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
