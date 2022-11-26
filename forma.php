<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="https://spios.pro/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/stail.css">
<link rel="stylesheet" type="text/css" href="css/left-nav-style.css">
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<meta name="description" content=" ">
<title><?php
 if (isset($_POST['standart']) or $_POST['paks'] == 1) echo 'Заказать сопровождение сайта';
 if (isset($_POST['optimal']) or $_POST['paks'] == 2) echo 'Заказать поддержку сайта';
 if (isset($_POST['universal']) or $_POST['paks'] == 3) echo 'Заказать обслуживание сайта';
 if (isset($_POST['design']) or $_POST['paks'] == 4) echo 'Заказать дизайн сайта';
 if (isset($_POST['site']) or $_POST['paks'] == 5) echo 'Заказать мобильный сайт';
 ?> 
 </title>
<style type="text/css">
<!--
.style1 {color: #d14828}
.style4 {color: #366b3c}
.style5 {
	color: #1b85cc
}
.style16 {color: #c0ffaa}
.style22 {font-size: 12px}
.style24 {font-size: 12px}
.style25 {color: #e3ffe7}
-->
</style>
<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'WD6JCH5huxMHcS7EE';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->
</head>
<body>
<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'forma.php',
        success: function(data) {
            $('#display').html(data);
        }
    });
};

setInterval(mode, 1000);
</script>
<div id="display">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="7">&nbsp;</td>
    <td><div align="center">
      <table width="980" height="138" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
          
            <div align="left">
              <p>
              <?php
			 $file = __DIR__ . '/counter.txt';
        if (file_exists($file)) {
            $counter = file_get_contents($file);
        } else {
            $counter = 100;
        }
        $counter++;
         file_put_contents($file, $counter);
		 $_POST['counter'] = $counter;
		 $time = date("H:i");
		 $_POST['time'] = $time;
		 $data = date("m.d.");
		 $_POST['data'] = $data;
				 	 $_SESSION['time'] = $_POST['time'];
		     $_SESSION['counter'] = $_POST['counter'];
			 $_SESSION['url'] = $_POST['url']; 
			 $_SESSION['fio'] = $_POST['fio'];
			 $_SESSION['email'] = $_POST['email'];
			 $_SESSION['telefon'] = $_POST['telefon'];
			 $_SESSION['chek'] = $_POST['chek'];
			 $_SESSION['file'] = $_POST['file'];
			 $_SESSION['robo'] = $_POST['robo'];
			 $_SESSION['paks'] = $_POST['paks'];
			 $_SESSION['design'] = $_POST['design'];
			 if (!empty($_POST['submit'])) complete_mail();
 else show_form();
function show_form()
{ 
			  ?>
</p>
              <p>&nbsp;</p>
              
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="8" class="grin_menu"><h2 align="center" class="style4">Оформление закакза&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
            </tr>


            <tr>
              <td height="25" colspan="3"></td>
              <td height="25"><h3 align="left" class="style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/1.png" width="35" height="35" align="absmiddle" />  &nbsp;&nbsp;Заполните необходимые поля</h3></td>
              <div id="zakaz"></div>
              <td width="6%" rowspan="8" valign="bottom"><div class="wow slideInUp" align="left"><img src="img/v_K.png" width="25" height="365" align="top" /></div></td>
              <td height="25" colspan="2"><h3 align="left" class="style4">&nbsp;&nbsp;&nbsp; <img src="img/2.png" width="35" height="35" align="absmiddle" />&nbsp;&nbsp; Выберите способ оплаты</h3></td>
              <td height="25">&nbsp;</td>
            </tr>
            <tr>
              <td width="3%" height="27" rowspan="3">&nbsp;</td>
              <td colspan="3" rowspan="7" valign="top">
              <table width="100%" border="0" align="center">
                 
                 <tr>
                   <td width="7%">&nbsp;</td>
                   <td width="41%"><span class="style1">*</span> Пакет/услуга:</td>
                   <td height="30" colspan="2">
                   
                <form name="f1" action="" method="post" enctype="multipart/form-data" id="form">
                 <select name="paks"  size="1" onchange="submit()"/>
                 
                   <option value="1"
             <?php 
						 if (isset($_POST['standart'])) echo 'selected="selected" checked="checked"'; 
			        if ($_POST['paks'] == 1)
				   echo 'selected="selected" checked="checked" '?>/> Стандартный (5.800 руб.)</option>
                   <option value="2"
			 <?php if (isset($_POST['optimal'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 2)
				   echo 'selected="selected" checked="checked" '?>/>Оптимальный (9.900 руб.)</option>
                   <option value="3"
			 <?php if (isset($_POST['universal'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 3)
				   echo 'selected="selected" checked="checked" '?>/>Универсальный(25.780руб)</option>
                   <option value="4"
			 <?php if (isset($_POST['design'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 4) 
			 echo 'selected="selected" checked="checked"';?>/>Дизайн сайта(15.000руб)</option>
             <option value="5"
			 <?php if (isset($_POST['site'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 5) echo 'selected="selected" checked="checked"';
			 ?>/>Сайт визитка(20.000 руб)</option>
             <option value="6"
			 <?php if (isset($_POST['animaciya'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 6) echo 'selected="selected" checked="checked"';
			 ?>/>Анимация(3.000 руб)</option>
             <option value="7"
			 <?php if (isset($_POST['viza'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 7) echo 'selected="selected" checked="checked"';
			 ?>/>Оплата на сайте(5.000 руб)</option>
             <option value="8"
			 <?php if (isset($_POST['seo'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 8) echo 'selected="selected" checked="checked"';
			 ?>/>Оптимизация seo(1.000руб)</option>
             <option value="9"
			 <?php if (isset($_POST['verstka'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 9) echo 'selected="selected" checked="checked"';
			 ?>/>Вёрстка сайта(8.000 руб)</option>
             <option value="10"
			 <?php if (isset($_POST['help'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 10) echo 'selected="selected" checked="checked"';
			 ?>/>Помощь с сайтом(1.100 руб)</option>
             <option value="11"
			 <?php if (isset($_POST['coop'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 11) echo 'selected="selected" checked="checked"';
			 ?>/>Наполнение сайта(800 руб)</option>
             <option value="12"
			 <?php if (isset($_POST['mobail'])) echo 'selected="selected" checked="checked"';
			 if ($_POST['paks'] == 12) echo 'selected="selected" checked="checked"';
			 ?>/>Мобильный сайт(9.000 руб)</option>
                    </select></td>                  
                 </tr>
                 <tr>
                   <td height="30">&nbsp;</td>
                   <td height="35"><span class="style1">*</span> Адрес сайта:</td>
                   <td height="35" colspan="2"><input  name="url" type="text" size="26" onchange="submit()" value="<?php if (isset($_SESSION['url']))  echo $_SESSION['url'];?>"/>                     </td>
                 </tr>
                 <tr>
                   <td height="30">&nbsp;</td>
                   <td height="35"><span class="style1">*</span> Ваше ФИО:</td>
                   <td height="35" colspan="2"><input name="fio" type="text" size="26" onchange="submit()" value="<?php echo $_SESSION['fio']?>"/></td>
                 </tr>
                 <tr>
                   <td height="30">&nbsp;</td>
                   <td height="35"><span class="style1">*</span> Email:</td>
                   <td height="35" colspan="2"><input name="email" type="text" size="26" onchange="submit()"  value="<?php echo $_SESSION['email']?>"/></td>
                 </tr>
                 <tr>
                   <td height="30" >&nbsp;</td>
                   <td height="35" ><span class="style1">*</span> Номер телефона:</td>
                   <td height="35" colspan="2"><input name="telefon" type="text" onchange="submit()"  size="26" value="<?php echo $_SESSION['telefon']?>"/></td>
                 </tr>
                 <tr>
                   <td height="30" valign="middle">&nbsp;</td>
                   <td valign="middle"><span class="style1">*</span> Введите код:</td>
                   <td width="9%" height="30"><input name="robo" type="text" onchange="submit()" value="<?php if (isset($_SESSION['robo']))  echo $_SESSION['robo'];?>" size="5" /></td>
                   <td width="43%" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/<?PHP echo 9 ?>.png" /></td>
                 </tr>
                 <tr>
                   <td height="28">&nbsp;</td>
                   <td height="40"><span class="style1">*</span><a href="oferta.php#top" target="_blank" style="color:#0099FF;font-size:16px"> Договор оферта</a></td>
                   <td height="28" colspan="2"><input name="chek" onClick="submit()" type="checkbox" <?php if (!empty($_SESSION['chek'])) {echo 'checked="checked"';}?>/> - принимаю условия</td>
                  </tr>
                 <tr>
                   <td height="25" colspan="4">&nbsp;                     </td>
                 </tr>
               </table>              </td>
              <td width="19%" height="20" align="left" valign="top" bgcolor="<?php
			   if  ($_POST['status'] == 'urlitco')
			  			   echo '';
			   else {echo '#e3ffe7';}?>">
              <?php if  ($_POST['status'] == 'urlitco')  {echo '<a href="history.back()"><img="img/fiz.png" width="191" height="39"  border=
			  "0"></a>';}
			  else {echo '<a href="#"><img="img/fiz.png" width="191" height="39"  border="0"></a>' ;}
              
              ?> 
			 <img src="img/fiz.png" width="191" height="39"></td>
              <td width="20%" height="20" align="right" valign="top" bgcolor="<?php
			   if  ($_POST['status'] == 'urlitco') echo '#e3fcfb';?>">
               </form><form action="form.php" method="post">
               <input name="url"  type="hidden" value="<?php echo $_SESSION['url']?>">
               <input name="fio"  type="hidden" value="<?php echo $_POST['fio']?>">
               <input name="email"  type="hidden" value="<?php echo $_SESSION['email']?>">
               <input name="telefon"  type="hidden" value="<?php echo $_SESSION['telefon']?>">
               <input name="robo"  type="hidden" value="<?php echo $_SESSION['robo']?>">
               <input name="chek"  type="hidden" value="<?php echo $_SESSION['chek']?>">
               <input name="paks"  type="hidden" value="<?php if (isset($_POST['standart']) or $_POST['paks'] == 1) echo 1; if (isset($_POST['optimal']) or $_POST['paks'] == 2) echo 2; if (isset($_POST['universal']) or $_POST['paks'] == 3) echo 3; if (isset($_POST['design']) or $_POST['paks'] == 4) echo 4;if (isset($_POST['site']) or $_POST['paks'] == 5) echo 5; if (isset($_POST['animaciya']) or $_POST['paks'] == 6) echo 6; if (isset($_POST['viza']) or $_POST['paks'] == 7) echo 7; if (isset($_POST['seo']) or $_POST['paks'] == 8) echo 8; if (isset($_POST['verstka']) or $_POST['paks'] == 9) echo 9; if (isset($_POST['help']) or $_POST['paks'] == 10) echo 10; if (isset($_POST['coop']) or $_POST['paks'] == 11) echo 11; if (isset($_POST['mobail']) or $_POST['paks'] == 12) echo 12;?>">
               <?php 
		  if (($_POST['robo'] == 7193 or $_POST['robo'] == 3979 or $_POST['robo'] == 9237 or $_POST['robo'] == 7628 or $_POST['robo'] == 6327) and isset($_SESSION['chek']) and !empty($_SESSION['url']) and !empty($_SESSION['fio']) and !empty($_SESSION['email']) and !empty($_SESSION['telefon']))
		  echo  '<input name="submit" onClick="submit()" type="image" src="img/uyr3.png" width="191" height="39"  border="0"  onmouseover="this.src=\'img/yur1.png\'"  onmouseout="this.src=\'img/uyr3.png\'"/> '; 
		  else {echo ('<img src="img/yur1.png" width="191" height="39" />
');}?>              </td>
              <td width="7%" rowspan="3"></td>
            </tr>
            <tr>
              <td height="4" valign="top" bgcolor="<?php
			   if  ($_POST['id'] == 'urlitco')
			  			   echo '#e3fcfb';
			   else {echo '#e3ffe7';}
			   ?>"></td>
              <td width="20%" height="4" valign="top" bgcolor="<?php
			   if  ($_POST['status'] == 'urlitco')
			   echo '#e3fcfb';
			    else {echo '#e3ffe7';} 
			  ?>"></td>
            </tr>
            <tr>
              <td height="5" valign="top"></td>
              <td width="20%" height="5" valign="top"></td>
            </tr>
            <tr>
              <td height="40">&nbsp;</td>
              <td colspan="2" rowspan="3" valign="top" bgcolor="<?php
			   if  ($_POST['status'] == 'urlitco')
			   echo '#e3fcfb';
			    else {echo '#e3ffe7';} 
			  ?>"><?php 
			  /*$litcoU == $_POST['litcoU'];*/
			   if  ($_POST['status'] == 'urlitco')  {echo '<br>
			   ';
if (isset($_POST['standart']) or $_POST['paks'] == 1)
 echo '<span class="style22"><strong>› Сумма</strong> -5.800 руб.&nbsp;&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span>';	
if (isset($_POST['optimal'])) 
echo '<span class="style22"><strong>› Сумма</strong> -9.900 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span>';
if ($_POST['paks'] == 2) 
echo '<span class="style22"><strong>› Сумма</strong> -9.900 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span>';
if (isset($_POST['universal'])) echo '<span class="style22"><strong>› Сумма</strong> -25.780  руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span>';
if ($_POST['paks'] == 3) 
echo '<span class="style22"><strong>› Сумма</strong> -25.780руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['design']) or $_POST['paks'] == 4) 
echo '<span class="style22"><strong>› Сумма</strong>-15.000р.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['site']) or $_POST['paks'] == 5) 
echo '<span class="style22"><strong>› Сумма</strong>-20.000р.&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';				
if (isset($_POST['animaciya']) or $_POST['paks'] == 6) 
echo '<span class="style22"><strong>› Сумма</strong> - 3.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	 			
if (isset($_POST['viza']) or $_POST['paks'] == 7) 
echo '<span class="style22"><strong>› Сумма</strong> - 5.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	 
if (isset($_POST['seo']) or $_POST['paks'] == 8) 
echo '<span class="style22"><strong>› Сумма</strong> - 1.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';						
if (isset($_POST['verstka']) or $_POST['paks'] == 9) 
echo '<span class="style22"><strong>› Сумма</strong> - 8.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	                      
			echo  '
			 <p align="justify" class="style22">› Загрузите в систему  <strong>Карточку организации</strong> (формат .pdf .doc .docx .jpg .png .jpeg) разрешение 150-200 ppi с наименованием и банковскими реквизитами и нажмите кнопку сформировать счёт на оплату. </p>
			 <p class="style22">
			 <input type="hidden" name="max_file_size" value="1111111">
			 <input name="filename" type="file" enctype="multipart/form-data" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*"></p><p class="style22" align="left">
<input class="" type="submit" value="СФОРМИРОВАТЬ СЧЁТ НА ОПЛАТУ" name="submit"/></p></form>';}
else {include 'bloks/fizlitco.php';}
?>			 </td>
              <td height="40">&nbsp;</td>
            </tr>
            <tr>
              <td height="40">&nbsp;</td>
              <td height="40">&nbsp;</td>
            </tr>
             <tr>
              <td height="89">&nbsp;</td>
              <td height="89">&nbsp;</td>
             </tr>
             <tr>
              <td height="31">&nbsp;</td>
              <td height="31" colspan="3">&nbsp;</td>
            </tr>
</table>
              <?php }
        function complete_mail() {
        $_POST['pak'] =  substr(htmlspecialchars(trim($_POST['pak'])), 0, 10);    
        $_POST['url'] =  substr(htmlspecialchars(trim($_POST['url'])), 0, 20);
        $_POST['fio'] =  substr(htmlspecialchars(trim($_POST['fio'])), 0, 60);
		$_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 30);
		$_POST['telefon'] =  substr(htmlspecialchars(trim($_POST['telefon'])), 0, 12);
		$_POST['robo'] =  substr(htmlspecialchars(trim($_POST['robo'])), 0, 4);
		$_POST['chek'] =  substr(htmlspecialchars(trim($_POST['chek'])), 0, 1);
		  
        if (empty($_POST['paks']))
             output_err(0);   	 
        if (empty($_POST['fio']))
             output_err(1); 
		if (empty($_POST['email']))
             output_err(2);
			 if (empty($_FILES['filename']))
             output_err(3);	
	    if  ($_POST['robo'] != 6327 & $_POST['robo'] != 7628 & $_POST['robo'] != 9237 & $_POST['robo'] !=  3979 & $_POST['robo'] != 7193)
		     output_err(5);      
		          
		if (empty($_POST['chek']))
             output_err(6);
			 if (empty($_POST['url']))
             output_err(7);	 	 
		if (($_POST['robo'] == 7193 or $_POST['robo'] == 3979 or $_POST['robo'] == 9237 or $_POST['robo'] == 7628 or $_POST['robo'] == 6327) and !empty($_POST['email']) and !empty($_POST['fio']) and !empty($_POST['paks']) and !empty($_POST['chek']) and !empty($_FILES['filename']) and !empty($_POST['url'])) {
      $mess = '
Идентификатор заказа (id) - '.$_SESSION['counter'].'
ЗАКАЗЧИК:'.$_POST['fio'].'
ЗАКАЗАЛ ПАКЕТ:'.$_POST['paks'].'
САЙТ ЗАКАЗЧИКА:'.$_POST['url'].'
ТЕЛЕФОН ЗАКАЗЧИКА:'.$_POST['telefon'].'
ПОЧТОВЫЙ ЯЩИК ЗАКАЗЧИКА:'.$_POST['email'].'
КАРТОЧКА ОРГАНИЗАЦИИ ЗАКАЗЧИКА:'.$_POST['filename'].'
СОГЛАСИЕ С УСЛОВИЯМИ ДОГОВОРА ОФЕРТЫ:'.$_POST['chek'];

               $to = 'zakaz@spios.pro';
              $from= $_POST['email'];
        mail($to, 'ОФОРМЛЕН ЗАКАЗ НА САЙТЕ', $mess, "From:".$from);
        echo '<br/><br/><br/><div align="center"><img src="img/ok.gif" width="54" height="54" align="absmiddle" /><br><br><br/>Здравтсвуйте<span class="style4"> '. $_POST['fio'].'</span>, Ваш заказ успешно зарегистрирован. </div>
		<br><table align="center" width="30%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td>
	 
<br>› Идентификатор заказа (id) - '.$_SESSION['counter'].'
<br>› Дата регистрации -  '.$_POST['data'] .'
<br>› Время регистрации - '.$_POST['time'] .'
<br>› Электронная почта - '.$_POST['email'] .'

</span></div>
</td>
</tr></table><br><br><div align="center">Счёт на оплату и договор мы отправим Вам на почту в течении рабочего дня.</div><br><br><br>
  '; } 
		else   show_form();
 }

function output_err($num)
{
$err[0] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" />Вы не выбрали услугу';  
$err[1] = '<br/><br/><img align="top" src="img/err2.gif" width="21" height="21" align="absmiddle" />Введите Ваше ФИО';
$err[2] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" />Введите Ваш почтовый ящик.';
$err[3] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" />Ошибка загрузки файла.';
$err[4] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" /> Введите номер телефона в формате +7(***) ***-**_**';
$err[5] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" />Вы не ввели или ввели неверно защитный код с картинки.';
$err[6] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" />Вы не согласились с условиями Договора оферты.';
$err[7] = '<br/><br/><img align="center" src="img/err2.gif" width="21" height="21" align="absmiddle" /> Укажите адрес сайта, для которого заказываете услугу';
echo '<span align="center" class="style6">'.$err[$num].'</span>';}

   if(  is_uploaded_file($_FILES["filename"]["tmp_name"])  )
    {
        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        move_uploaded_file
        (
            $_FILES["filename"]["tmp_name"],
            __DIR__  . DIRECYORY_SEPARATOR .  $_FILES["filename"]["name"]
        );
    }
?>
    </td>
             
 </div></td>
          </tr>
      </table>
      <td width="11">&nbsp;</td>
  </tr>  
</table>
<div  class="fixed_top">
  <table align="center" class="menu_top" width="100%" height="38px" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="8%" ><input type="checkbox" id="nav-toggle" hidden="hidden" />
          <nav class="nav">
            <label for="nav-toggle" class="nav-toggle" onclick="onclick"></label>
            <h2 class="logo"> <a href=""><br />
              spios.pro</a> </h2>
            <ul>
              <li><a href="index.php">Главная</a> </li>
              <li><a href="index.php?contact#bottom">Контакты</a> </li>
              <li><a href="vopros_otvet.php#top">Вопрос-Ответ</a> </li>
              <li><a href="index.php?zvonok#openModal" rel="nofollow">Заказать звонок</a> </li>
              <li><a href="oferta.php#top">Договор оферта</a> </li>
            </ul>
          </nav>
        </input>
          <!-- 
    Маска (затемнение) основного контента при включенной панели
    по-умолчанию данная фишка не используется, если оно вам надо,
		просто расккоментируйте div-контейнер ниже
		
    <div class="mask-content"></div>
		-->
      </td>
      <td width="8%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="55%"><div align="center"><span class="style15 style25 style24">
          <?php 
	function getDayRus(){
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[(date('w'))];
}
	$gr = gmdate("U", time(+6)); 
    $date = date ("G:i:s", $gr + 6*3600); 
  echo getDayRus()."&nbsp;".date("d.m.Y")."г.&nbsp;&nbsp;&nbsp;Системное время:&nbsp;".$date;
  echo"&nbsp;&nbsp;&nbsp;Московское время:&nbsp;".date("H:i:s");?>
      </span><br />
      </div></td>
      <td width="21%"><div align="right"><a href="index.php"> <img src="img/logo.png" width="83" height="30" /></a></div></td>
      <td width="3%">&nbsp;</td>
    </tr>
  </table>
</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#2d4e4f">
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="49%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"><span class="style16">&copy; 2019 WWW.SPIOS.PRO&nbsp;&nbsp;&nbsp;</span></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table> 
<?php if(isset($_GET['zvonok'])) include 'bloks/zvonok.php';
 ?></div>
</body>
</html>