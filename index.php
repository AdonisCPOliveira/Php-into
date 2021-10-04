<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8" />
        <title>title</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>
    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="script.php" method="post">
            <?php
            $mensagemDeErroNome = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']:"";
            $mensagemDeErroIdade = isset($_SESSION['erro-idade']) ? $_SESSION['erro-idade']:"";
            if(!empty($mensagemDeErroNome)){
                echo $mensagemDeErroNome;
            }else{
                echo"";
            }
            if(!empty($mensagemDeErroIdade)){
                echo $mensagemDeErroIdade;
            }else{
                echo"";
            }
            ?>
            <p>Seu nome: <input type="text" name="nome"></p>
            <p>Sua idade: <input type="text" name="idade"></p>
            <p><input type="submit" /></p>
            
            <?php
            $mensagemParticipante= isset($_SESSION['mensagem-participante']) ? $_SESSION['mensagem-participante'] : "";
            if(!empty($mensagemParticipante)){
                echo $mensagemParticipante;
            }else{
                echo"";
            }
            ?>
        </form>

    </body>
</html>
