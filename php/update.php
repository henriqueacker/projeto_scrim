<?php
// Sess�o
session_start();
// Conex�o
require_once 'conexaodb.php';

//ATUALIZAR JOGADOR
if (isset($_POST['atualizarjogador'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $lane2 = mysqli_escape_string($connect, $_POST['lane2']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE jogador SET nick = '$nick', lane = '$lane', lanesegundaria = '$lane2' WHERE id= '$id'";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Jogador alterado com sucesso";
        header('Location:../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao alterar jogador";
        header('Location:../login.php');
    endif;
endif;

//ATUALIZAR PARTIDA TOP
if (isset($_POST['atualizarpartidatop'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $vitoria = mysqli_escape_string($connect, $_POST['vitoria']);
    $particicao_de_abates = mysqli_escape_string($connect, $_POST['particicao_de_abates']);
    $jogos = mysqli_escape_string($connect, $_POST['jogos']);
    $farm = mysqli_escape_string($connect, $_POST['farm']);
    $controle_visao = mysqli_escape_string($connect, $_POST['controle_visao']);
    $sentinelas_compradas = mysqli_escape_string($connect, $_POST['sentinelas_compradas']);
    $dano = mysqli_escape_string($connect, $_POST['dano']);
    $abates = mysqli_escape_string($connect, $_POST['abates']);
    $mortes = mysqli_escape_string($connect, $_POST['mortes']);
    $assist = mysqli_escape_string($connect, $_POST['assist']);
    // $kda = mysqli_escape_string($connect,$_POST['kda']);
    $ultscrim = mysqli_escape_string($connect, $_POST['ultscrim']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
    if ($status == 'on') {

        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    $sql = "UPDATE top SET nick = '$nick', posicao = '$lane', vitoria = '$vitoria',vitoria_porcentagem ='$vitoria_porcentagem', particicao_de_abates = '$particicao_de_abates', jogos='$jogos',farm = '$farm', controle_visao = '$controle_visao', sentinelas_compradas = $sentinelas_compradas, dano = '$dano', abates='$abates', mortes ='$mortes', assist = '$assist', KDA = '$kda',ultima_scrim ='$ultscrim', status = '$status' WHERE id= '$id'";

    ?>
   <?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida alterada com sucesso";
        header('Location: ../atualizarpartidatop.php');
    else :
        $_SESSION['mensagem'] = "Erro ao alterar partida";
        header('Location: ../atualizarpartidatop.php');
    endif;
endif;

//ATUALIZAR PARTIDA JG
if (isset($_POST['atualizarpartidajg'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $vitoria = mysqli_escape_string($connect, $_POST['vitoria']);
    $particicao_de_abates = mysqli_escape_string($connect, $_POST['particicao_de_abates']);
    $jogos = mysqli_escape_string($connect, $_POST['jogos']);
    $farm = mysqli_escape_string($connect, $_POST['farm']);
    $controle_visao = mysqli_escape_string($connect, $_POST['controle_visao']);
    $sentinelas_compradas = mysqli_escape_string($connect, $_POST['sentinelas_compradas']);
    $dano = mysqli_escape_string($connect, $_POST['dano']);
    $abates = mysqli_escape_string($connect, $_POST['abates']);
    $mortes = mysqli_escape_string($connect, $_POST['mortes']);
    $assist = mysqli_escape_string($connect, $_POST['assist']);
    // $kda = mysqli_escape_string($connect,$_POST['kda']);
    $ultscrim = mysqli_escape_string($connect, $_POST['ultscrim']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
    if ($status == 'on') {
        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    $sql = "UPDATE jg SET nick = '$nick', posicao = '$lane', vitoria = '$vitoria',vitoria_porcentagem ='$vitoria_porcentagem', particicao_de_abates = '$particicao_de_abates', jogos='$jogos',farm = '$farm', controle_visao = '$controle_visao', sentinelas_compradas = $sentinelas_compradas, dano = '$dano', abates='$abates', mortes ='$mortes', assist = '$assist', KDA = '$kda',ultima_scrim ='$ultscrim', status = '$status' WHERE id= '$id'";

    ?>
   <?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida alterada com sucesso";
        header('Location: ../atualizarpartidajg.php');
    else :
        $_SESSION['mensagem'] = "Erro ao alterar partida";
        header('Location: ../atualizarpartidajg.php');
    endif;
endif;

//ATUALIZAR PARTIDA MID
if (isset($_POST['atualizarpartidamid'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $vitoria = mysqli_escape_string($connect, $_POST['vitoria']);
    $particicao_de_abates = mysqli_escape_string($connect, $_POST['particicao_de_abates']);
    $jogos = mysqli_escape_string($connect, $_POST['jogos']);
    $farm = mysqli_escape_string($connect, $_POST['farm']);
    $controle_visao = mysqli_escape_string($connect, $_POST['controle_visao']);
    $sentinelas_compradas = mysqli_escape_string($connect, $_POST['sentinelas_compradas']);
    $dano = mysqli_escape_string($connect, $_POST['dano']);
    $abates = mysqli_escape_string($connect, $_POST['abates']);
    $mortes = mysqli_escape_string($connect, $_POST['mortes']);
    $assist = mysqli_escape_string($connect, $_POST['assist']);
    // $kda = mysqli_escape_string($connect,$_POST['kda']);
    $ultscrim = mysqli_escape_string($connect, $_POST['ultscrim']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
    if ($status == 'on') {
        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    $sql = "UPDATE estatistica SET nick = '$nick', posicao = '$lane', vitoria = '$vitoria',vitoria_porcentagem ='$vitoria_porcentagem', particicao_de_abates = '$particicao_de_abates', jogos='$jogos',farm = '$farm', controle_visao = '$controle_visao', sentinelas_compradas = $sentinelas_compradas, dano = '$dano', abates='$abates', mortes ='$mortes', assist = '$assist', KDA = '$kda',ultima_scrim ='$ultscrim', status = '$status' WHERE id= '$id'";

    ?>
     <?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida alterada com sucesso";
        header('Location: ../atualizarpartidamid.php');
    else :
        $_SESSION['mensagem'] = "Erro ao alterar partida";
        header('Location: ../atualizarpartidamid.php');
    endif;
endif;

//ATUALIZAR PARTIDA SUPORTE
if (isset($_POST['atualizarpartidasup'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $vitoria = mysqli_escape_string($connect, $_POST['vitoria']);
    $particicao_de_abates = mysqli_escape_string($connect, $_POST['particicao_de_abates']);
    $jogos = mysqli_escape_string($connect, $_POST['jogos']);
    $farm = mysqli_escape_string($connect, $_POST['farm']);
    $controle_visao = mysqli_escape_string($connect, $_POST['controle_visao']);
    $sentinelas_compradas = mysqli_escape_string($connect, $_POST['sentinelas_compradas']);
    $dano = mysqli_escape_string($connect, $_POST['dano']);
    $abates = mysqli_escape_string($connect, $_POST['abates']);
    $mortes = mysqli_escape_string($connect, $_POST['mortes']);
    $assist = mysqli_escape_string($connect, $_POST['assist']);
    // $kda = mysqli_escape_string($connect,$_POST['kda']);
    $ultscrim = mysqli_escape_string($connect, $_POST['ultscrim']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
    if ($status == 'on') {
        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    $sql = "UPDATE sup SET nick = '$nick', posicao = '$lane', vitoria = '$vitoria',vitoria_porcentagem ='$vitoria_porcentagem', particicao_de_abates = '$particicao_de_abates', jogos='$jogos',farm = '$farm', controle_visao = '$controle_visao', sentinelas_compradas = $sentinelas_compradas, dano = '$dano', abates='$abates', mortes ='$mortes', assist = '$assist', KDA = '$kda',ultima_scrim ='$ultscrim', status = '$status' WHERE id= '$id'";

    ?>
   <?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida alterada com sucesso";
        header('Location: ../atualizarpartidasup.php');
    else :
        $_SESSION['mensagem'] = "Erro ao alterar partida";
        header('Location: ../atualizarpartidasup.php');
    endif;
endif;

//ATUALIZAR PARTIDA ADC
if (isset($_POST['atualizarpartidaadc'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $vitoria = mysqli_escape_string($connect, $_POST['vitoria']);
    $particicao_de_abates = mysqli_escape_string($connect, $_POST['particicao_de_abates']);
    $jogos = mysqli_escape_string($connect, $_POST['jogos']);
    $farm = mysqli_escape_string($connect, $_POST['farm']);
    $controle_visao = mysqli_escape_string($connect, $_POST['controle_visao']);
    $sentinelas_compradas = mysqli_escape_string($connect, $_POST['sentinelas_compradas']);
    $dano = mysqli_escape_string($connect, $_POST['dano']);
    $abates = mysqli_escape_string($connect, $_POST['abates']);
    $mortes = mysqli_escape_string($connect, $_POST['mortes']);
    $assist = mysqli_escape_string($connect, $_POST['assist']);
    // $kda = mysqli_escape_string($connect,$_POST['kda']);
    $ultscrim = mysqli_escape_string($connect, $_POST['ultscrim']);
    $status = mysqli_escape_string($connect, $_POST['status']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
 
    if ($status == 'on') {
        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    $sql = "UPDATE adc SET nick = '$nick', posicao = '$lane', vitoria = '$vitoria',vitoria_porcentagem ='$vitoria_porcentagem', particicao_de_abates = '$particicao_de_abates', jogos='$jogos',farm = '$farm', controle_visao = '$controle_visao', sentinelas_compradas = $sentinelas_compradas, dano = '$dano', abates='$abates', mortes ='$mortes', assist = '$assist', KDA = '$kda',ultima_scrim ='$ultscrim', status = '$status' WHERE id= '$id'";

    ?>
    <?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida alterada com sucesso";
        header('Location: ../atualizarpartidaadc.php');
    else :
        $_SESSION['mensagem'] = "Erro ao alterar partida";
        header('Location: ../atualizarpartidaadc.php');
    endif;
endif;

//ATUALIZAR USUARIO
if (isset($_POST['atualizaruser'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE usuario SET email= '$email', senha = '$senha', nick = '$nick' WHERE id= '$id'";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Alterado com sucesso";
        header('Location:../index.php');
    else :
        $_SESSION['mensagem'] = "Error ao alterar";
        header('Location:../index.php');
    endif;
endif;

//ATUALIZAR DATA
if (isset($_POST['atualizardata'])) :
    $data = mysqli_escape_string($connect, $_POST['data']);
    $hora = mysqli_escape_string($connect, $_POST['hora']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE partidas SET data = '$data', hora = '$hora' WHERE id= '$id'";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Data alterada com sucesso";
        header('Location:../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao alterar data";
        header('Location:../login.php');
    endif;
endif;

?>