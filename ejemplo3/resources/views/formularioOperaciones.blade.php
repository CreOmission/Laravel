<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulario de operaciones</title>
</head>
<body>
	<h1>Formulario de operaciones</h1>
	<form action="operacion">
		<label for="oper1">Operando 1</label><input type="text" id="oper1" name="oper1"><br>
		<label for="oper2">Operando 2</label><input type="text" id="oper2" name="oper2"><br>
		<input type="submit" value="Operar">
		<br>
		<input type="radio" id="s" name="operacion" value="sum"><label for="s">suma</label><br>
		<input type="radio" id="r" name="operacion" value="res"><label for="r">resta</label><br>
		<input type="radio" id="m" name="operacion" value="mul"><label for="m">multiplicacion</label><br>
		<input type="radio" id="d" name="operacion" value="divi"><label for="d">division</label><br>
	</form>
</body>
</html>