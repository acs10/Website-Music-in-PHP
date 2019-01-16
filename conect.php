<?php
$host = "localhost";
$db   = "aula";
$user = "root";
$pass = "pegueopapagaio"; // pegueopapagaio

$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
?>




