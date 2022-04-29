<?php
         session_start();
require_once 'conexaodb.php';

if (isset($_POST['logar'])) :
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
  
        $sql = "SELECT email FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($connect,$sql);

    if(mysqli_num_rows($resultado)>0):
        //$senha = md5($senha);
        $sql = "SELECT * FROM usuario WHERE email='$email' and senha ='$senha'";
        $resultado = mysqli_query($connect,$sql);
        if(mysqli_num_rows($resultado)==1):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
   
            $_SESSION['email'] = $dados['email'];
            $_SESSION['logado'] = true;
            $_SESSION['mensagem'] = "Logado";
            header('Location: ../login.php');
        else:
            $_SESSION['mensagem'] = "Usuario/Senha inválidos";
            header('Location: ../login.php');
        endif;
    else:
        $_SESSION['mensagem'] = "Usuario inexistente!";
        header('Location:../login.php');
    endif;   
endif;
if (isset($_POST['logout'])) :
session_unset();
session_destroy();
header('Location: ../login.php');
endif;
?>
