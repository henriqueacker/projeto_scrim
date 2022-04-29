
<?php
// Sessão
session_start();
// Conexão
require_once 'conexaodb.php';
if (isset($_GET['id'])) :
    $status = "NAO CONFIRMADO";
    $id = mysqli_escape_string($connect, $_GET['id']);
  

    $sql = "UPDATE partidas SET  status = '$status' WHERE id= '$id'";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cancelado com sucesso";
        header('Location:../calendario.php');
    else :
    $_SESSION['mensagem'] = "Erro ao cancelar";
    header('Location:../calendario.php');
      
    endif;
endif;

?>
