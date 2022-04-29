
<?php
// Sessão
session_start();
// Conexão
require_once 'conexaodb.php';
if (isset($_GET['id'])) :
    $status = "CONFIRMADO";
    $id = mysqli_escape_string($connect, $_GET['id']);
  

    $sql = "UPDATE partidas SET  status = '$status' WHERE id= '$id'";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Confirmado com sucesso";
        header('Location:../calendario.php');
    else :
    $_SESSION['mensagem'] = "Erro ao Confirmar";
    header('Location:../calendario.php');
      
    endif;
endif;

?>
