<?php

function defineCategoriaCompetidor(string $nome, string $idade) {

    $categorias = [];
    $categorias[0] = "infantil";
    $categorias[1] = "adolescente";
    $categorias[2] = "adulto";

    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "infantil") {
                    setarMensagemSucesso("<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>");
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "adolescente") {
                    setarMensagemSucesso("<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>");
                }
            }
        } else if ($idade > 18 && $idade <= 99) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "adulto") {
                    setarMensagemSucesso("<p>O nadador " . $nome . " compete na categoria " . $categorias[$i] . "!</p>");
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
