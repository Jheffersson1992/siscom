<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" type="text/css" href="Stylos/principal.css">
<script type="text/javascript" src="Js/validacion.js"></script>
</head>

<body>
		<h2 align="center">Acceso al Sistema</h2>
		<form method='post' action='verificacion.php' onSubmit="return comparar()">
			<table align="center" border="2">
				<tr>
					<td align="center">Usuario:</td>
					<td><input type="text" name='usuario' id='usuario' placeholder="Ingrese Usuario" maxlength="20" size="20" onblur="return solono(this)"></td>
				</tr>
				<tr>
					<td align="center">Contraseña:</td>
					<td><input type="password" name='contraseña' id='contraseña' placeholder="Ingrese Contraseña" maxlength="20" size="20" onblur="return solono(this)"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" name="Enviar" value="Enviar">
					<input type="reset" name="Borrar" value="Borrar">
					</td>	
				</tr>	
			</table>
		</form>
</body>
</html>