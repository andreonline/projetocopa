<?php
    $host = "localhost";
    $database = "testeaposta";
    $usuario = "root";
    $senha = "root";
    
    $conexao = mysql_connect($host, $usuario, $senha);
    
    mysql_select_db($database, $conexao) or die("Não foi possível conectar ao banco MySQL.");
    
    if (!$conexao){
        echo "Não foi possível conectar ao banco MySQL.";
        exit();
    }  

    mysql_set_charset("utf8");
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
