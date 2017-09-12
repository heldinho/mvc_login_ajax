<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Linkando o arquivo de formatação do conteudo - layout.css -->
        <link href="css/layout.css" rel="stylesheet" type="text/css">
        <!-- Linkando a biblioteca javascript jQuery -->
        <script type="text/javascript" src="js/lib/jquery-1.4.2.js"></script>
        <!-- Linkando o arquivo que terá as funções javascript - functions.js -->
        <script type="text/javascript" src="js/functions.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a id="modal-form-login" href="#modal-container-form-login" role="button" class="btn" data-toggle="modal">Form Login</a>
                    <div class="modal fade modal-dialog alert alert-dismissable" id="modal-container-form-login" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="jumbotron well">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <form role="form" action="includes/controller/UsuarioController.php" method="post" name="frm_login">
                                <div class="form-group">
                                    <label for="login">
                                        Login:
                                    </label>
                                    <input type="email" class="form-control" name="login" id="login" />
                                </div>
                                <div class="form-group">
                                    <label for="senha">
                                        Senha:
                                    </label>
                                    <input type="password" class="form-control" name="senha" id="senha" />
                                </div>
                                <button type="button" class="btn btn-primary" name="btn_login" id="btn_login">
                                    Entrar
                                </button>
                            </form><!-- fim FORM -->
                        </div><!-- fim div JUMBOTRON WELL -->
                    </div><!-- fim div MODAL-CONTAINER-FORM-LOGIN -->
                </div><!-- fim div COL-MOD-12 -->
            </div><!-- fim div ROW -->
        </div><!-- fim div CONTAINER-FLUID -->

        <!-- alert informe-login (informe o login) -->
        <a style="display:none;" id="modal-informe-login" href="#modal-container-informe-login" role="button" class="btn" data-toggle="modal">informe login</a>
        <div class="modal fade" id="modal-container-informe-login" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- alert info (processando login) -->
                <div class="alert alert-dismissable alert-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center><h4>Alert!</h4>
                        <strong>Erro! informe o login.</strong></center>
                </div><!--FIM ALERT-INFO-->
            </div><!--FIM MODAL-DIALOG-->
        </div><!--FIM MODAL FADE-->

        <!-- alert informe-senha (informe a senha) -->
        <a style="display:none;" id="modal-informe-senha" href="#modal-container-informe-senha" role="button" class="btn" data-toggle="modal">informe senha</a>
        <div class="modal fade" id="modal-container-informe-senha" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- alert info (processando login) -->
                <div class="alert alert-dismissable alert-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center><h4>Alert!</h4>
                        <strong>Erro! informe a senha.</strong></center>
                </div><!--FIM ALERT-INFO-->
            </div><!--FIM MODAL-DIALOG-->
        </div><!--FIM MODAL FADE-->

        <!-- alert sucess (sucesso no login) -->
        <a style="display:none;" id="modal-sucess" href="#modal-container-sucess" role="button" class="btn" data-toggle="modal">sucesso</a>
        <div class="modal fade" id="modal-container-sucess" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- alert sucess (sucesso no login) -->
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center><h4>Alert!</h4>
                        <strong>Login efetuado com sucesso!</strong></center>
                </div><!--FIM ALERT-SUCCESS-->
            </div><!--FIM MODAL-DIALOG-->
        </div><!--FIM MODAL FADE-->

        <!-- alert danger (erro no login) -->
        <a style="display:none;" id="modal-danger" href="#modal-container-danger" role="button" class="btn" data-toggle="modal">erro</a>
        <div class="modal fade" id="modal-container-danger" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- alert danger (erro no login) -->
                <div class="alert alert-dismissable alert-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center><h4>Alert!</h4>
                        <strong>Erro ao efetuar o login. Dados incorretos!</strong></center>
                </div><!--FIM ALERT-DANGER-->
            </div><!--FIM MODAL-DIALOG-->
        </div><!--FIM MODAL FADE-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>