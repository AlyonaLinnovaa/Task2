<Html>
<meta charset=”utf-8”>
<Title> </Title>
</Head>
<Body>
<p><img src="фото.jpg" width="241" height="239" alt="" /> </p>
<form method="GET">
<input type="text" name="vector" value="">
<input type="text" name="ygol" value="">
<input type="submit" name="compute" value="Вычеслить">
</form>

<?php
function tochka_x($vector,$ygol) {
return((intval($vector))*(cos(intval($ygol))));
}
function tochka_y($vector,$ygol) {
return((intval($vector))*(sin(intval($ygol))));
}
if (isset($_GET['vector']) && isset($_GET['ygol'])) {
	if ((!(is_numeric($_GET['vector'])))||(!(is_numeric($_GET['ygol'])))) {
	echo 'Значение катета может быть только числом!';
	} elseif (($_GET['vector']<0)||($_GET['ygol']<0)) {
		echo "Значение катета должно быть не отрицательным!";} else {
		echo number_format((tochka_x($_GET['vector'],$_GET['ygol'])),2,',','')."</br>";
		echo number_format((tochka_y($_GET['vector'],$_GET['ygol'])),2,',','');
		
		}
}
?>