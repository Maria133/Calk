
<form method="POST" action="index.php">
<input type="text" name="x">
<select name="znaki" size="1">
<option name="znaki" value="1">+</option>
<option name="znaki" value="2">-</option>
<option name="znaki" value="3">/</option>
<option name="znaki" value="4">*</option>
<input type="text" name="y">
<input type="submit" value="Посчитать">
<br> Результат
</form>
<?php
if ($_POST['x']) {
$x=$_POST['x'];
$y=$_POST['y'];
if ($_POST['znaki']==1){
$z=$x+$y;
echo $_POST ['x']."+".$_POST ['y']."=".$z;
}
elseif ($_POST['znaki']==2){
$z=$x-$y;
echo $_POST ['x']."-".$_POST ['y']."=".$z;
}
elseif ($_POST['znaki']==3) {
$z=$x/$y;
echo $_POST ['x']."/".$_POST ['y']."=".$z;
}
 elseif ($_POST['znaki']==4){
$z=$x*$y;
echo $_POST ['x']."*".$_POST ['y']."=".$z;
}
}

?>