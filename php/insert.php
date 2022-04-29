
<?php
// Sess�o
session_start();
// Conex�o
require_once 'conexaodb.php';
//CADASTRO JOGADOR
if (isset($_POST['cadastrojogador'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $lane = mysqli_escape_string($connect, $_POST['lane']);
    $lane2 = mysqli_escape_string($connect, $_POST['lane2']);
    $sql = "INSERT INTO jogador(nick, lane,lanesegundaria) VALUES('$nick','$lane','$lane2')";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cadastro com sucesso";
        header('Location:../index.php');
    else :
        $_SESSION['mensagem'] = "Error ao cadastrar";
        header('Location:../index.php');
    endif;
endif;

//CADASTRO PARTIDA
if (isset($_POST['cadastropartida'])) :
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
    $kda = ($abates + $assist) / $mortes;
    $vitoria_porcentagem = $vitoria/$jogos*100;
    if ($status == 'on') {
        $status = "INATIVO";
    } else {
        $status = "ATIVO";
    }
    if ($lane == 'TOP') {
        $sql = "INSERT INTO top(nick,posicao,vitoria,vitoria_porcentagem,jogos,particicao_de_abates,farm, controle_visao, sentinelas_compradas,dano,abates,mortes,assist,KDA,ultima_scrim,status) VALUES('$nick','$lane','$vitoria','$vitoria_porcentagem','$jogos','$particicao_de_abates','$farm','$controle_visao','$sentinelas_compradas','$dano','$abates','$mortes','$assist','$kda','$ultscrim','$status')";
    } else if ($lane == 'JG') {
        $sql = "INSERT INTO jg(nick,posicao,vitoria,vitoria_porcentagem,jogos,particicao_de_abates,farm, controle_visao, sentinelas_compradas,dano,abates,mortes,assist,KDA,ultima_scrim,status) VALUES('$nick','$lane','$vitoria','$vitoria_porcentagem','$jogos','$particicao_de_abates','$farm','$controle_visao','$sentinelas_compradas','$dano','$abates','$mortes','$assist','$kda','$ultscrim','$status')";
    } else if ($lane == 'SUP') {
        $sql = "INSERT INTO sup(nick,posicao,vitoria,vitoria_porcentagem,jogos,particicao_de_abates,farm, controle_visao, sentinelas_compradas,dano,abates,mortes,assist,KDA,ultima_scrim,status) VALUES('$nick','$lane','$vitoria','$vitoria_porcentagem','$jogos','$particicao_de_abates','$farm','$controle_visao','$sentinelas_compradas','$dano','$abates','$mortes','$assist','$kda','$ultscrim','$status')";
    } else if ($lane == 'ADC') {
        $sql = "INSERT INTO adc(nick,posicao,vitoria,vitoria_porcentagem,jogos,particicao_de_abates,farm, controle_visao, sentinelas_compradas,dano,abates,mortes,assist,KDA,ultima_scrim,status) VALUES('$nick','$lane','$vitoria','$vitoria_porcentagem','$jogos','$particicao_de_abates','$farm','$controle_visao','$sentinelas_compradas','$dano','$abates','$mortes','$assist','$kda','$ultscrim','$status')";
    } else {
        $sql = "INSERT INTO estatistica(nick,posicao,vitoria,vitoria_porcentagem,jogos,particicao_de_abates,farm, controle_visao, sentinelas_compradas,dano,abates,mortes,assist,KDA,ultima_scrim,status) VALUES('$nick','$lane','$vitoria','$vitoria_porcentagem','$jogos','$particicao_de_abates','$farm','$controle_visao','$sentinelas_compradas','$dano','$abates','$mortes','$assist','$kda','$ultscrim','$status')";
    }
    ?>


<?php
    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Partida cadastrada com sucesso";
        header('Location:../login.php');
    else :
        $_SESSION['mensagem'] = "Erro ao cadastrar a partida!";
        header('Location:../login.php');
    endif;
endif;

// CADASTRO USUARIO
if (isset($_POST['cadastrouser'])) :
    $nick = mysqli_escape_string($connect, $_POST['nick']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $senha = md5($senha);
    $sql = "INSERT INTO usuario (email, senha,nick) VALUES('$email','$senha', '$nick')";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cadastro com sucesso";
        header('Location:../login.php');
    else :
        $_SESSION['mensagem'] = "Error ao cadastrar";
        header('Location:../login.php');
    endif;
endif;

//CADASTRAR DATA
if (isset($_POST['cadastrodata'])) :
    $data = mysqli_escape_string($connect,$_POST['data']);
    $hora = mysqli_escape_string($connect,$_POST['hora']);
  

    $sql = "INSERT INTO partidas(data, hora) VALUES('$data','$hora')";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cadastro com sucesso";
        header('Location:../login.php');
    else :
    $_SESSION['mensagem'] = "Erro ao cadastrar";
    header('Location:../login.php');
      
    endif;
endif;

if (isset($_POST['cadastrotimea'])) :
    $jogadores = mysqli_escape_string($connect,$_POST['nick']);
    $sql = "INSERT INTO timea(jogadores) VALUES('$jogadores')";

    // Verificando se foi cadastrado com sucesso
    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cadastro com sucesso";
        header('Location:../login.php');
    else :
    $_SESSION['mensagem'] = "Erro ao cadastrar";
    header('Location:../login.php');
      
    endif;
endif;
?>
