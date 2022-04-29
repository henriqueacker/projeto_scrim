<?php
// Conex�o com banco de dados

$servername = 'localhost';
$username = "root";
$password = "";
$db_name = "lol";
$connect = mysqli_connect($servername, $username, $password, $db_name);
//mysqli_set_charset($connect, "utf9");

// Verificando se tem error ao conectar no BD
if (mysqli_connect_error()) :
    echo "Erro ao conectar ao banco de dados";
 endif;


//$servername = 'sql100.epizy.com';
//$username = "epiz_27552056";
//$password = "y7nmr7FdVraW";
//$db_name = "epiz_27552056_lol";
?>