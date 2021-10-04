<?php

session_start();

$categorias = [];
$categorias[0] = "infantil";
$categorias[1] = "adolescente";
$categorias[2] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = "<p>O nome não pode ser vazio. Preencha-o corretamente.</p>";
    header("location: index.php");
    
}
 else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = "<p>O nome deve possuir 3 ou mais caracteres. Preencha-o corretamente.</p>";
    header("location: index.php");
    
}else if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = "<p>O nome está muito extenso. Preencha-o corretamente.</p>";
    header("location: index.php");
    
}else{
    $_SESSION['mensagem-de-erro'] = "";
    
}
    
    
    
if (!is_numeric($idade)) {
    $_SESSION['erro-idade'] = "<p>Informe os numeros para a idade.</p>";
    header("location: index.php");
    
}else{
    $_SESSION['erro-idade'] = "";
    
}

if ($idade < 6 || $idade > 99) {
    $_SESSION['erro-idade'] = "<p>Os participantes devem possuir entre 6 e 99 anos.</p>";
    header("location: index.php");

}
    
    if ($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "infantil") {
                $_SESSION['mensagem-participante'] = "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
                header("location: index.php");
            }
        }
    } else if ($idade >= 13 && $idade <= 18) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "adolescente") {
                $_SESSION['mensagem-participante'] = "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
                header("location: index.php");
            }
        }
    } else if ($idade > 18 && $idade <= 99) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "adulto") {
                $_SESSION['mensagem-participante'] = "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
                header("location: index.php");
            }
        }
    }
