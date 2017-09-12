<?php

class UsuarioView {

    function respostaAutenticacao($resposta) {

        /* Se a vari�vel $resposta estiver neste momento como TRUE, ent�o os dados est�o corretos e podemos
          exibir uma mensagem de sucesso. Caso contr�rio, ir� cair no else, que ir� alertar que os dados s�o inv�lidos. */
        if ($resposta) {
            echo 'Sucess';
        } else {
            echo 'Erro';
        }
    }

}

?>