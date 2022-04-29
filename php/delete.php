<?php

// Conex�o
require_once 'conexaodb.php';
//DELETE JOGADOR
if (isset($_POST['btn-deletarjogador'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM jogador WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Jogador deletado com sucesso";
        header('Location: ../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao deletar jogador!";
        header('Location: ../login.php');
    endif;
endif;
//DELETE TOP
if (isset($_POST['btn-deletartop'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM top WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida deletada com sucesso";
        header('Location: ../atualizarpartidatop.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar a partida";
        header('Location: ../atualizarpartidatop.php');
    endif;
endif;
//DELETE JG
if (isset($_POST['btn-deletarjg'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM jg WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida deletada com sucesso";
        header('Location: ../atualizarpartidajg.php');
    else :
        $_SESSION['mensagem'] = "Error ao deletar a partida";
        header('Location: ../atualizarpartidajg.php');
    endif;
endif;
//DELETE MID
if (isset($_POST['btn-deletarmid'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM estatistica WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida deletada com sucesso";
        header('Location: ../atualizarpartidamid.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar a partida";
        header('Location: ../atualizarpartidamid.php');

    endif;
endif;
//DELETE SUP
if (isset($_POST['btn-deletarsup'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM sup WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida deletada com sucesso";
        header('Location: ../atualizarpartidasup.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar a partida";
        header('Location: ../atualizarpartidasup.php');
    endif;
endif;
//DELETE ADC
if (isset($_POST['btn-deletaradc'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM adc WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida deletada com sucesso";
        header('Location: ../atualizarpartidaadc.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar a partida";
        header('Location: ../atualizarpartidaadc.php');
    endif;
endif;
//DELETE DATA
if (isset($_POST['btn-deletardata'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM partidas WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Data deletado com sucesso";
        header('Location: ../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao deletar data!";
        header('Location: ../login.php');
    endif;
endif;
//DELETE USER
if (isset($_POST['btn-deletaruser'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM usuario WHERE id ='$id'";
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Usuario deletado com sucesso";
        header('Location: ../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao deletar usuario!";
        header('Location: ../login.php');
    endif;
endif;

?>