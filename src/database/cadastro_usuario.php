<?php
    include 'mysql_conect.php';
  	$nome = $_POST['nome'];
  	$senha = $_POST['senha'];
  	$email = $_POST['email'];
    $sql = mysql_query("insert into pessoa (nome, senha, email) values(".
                    $_POST['nome'].",".$_POST['senha'].",".$_POST['email'].")");
	

?>