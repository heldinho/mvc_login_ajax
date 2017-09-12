<?php

//Aqui importamos todas as classes que poder�o ser usadas baseado nas solicita��es que forem feitas.
require("../model/bean/Usuario.class.php"); // Classe Bean
require("../model/dao/UsuarioDAO.class.php"); // Classe DAO
//require_once("../model/dao/ConexaoDAO.class.php"); // Classe DAO
require("../view/UsuarioView.class.php"); //Classe View
//Armazena na vari�vel $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
$acao = $_REQUEST["acao"];

//Baseado no que foi solicitado, chama na classe DAO o m�todo respons�vel por tal tarefa, e depois manda pra View a resposta, para ser exibida de alguma forma ao usu�rio
switch ($acao) {

    case 'autenticar': {

            // Se for autenticar, ent�o dever�o ser informados login e senha.
            //Primeiro instanciamos um objeto da classe Bean, para setar os valores informados no formul�rio
            $usuario = new Usuario();

            /* Agora setamos para a Bean os valores informados,pois ser�o validados na camada DAO, que
              ir� verificar a consistencia dos dados em um Banco de Dados: MySQL, XML, ou qualquer outra base de dados; e depois retornar para a controller o resultado. */
            $usuario->setLogin($_REQUEST["login"]);
            $usuario->setSenha($_REQUEST["senha"]);

            /* Agora vamos instanciar um objeto da classe DAO e um da View, e passaremos para a View o que for retornado pela DAO */
            $usuarioDAO = new UsuarioDAO();
            $usuarioView = new UsuarioView();

            //Passaremos para o m�todo de autentica��o da DAO um objeto da classe Usu�rio. Armazenaremos na vari�vel $resultado o que este m�todo retornar.
            $resultado = $usuarioDAO->autenticaUsuario($usuario);

            //Agora chamamos um m�todo da View passando para o mesmo o que foi retornado pela DAO.
            $usuarioView->respostaAutenticacao($resultado);
        }
        break;

    case 'cadastrar': {
            //Aqui faz as valida��es necess�rias e requisita o m�todo da classe DAO respons�vel por cadastrar o usu�rio.
        }

    case 'excluir': {
            //Aqui faz as valida��es necess�rias e requisita o m�todo da classe DAO respons�vel por excluir o usu�rio.
        }

    default:
        return null; //Por padr�o, esse switch n�o retorna nada.
}