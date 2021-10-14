<?php

function validaNome(string $nome): bool {
    if (empty($nome)) {
        setarMensagemErro("<p>O nome não pode ser vazio. Preencha-o corretamente.</p>");
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro("<p>O nome deve possuir 3 ou mais caracteres. Preencha-o corretamente.</p>");
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro("<p>O nome está muito extenso. Preencha-o corretamente.</p>");
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool {

    if (!is_numeric($idade)) {
        setarMensagemErro("<p>Informe os numeros para a idade.</p>");
        return false;
    } else {
        return true;
    }
}
