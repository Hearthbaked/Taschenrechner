<?php
// if(!isset($POST['zahl1']) || empty($_POST['zahl1'])) {
	// header('Location:index.php');
	// exit;
// }
// if(!isset($POST['zahl2']) || empty($_POST['zahl2'])) {
	// header('Location:index.php');
	// exit;
// }	
if (!empty($_POST["submit"]))
{
	$_zahl1 = $_POST["zahl1"];
	$_zahl2 = $_POST["zahl2"];
	$_ro = $_POST["Rechenoperation"];

if ($_ro == "+") $c=bcadd($_zahl1, $_zahl2, 0);
if ($_ro == "-") $c=bcsub($_zahl1, $_zahl2, 0);
if ($_ro == "*") $c=bcmul($_zahl1, $_zahl2, 0);
if ($_ro == "/") $c=bcdiv($_zahl1, $_zahl2, 2);

// hier der Rechenweg der per Echo dargestellt wird.
echo $_zahl1 . $_ro . $_zahl2 . "=" . $c;
}
?>