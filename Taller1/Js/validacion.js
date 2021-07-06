// JavaScript Document
function validacion()
{
	valor0=document.getElementById("nombres").value;
	valor1=document.getElementById("apellidos").value;
	if (valor0==null || valor0.length==0)
		{
			alert('Error el nombre no debe estar vacio');
			document.getElementById("nombres").style.border='2px solid red';
			document.getElementById("nombres").focus();
			return false;
		}
		else if (valor1==null || valor1.length==0)
			{
			alert('Error el apellido no debe estar vacio');
			document.getElementById("apellidos").style.border='2px solid red';
			document.getElementById("apellidos").focus();
			return false;
			}
	return true;
}

function solono(element)
{
	valor2=element.value;
	if (valor2 != null && valor2.length !=0)
		{
			element.style.border='2px solid green';
			return true;
		}
	else
		{
			element.style.border='2px solid red';
			return false;
		}	
}

function comparar()
{
	var valido=true;
	var formulario=document.forms;
	for (var c=0; c<formulario.length;c++)
	{
		for (var d=0; d<formulario[c].elements.length; d++)
		{
			valor=formulario[c].elements[d].value;
			if (valor==null || valor.length==0)
				{
					alert('ERROR '+ formulario[c].elements[d].name +' no puede estar vacio')
					formulario[c].elements[d].style.border='2px solid red';
					formulario[c].elements[d].focus();
					valido=false;
					break;
				}
		}
	}
	return valido;
}