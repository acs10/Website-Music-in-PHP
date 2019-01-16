<?php
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
 


include "conect.php";
 

$query = "INSERT INTO usuario (nome,login,senha) VALUES ('".$nome."', '".$login."', '".$senha."')"; 

if(mysql_query($query, $con)) //ve se da falha ao cadastrar os login
{
	echo "<script> location='login.php'; </script>";
}
else
{
	echo "<script>alert('Falha ao Realizar cadastro'); 
	window.history.back();
	</script>"; //aparece se cadastro direito 
}

 
?> 
