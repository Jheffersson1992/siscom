<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingreso de Usuario</title>
</head>

<body>
	<?php
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	$siexiste=false;
	$correcto=false;
	$archivo=fopen("usuarios.txt","r");
	while (!feof($archivo))
		{
			$seguir=fgets($archivo);
			if(strlen($seguir)>1)
			{
				$datos=explode(",",$seguir);
				if ($datos[2]===$usuario)
				{
					$siexiste=true;
					if (substr($datos[3],0,8)===$contraseña)
					{
						$correcto=true;
						break;
					}
					else
						break;
				}
			}
		}
		fclose($archivo);
	if (!$siexiste)
		echo '<script type="text/javascript">alert("Usuario no Existe");</script>';
	else
		if (!$correcto)
			echo '<script type="text/javascript">alert("Contraseña Incorrecta");</script>';
		else
		{
			echo "Acceso Correcto";
			session_start();
			$_SESSION['id_sesion']=session_id();
			$_SESSION['datos']=$datos;
			header('Location: principal.php');
		}
	?>	
</body>
</html>