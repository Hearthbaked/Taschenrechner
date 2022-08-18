<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Ein Taschenrechner!</title>
</head>
<body>
<form method="POST" action="rechnen.php">
<h1>Rechenaufgabe:</h1><br>
<br>
<input name="zahl1" size=6>
<select name="Rechenoperation">

<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input name="zahl2" size=6><br>
<br>
<input type=submit name=submit value="Rechnen">
</form>
</body>
</html>
