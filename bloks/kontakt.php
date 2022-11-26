 <!-- МОДАЛ ДИОЛОГ ОБРАТНЫЙ ЗВОНОК~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
 <?php  
              
			 $_SESSION['text'] = $_POST['text']; 
			 $_SESSION['name'] = $_POST['name'];
			 $_SESSION['email'] = $_POST['email'];
			 $_SESSION['robo'] = $_POST['robo'];
			 if (!empty($_POST['submit'])) complete_mail();
 else show_form();
function show_form()
{?>
  <br />
<form action="" method="post"><br />

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
              <td colspan="6" class="grin_menu wow slideInDown"><h2 align="center" class="style4">Контакты</h2></td>
            </tr>


            <tr>
              <td height="30" colspan="4" valign="baseline"><h3 align="right" class="style4 marg_r wow slideInLeft"><img src="img/convert.png" width="28" height="28" align="absmiddle" />&nbsp;Написать сообщение</h3><hr class="marg_r  wow slideInLeft">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </td>
              <td width="11%" rowspan="6" class="wow zoomInUp"><img src="img/v_K.png" width="25" height="334" /></div></td>
              <td height="30" valign="baseline"><h3 align="left" class="style4 wow fadeInRightBig"><img src="img/user-admin.png" width="28" height="28" align="absmiddle" />&nbsp;  Контактное лицо</h3><hr class="wow fadeInRightBig"></td>
              </td>
    </tr>
            <tr>
              <td width="3%" height="35">&nbsp;</td>
              <td width="1%" height="35">&nbsp;</td>
              <td width="16%" height="35"><div class="wow slideInLeft" align="right"><span class="style1">*</span> ВАШЕ ИМЯ - </div></td>
              <td class="wow slideInLeft" width="29%" height="35"><input name="name" type="text" size="26" value="<?php if (isset($_SESSION['name']))  echo $_SESSION['name'];?>" /></td>
              <td class="wow slideInRight" width="40%" height="35"><img src="../img/Identification card.png" width="22" height="22" align="texttop" />&nbsp;&nbsp;&nbsp;ИП Лиховских Дмитрий Андреевич</td>
    </tr>
            <tr>
              <td height="35">&nbsp;</td>
              <td height="35">&nbsp;</td>
              <td height="35"><div class="wow slideInLeft" align="right"><span class="style1">*</span> ЕMAIL - </div></td>
              <td class="wow slideInLeft" height="35"><input type="text" name="email" size="26" value="<?php if (isset($_SESSION['email']))  echo $_SESSION['email'];?>" /></td>
              <td class="wow slideInRight" height="35">ИНН: 271 102 302 429</td>
    </tr>
            <tr>
              <td height="35">&nbsp;</td>
              <td height="35">&nbsp;</td>
              <td height="35"><div class="wow slideInLeft" align="right"><span class="style1">*</span> СООБЩЕНИЕ - </div></td>
              <td class="wow slideInLeft" height="35"><textarea name="text" cols="25" wrap="virtual" type="text"><?php if (isset($_SESSION['text']))  echo $_SESSION['text'];?></textarea></td>
              <td class="wow slideInRight" height="35">TEЛ:8 (924) 413-18-19&nbsp;&nbsp;&nbsp;<img src="../img/whatsapp.png" width="20" height="20" align="texttop" />&nbsp;&nbsp;&nbsp;<img src="../img/viber.png" width="20" height="20" align="texttop" /></td>
    </tr>
             <tr>
              <td height="36">&nbsp;</td>
              <td height="36">&nbsp;</td>
              <td height="38"><div class="wow slideInLeft" align="right"><span class="style1">*</span> ВВЕДИТЕ КОД - </div></td>
              <td class="wow slideInLeft" height="38"><input name="robo" type="text" value="" size="5" />
               <img src="img/9.png" align="absmiddle" /></td>
              <td class="wow slideInRight" height="38">WEB: https://www.spios.pro</td>
    </tr>
             <tr >
              <td height="79">&nbsp;</td>
              <td height="79">&nbsp;</td>
              <td class="wow slideInLeft" height="79" colspan="2"><div class="marg_r" align="right">
                <input  type="submit" name="submit" value=" ОТПРАВИТЬ СООБЩЕНИЕ" alt="Отправить номер"  />
              </div></td>
              <td height="79">&nbsp;</td>
    </tr>
</table>

</form>
<?php  
}
function complete_mail() {
        $_POST['text'] =  substr(htmlspecialchars(trim($_POST['text'])), 0, 350);    
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 60);
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 60);
		$_POST['robo'] =  substr(htmlspecialchars(trim($_POST['robo'])), 0, 4);
           	 if (empty($_POST['name']))
             output_err(0);
              if (empty($_POST['email']))
                output_err(1);
				 if (empty($_POST['text']))
             output_err(3);
if  ($_POST['robo'] != 6327 & $_POST['robo'] != 7628 & $_POST['robo'] != 9237 & $_POST['robo'] !=  3979 & $_POST['robo'] != 7193)
		     output_err(2);
			 if (($_POST['robo'] == 7193) and !empty($_POST['email']) and !empty($_POST['name']) and !empty($_POST['name']) and !empty($_POST['text']))  {
      $mess = '
Имя отправителя:'.$_POST['name'].'
Текст сообщения:'.$_POST['text'].'
Указал свой емайл:'.$_POST['email'];
               $to = 'arcid@yandex.ru';
              $from= $_POST['email'];
        mail($to, $_POST['name'], $mess, "From:".$from);
        echo '<div class="wow slideInDown" align="center"><strong><img src="img/ok.gif" width="54" height="54" align="absmiddle" /><br><br>
Здравтсвуйте<span class="style1"> '. $_POST['name'].'</span>, Ваше сообщение  <span class="style1"> '.$_POST['site'] .'</span>  успешно отправленно. <br><br>Мы ответим Вам в ближайшее время на почту<span class="style1"> '.$_POST['email'] .'</span>!<br><br><br><br></div>  '; } 
		else   show_form();
 }

function output_err($num)
{	
 $err[3] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="31" height="31" align="absmiddle" /><br>Введите текст сообщения.</div>';
    $err[0] = '<br><br>
<div  class="style6"><img align="center" src="img/err2.gif" width="31" height="31" align="absmiddle" /><br>Представтесь пожалуйста.</div>';  
    $err[1] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="31" height="31" align="absmiddle" /><br>Введите ваш адрес электронной  почты.</div>';
    $err[2] = '<br><br><div  class="style6"><img align="center" src="img/err2.gif" width="31" height="31" align="absmiddle" /><br>Введите защитный код с картинки.</div>';
  
	    echo '<span align="center">'.$err[$num].'</span>';
} 

?>  
      <!-- МОДАЛ ДИОЛОГ ОБРАТНЫЙ ЗВОНОК~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->