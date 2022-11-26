
<style type="text/css">
<!--
.style3 {font-size: 12px; }
.style444 {font-size: 10px}
-->
</style>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="forma_fiz">
  <tr>
    <td height="3" colspan="5"></td>
  </tr>
  <tr>
    <td width="42%" height="25">     <div align="left" class="style3">&#8250; Банковские карты</div></td>
    <td width="18%" height="25"><img src="../img/karti/Visa.png" width="35" height="21" /></td>
    <td width="6%" height="25">&nbsp;</td>
    <td width="25%" height="25"><div align="left"><img src="../img/karti/Мир.png" width="35" height="21" /></div></td>
    <td width="9%" height="25"><div align="center"><img src="../img/karti/mc_vrt_pos.png" width="34" height="26" /></div></td>
  </tr>
  <tr>
    <td height="25">     <div align="left" class="style3">&#8250; Электронные деньги</div></td>
    <td height="25"><img src="../img/sistem/Yandex_Money_rgb_ru.png" width="75" height="14" /></td>
    <td height="25">&nbsp;</td>
    <td height="25"><div align="left"><img src="../img/sistem/webmoney_white.png" width="55" height="16" /></div></td>
    <td height="25"><div align="left"><img src="../img/sistem/logo_qiwi_rgb.png" width="44" height="18" align="middle" /></div></td>
  </tr>
  <tr>
    <td height="25" class="forma_fiz"><div align="left" class="style3">&#8250; Интернет-банкинг</div></td>
    <td height="25" class="forma_fiz"><img src="../img/bank/Сбербанк_онлайн.png" width="61" height="17" /></td>
    <td height="25">&nbsp;</td>
    <td height="25"><div align="left"><img src="../img/bank/alfabank_hrz_pos.png" width="61" height="17" /></div></td>
    <td height="25"><div align="left"><img src="../img/bank/PSB_vert.png" width="44" height="22" /></div></td>
  </tr>
  <tr>
    <td height="24" colspan="5" class="forma_fiz"><div align="left" class="style3">&#8250; Оплата наличными и другие способы на Яндекс.Кассе</div></td>
  </tr>
  <tr>
    <td height="30" colspan="5" align="left" valign="top" class="forma_fiz"><hr>
    
<?php if (isset($_POST['standart']) or $_POST['paks'] == 1)
 echo '<div align"left"><span class="style22"><strong>› Сумма</strong> -5.800 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span></div>';	
if (isset($_POST['optimal'])) 
echo '<div align"left"><span class="style22"><strong>› Сумма</strong> -9.900 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span></div>';
if ($_POST['paks'] == 2) 
echo '<div align"left"><span class="style22"><strong>› Сумма</strong> -9.900 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span></div>';
if (isset($_POST['universal'])) echo '<div align"left"><span class="style22"><strong>› Сумма</strong> -25.780  руб.&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span></div>';
if ($_POST['paks'] == 3) 
echo '<div align"left"><span class="style22"><strong>› Сумма</strong> -25.780руб.&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> </div>';
if (isset($_POST['design']) or $_POST['paks'] == 4) 
echo '<span class="style22"><strong>› Сумма</strong>-15.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['site']) or $_POST['paks'] == 5) 
echo '<span class="style22"><strong>› Сумма</strong>-20.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';				
if (isset($_POST['animaciya']) or $_POST['paks'] == 6) 
echo '<span class="style22"><strong>› Сумма</strong> - 3.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	 			
if (isset($_POST['viza']) or $_POST['paks'] == 7) 
echo '<span class="style22"><strong>› Сумма</strong> - 5.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	 
if (isset($_POST['seo']) or $_POST['paks'] == 8) 
echo '<span class="style22"><strong>› Сумма</strong> - 1.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';						
if (isset($_POST['verstka']) or $_POST['paks'] == 9) 
echo '<span class="style22"><strong>› Сумма</strong> - 8.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['help']) or $_POST['paks'] == 10) 
echo '<span class="style22"><strong>› Сумма</strong> - 1.100руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['coop']) or $_POST['paks'] == 11) 
echo '<span class="style22"><strong>› Сумма</strong> - 800 руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
if (isset($_POST['mobail']) or $_POST['paks'] == 12) 
echo '<span class="style22"><strong>› Сумма</strong> - 9.000руб.&nbsp;&nbsp;<strong>› ID заказа</strong> -'.$_SESSION['counter'].'&nbsp;&nbsp;<strong>› Время</strong> -'.$_SESSION['time'].'</span> ';	
?>
<div align="center"></form> 
<form action="https://money.yandex.ru/eshop.xml" method="post">
<input name="shopId" value="560301" type="hidden" required/>
<input name="scid" value="862076" type="hidden" required/>
<input name="sum"  value="<?php if (isset($_POST['standart']) or $_POST['paks'] == 1) echo 5800.00; if (isset($_POST['optimal']) or $_POST['paks'] == 2) echo 9900.00; if (isset($_POST['universal']) or $_POST['paks'] == 3) echo 25780.00; if (isset($_POST['design']) or $_POST['paks'] == 4) echo 15000.00; if (isset($_POST['site']) or $_POST['paks'] == 5) echo 20000.00; if (isset($_POST['animaciya']) or $_POST['paks'] == 6) echo 3000.00; if (isset($_POST['viza']) or $_POST['paks'] == 7) echo 5000.00; if (isset($_POST['seo']) or $_POST['paks'] == 8) echo 1000.00; if (isset($_POST['verstka']) or $_POST['paks'] == 9) echo 8000.00; if (isset($_POST['help']) or $_POST['paks'] == 10) echo 1100.00; if (isset($_POST['coop']) or $_POST['paks'] == 11) echo 800.00; if (isset($_POST['mobail']) or $_POST['paks'] == 12) echo 9000.00?>" type="hidden" required/>
<input required name="customerNumber" value="<?php echo $_SESSION['counter']?>" type="hidden"/>
<input required name="custName" value="<?php echo $_SESSION['fio']?>" type="hidden"/>
<input required name="custAddr" value="<?php echo $_SESSION['url']?>" type="hidden"/>
<input required name="custEmail" value="<?php echo $_SESSION['email']?>" type="hidden"/>
<input required name="cpsphone" value="<?php $_SESSION['telefon']?>" type="hidden">
<input required name="orderDetails" value="<?php echo ' Телефон заказчика-' .$_SESSION['telefon']; if (isset($_POST['standart']) or $_POST['paks'] == 1) echo 'Пакет услуг-Стандартный'; if (isset($_POST['optimal']) or $_POST['paks'] == 2) echo ' Пакет услуг-Оптимальный'; if (isset($_POST['universal']) or $_POST['paks'] == 3) echo 'Пакет услуг-Универсальный'; if (isset($_POST['design']) or $_POST['paks'] == 4) echo 'Дизайн сайта'; if (isset($_POST['site']) or $_POST['paks'] == 5) echo 'Сайт визитка'; if (isset($_POST['animaciya']) or $_POST['paks'] == 6) echo 'Анимация баннера'; if (isset($_POST['viza']) or $_POST['paks'] == 7) echo 'Оплата на сайте'; if (isset($_POST['seo']) or $_POST['paks'] == 8) echo 'Оптимизация SEO'; if (isset($_POST['verstka']) or $_POST['paks'] == 9) echo 'Вёрстка сайта'; ?>" type="hidden"/>
<span class="marg1"><?php 
		  if (($_POST['robo'] == 7193 or $_POST['robo'] == 3979 or $_POST['robo'] == 9237 or $_POST['robo'] == 7628 or $_POST['robo'] == 6327) and isset($_SESSION['chek']) and !empty($_SESSION['url']) and !empty($_SESSION['fio']) and !empty($_SESSION['email']) and !empty($_SESSION['telefon']))
		  echo  '<input type="image" src="img/kassa.png" width="268" height="59" onClick="submit()"/>'; 
		  else {echo ('<img src="img/kassa1.png" width="268" height="59" />
');}?></span>   
    
  <span class="style22"><br />
  Оплата будет продолжена на стороне Яндекс.Кассы</span>
        </form> 
      </div>
    </td>
  </tr>
</table>
