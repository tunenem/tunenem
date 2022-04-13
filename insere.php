<?php

$con = mysqli_connect('localhost', 'root', '','form');

$Nome = $_POST['nome'];
$CPF = $_POST['cpf'];
$Email = $_POST['email'];
$Nascimento = $_POST['nascimento'];
$L_nascimento = $_POST['localNasc'];
$Profissao = $_POST['profissao'];
$RG = $_POST['rg'];
$Cargo = $_POST['cargo'];
$Registro = $_POST['registro'];
$Formacao = $_POST['formacao'];
$CEP = $_POST['cep'];
$Endereco = $_POST['endereco'];
$Numero = $_POST['numero'];
$Bairro = $_POST['bairro'];
$Cidade = $_POST['cidade'];
$UF = $_POST['uf'];
$Telefone = $_POST['telefone'];
$Celular = $_POST['celular'];
$Funcao = $_POST['funcao'];
$Site = $_POST['website'];

$sql = "INSERT INTO `formulario` (`BAIRRO`,`CARGO`,`CELULAR`,`CEP`,`CIDADE`,`CPF`,`D_NASCIMENTO`,`EMAIL`,`ENDERECO`,`ESTADO`,`FORMACAO`,`FUNCAO`,`L_NASCIMENTO`,`NOME`,`N_ENDERECO`,`PROFISSAO`,`REGISTRO`,`RG`,`TELEFONE`,`WEBSITE`) VALUES ('$Bairro','$Cargo','$Celular','$CEP','$Cidade','$CPF','$Nascimento','$Email','$Endereco','$UF','$Formacao','$Funcao','$L_nascimento','$Nome','$Numero','$Profissao','$Registro','$RG','$Telefone','$Site');";

header('Location: http://localhost/FORMULARIO/index.html'.$newURL);

$rs = mysqli_query($con,$sql);

?>