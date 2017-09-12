<?php

$LHost = "localhost";
$Username = "root";
$Password = "";
$DBase = "loginajax";

$Mysql_Conexao = mysql_connect($LHost, $Username, $Password);
mysql_select_db($DBase, $Mysql_Conexao);
