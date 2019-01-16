<?php
 
$login = $_POST['login'];
$senha = $_POST['senha'];

include "conect.php";

//Comando SQL de verificação de autenticação
$sql = "SELECT *
FROM usuario
WHERE login = '$login'
AND senha = '$senha'";
 
$resultado = mysql_query($sql,$con) or die ("Erro na seleção da tabela.");
 
$linha = mysql_fetch_object($resultado);

//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['nome'] = $linha->nome;

    header('location:index.php');
}
 
//Caso contrário redireciona para a página de autenticação
else {
    //Destrói
    session_destroy();
 
    //Limpa

    unset ($_SESSION['nome']);
   
 
    //Redireciona para a página de autenticação
    header('location:login.php');
     

}

?>
