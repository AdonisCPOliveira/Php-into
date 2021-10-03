<?php

$categorias = [];
$categorias[0] = "infantil";
$categorias[1] = "adolescente";
$categorias[2] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (empty($nome)) {
    echo "<p>O nome não pode ser vazio</p>";
    return;
}

if (strlen($nome) < 3) {
    echo "<p>O nome deve conter 3 ou mais caracteres</p>";
    return;
}

if (strlen($nome) > 40) {
    echo "<p>O nome é muito extenso</p>";
    return;
}

if (!is_numeric($idade)) {
    echo "Informe numeros para Idade";
    return;
}

if ($idade < 6 || $idade > 99) {
    echo "<p>O participante entre 6 e 99 anos</p>";
    return;
} else {
    if ($idade >= 6 && $idade <= 12) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "infantil") {
                echo "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
            }
        }
    } else if ($idade >= 13 && $idade <= 18) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "adolescente") {
                echo "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
            }
        }
    } else if ($idade > 18 && $idade <= 99) {
        for ($i = 0; $i < count($categorias); $i++) {
            if ($categorias[$i] == "adulto") {
                echo "<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>";
            }
        }
    }
}