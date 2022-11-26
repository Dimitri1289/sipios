 <!-- МОДАЛ ДИОЛОГ ОБРАТНЫЙ ЗВОНОК~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
 <style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #FFFFFF}
-->
     </style>
   <div  class="add_palitra">
  
   <div id="openModal" class="modalDialog wow slideInDown">
	        <div>
		    <a href="#close" title="" class="close wow slideInDown">X</a>
            
            <?php 
			 $_SESSION['name1'] = $_POST['name'];
			 $_SESSION['email1'] = $_POST['email'];
			 if (!empty($_POST['submit'])) complete_mail();
			 else show_form();
function show_form()
{
?>
             
             <br> <br>
            <form action="" method="post" class="style2">

             <div align="center" class="style11"><strong>ЗАПОЛНИТЕ ФОРМУ, МЫ ПЕРЕЗВОНИМ ВАМ<br />
 В ТЕЧЕНИИ НЕСКОЛЬКИХ МИНУТ</strong><br>
                  <hr width="65%" />
                  <br />
            <table width="59%" border="0" bgcolor="#004040">
<tr>
                      <td class="style11" width="50%"> <div align="left"><span class="style1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span> <span class="style2">ВАШЕ ИМЯ:</span> &nbsp;</div></td>
                      <td height="40" colspan="2"><input name="name" type="text"  size="25" value="<?php if (isset($_SESSION['name1']))  echo $_SESSION['name1'];?>" /></td>
        </tr>
                    <tr>
                      <td  class="style11"><div align="left"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span> НОМЕР ТЕЛЕФОНА: &nbsp;</div></td>
                      <td height="40" colspan="2"><input type="text" name="email" size="25" value="<?php if (isset($_SESSION['email1']))  echo $_SESSION['email1'];?>"/></td>
              </tr>

                    <tr>
                      <td class="style11"valign="middle">                                                    
                      <div align="left"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</span> КОД С КАРТИНКИ:&nbsp;&nbsp; </div></td>
                      <td width="13%"><input name="robo" type="text" value="" size="5" /></td>
                      <td width="37%" height="39"><a  href="?zvonok#openModal"  onClick=" javascript:window.location.reload(false);" title="Обновить картинку">&nbsp;<img src="img/<?PHP echo rand (5 , 9) ?>.png" border="0" /></a></td>
              </tr>
                    <tr>
                      <td height="40" colspan="3"><div align="center">
                     
                    <div class="rollover">   <input  type="submit" name="submit" class="" value="Отправить номер" alt="Отправить номер"  /></div>
                      </div></td>
                    </tr>
                  </table>
              <br />
              <br />
              <hr width="65%" />
              <span class="style1">*</span> обязательное поле&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;тел: 8 (924) 413-18-19<br />
             </div>
</form>
<?php
}
function complete_mail() {
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30);
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);
		if (empty($_POST['name']))
             output_err(0);
              if (empty($_POST['email']))
                output_err(1);
if  ($_POST['robo'] != 6327 & $_POST['robo'] != 7628 & $_POST['robo'] != 9237 & $_POST['robo'] !=  3979 & $_POST['robo'] != 7193)
		     output_err(2);
			 if (($_POST['robo'] == 7193 or $_POST['robo'] == 7628 or $_POST['robo'] == 3979 or $_POST['robo'] == 9237 or $_POST['robo'] == 6327) and !empty($_POST['email']) and !empty($_POST['name'])) {  
      $mess = '

Указал номер телефона:'.$_POST['email'].'
Заказал звонок:'.$_POST['name'];
               $to = 'arcid@yandex.ru';

              $from= $_POST['email'];
        mail($to, 'ЗАКАЗ ОБРАТНОГО ЗВОНКА', $mess, "From:".$from);
        echo '<div align="center"><br><img src="img/ok.gif" width="54" height="54" align="absmiddle" /><br><br><hr width="77%" /><span class="style2"><br>Здравтсвуйте '. $_POST['name'].', Ваш номер - '.$_POST['email'] .' <br> успешно отправлен, ожидайте звонка!<br><hr width="77%" /><br><div align="center"><br />
    <a href="fasad.php">Фасадная плитка</a> | <a href="fence.php">Бетонные ограждения</a><br />
    <br />
</div></div>' ; } 
		else   show_form();
 }

function output_err($num)
{
    $err[0] = '<div align="left" class="style1">&nbsp;&nbsp;&nbsp;&nbsp;!!! Представьтесь пожалуйста</div>';  
    $err[1] = '<div align="left" class="style1"> &nbsp;&nbsp;&nbsp;&nbsp;!!! Неверно указан номер телефона.</div>';
    $err[2] = '<div align="left" class="style1">&nbsp;&nbsp;&nbsp;&nbsp;!!! Неверно введён проверочный код.</div>';
	    echo '<span align="left">'.$err[$num].'</span>';
}

?> </div>
 </div>
    </div> 
      <!-- МОДАЛ ДИОЛОГ ОБРАТНЫЙ ЗВОНОК~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->