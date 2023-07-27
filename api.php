<?php

require_once 'dao/AlunoDao.php';
$acao = $_GET['acao'];

$alunoDao = new AlunoDao();

if ($acao == "salvar") {
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $alunoDao->salvar($nome, $email);
} else if ($acao == "atualizar") {
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    $alunoDao->atualizar($nome, $email, $id);
} else if ($acao == "deletar") {
    $id = $_GET['id'];
    $alunoDao->deletar($id);
} else if ($acao == "listar") {
    $alunos = $alunoDao->listar();
    //print_r($alunos);
    echo json_encode($alunos);
}

//echo "Nome: " . $nome;
//echo "<br />Email: " . $email;

//exit;
