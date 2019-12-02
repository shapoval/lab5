$(document).ready(function(){
    // ====================================================== //
    
    var jVal = {
        
        'fullName' : function (){
            
            $('body').append('<div id="fullnameInfo" class="info"></div>');
    
            var fullnameInfo = $('#fullnameInfo');
            var ele = $('#fullname');
            var pos = ele.offset();
            
            fullnameInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /([a-zA-ZА-Яа-я]+\s+[a-zA-ZА-Яа-я]+\s+[a-zA-ZА-Яа-я]+)/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    fullnameInfo.removeClass('correct').addClass('error').html('Введите ФИО полностью').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    fullnameInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
        'NumSerial' : function (){
            
            $('body').append('<div id="numserialInfo" class="info"></div>');
    
            var numserialInfo = $('#numserialInfo');
            var ele = $('#numserial');
            var pos = ele.offset();
            
            numserialInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /(^[\d]{4}-[\d]{6}$)/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    numserialInfo.removeClass('correct').addClass('error').html('Введите номер и серию в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    numserialInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
            'NumIndex' : function (){
            
            $('body').append('<div id="numindexInfo" class="info"></div>');
    
            var numindexInfo = $('#numindexInfo');
            var ele = $('#numindex');
            var pos = ele.offset();
            
            numindexInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /(^[\d]{6}$)/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    numindexInfo.removeClass('correct').addClass('error').html('Введите почтовый индекс в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    numindexInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
            'HomeAdress' : function (){
            
            $('body').append('<div id="homeInfo" class="info"></div>');
    
            var homeInfo = $('#homeInfo');
            var ele = $('#home');
            var pos = ele.offset();
            
            homeInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /(^[а-яА-Я]+\.[а-яА-Я]+\,\s[а-яА-Я]+\.[а-яА-Я]+\,\sд\.[0-9а-я]+\,\s[а-я]{2}\.[0-9]{1,3})/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    homeInfo.removeClass('correct').addClass('error').html('Введите домашний адресс в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    homeInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
            'TelFon' : function (){
            
            $('body').append('<div id="telInfo" class="info"></div>');
    
            var telInfo = $('#telInfo');
            var ele = $('#tel');
            var pos = ele.offset();
            
            telInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /(^(\+[0-9]{1}|[0-9]{1})([0-9]{3}|\([0-9]{3}\))[0-9]{3}([0-9]{4}|\-[0-9]{2}\-[0-9]{2})$)/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    telInfo.removeClass('correct').addClass('error').html('Введите домашний адресс в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    telInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
        'PassWord' : function (){
            
            $('body').append('<div id="passInfo" class="info"></div>');
    
            var passInfo = $('#passInfo');
            var ele = $('#pass');
            var pos = ele.offset();
            
            passInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /((?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$)/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    passInfo.removeClass('correct').addClass('error').html('Введите пароль в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    passInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
        'birthDate' : function (){
            
            $('body').append('<div id="birthInfo" class="info"></div>');
    
            var birthInfo = $('#birthInfo');
            var ele = $('#birthday');
            var pos = ele.offset();
            
            birthInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /(0[1-9]|[12][0-9]|3[01])[\-|\/|\.](0[1-9]|1[012])[\-|\/|\.](19|20)\d\d/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    birthInfo.removeClass('correct').addClass('error').html('Введите дату в корректном формате').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    birthInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }	
        },
        
        
        'email' : function() {
        
            $('body').append('<div id="emailInfo" class="info"></div>');
        
            var emailInfo = $('#emailInfo');
            var ele = $('#email');
            var pos = ele.offset();
            
            emailInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+15
            });
            
            var patt = /^.+@.+[.].{2,}$/i;
            
            if(!patt.test(ele.val())) {
                jVal.errors = true;
                    emailInfo.removeClass('correct').addClass('error').html('Введите правильный email').show();
                    ele.removeClass('normal').addClass('wrong');					
            } else {
                    emailInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }
        },
        
        
        'sendIt' : function (){
            if(!jVal.errors) {
                $('#jform').submit();
            }
        }
    };
    
    // ====================================================== //
    
    $('#send').click(function (){
        var obj = $.browser.webkit ? $('body') : $('html');
        obj.animate({ scrollTop: $('#jform').offset().top }, 750, function (){
            jVal.errors = false;
            jVal.fullName();
            jVal.NumSerial();
            jVal.NumIndex();
            jVal.HomeAdress();
            jVal.TelFon();
            jVal.PassWord();
            jVal.birthDate();
            jVal.email();
            jVal.sendIt();
        });
        return false;
    });
    
    $('#fullname').change(jVal.fullName);
    $('#numserial').change(jVal.NumSerial);
    $('#numindex').change(jVal.NumIndex);
    $('#home').change(jVal.HomeAdress);
    $('#tel').change(jVal.TelFon);
    $('#pass').change(jVal.PassWord);
    $('#birthday').change(jVal.birthDate);
    $('#email').change(jVal.email);
    
    
    // ====================================================== //
    });