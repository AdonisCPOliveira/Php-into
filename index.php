<?php
include 'servicos/servicoMensagemSessao.php';
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
            $mensagemDeSucesso = obterMensagemSucesso();
            if (!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
            ?>
            <p>Seu nome: <input type="text" name="nome"></p>
            <p>Sua idade: <input type="text" name="idade"></p>
            <p><input type="submit" /></p>

            <?php
            $mensagemParticipante = isset($_SESSION['mensagem-participante']) ? $_SESSION['mensagem-participante'] : "";
            if (!empty($mensagemParticipante)) {
                echo $mensagemParticipante;
            } else {
                echo"";
            }
            ?>
        </form>

    </body>
</html>
