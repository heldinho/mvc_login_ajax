<?php

//Como iremos usar nesta classe o que foi setado para a classe Bean, � necess�rio importar a classe Bean aqui.
require_once("../model/bean/Usuario.class.php");
require_once("ConexaoDao.class.php");

class UsuarioDAO {

    function autenticaUsuario($usuario) {

        /*
          Aqui � o local onde dever� ser feita a valida��o dos dados em algum banco de dados.
          Seja ele um arquivo XML, um SGBD como o MySQL, SQLServer, Oracle, etc...

          Ap�s feita a verifica��o, este m�todo dever� retornar uma resposta baseada no resultado da consulta feita.

          Vamos fazer apenas um teste com dados est�ticos, mas vale lembrar que em um sistema comum, o correto � ter um banco de dados,
          e a verifica��o ser feita dinamicamente no mesmo.

          N�o abordaremos aqui como faz pra consultar um banco de dados ou algo do tipo, pois material sobre isso h� de sobra na web.

          Vamos ent�o apenas testar os dados e retornar uma resposta � controller, que requisitar� a View para exib�-la em tela ao usu�rio.

         */

        /*
          Se os dados estiverem corretos, retornar� TRUE... Pois com isso, na classe View poderemos exibir a mensagem que quisermos, no formato que for melhor.
          Est� aqui a grande sacada de usar o Padr�o MVC...
          Se quis�ssemos que a view gerasse o c�digo para um celular, ou um sistema desktop, simplesmente trocar�amos na Controller a view que ela estaria chamando.

          if($usuario->getLogin() == 'admin' && $usuario->getSenha() == '123'){
          return true;
          }
          else{
          return false;
          }
         */
        $login = $usuario->getLogin();
        $senha = $usuario->getSenha();

        $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica) <= 0) {
            return false;
            //echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        } else {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["user_login"] = $login;
            $_SESSION["user_senha"] = $senha;
            return true;
            //setcookie("login",$login);
            //header("Location:index.php");
        }
    }

}
