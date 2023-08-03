<?php
require_once 'dao/Conexao.php';

class AlunoDao
{

    public function salvar($nome, $email)
    {

        $sql = "INSERT INTO aluno (nome,email) VALUES (:nome, :email)";
        $conexao = Conexao::getConexao();

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }

    public function atualizar($nome, $email, $id)
    {

        $sql = "UPDATE aluno set nome=:nome, email=:email WHERE matricula=:matricula";
        $conexao = Conexao::getConexao();

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(":matricula", $id);
        $stmt->execute();
    }

    public function deletar($id)
    {
        $sql = "DELETE FROM aluno WHERE matricula=:matricula";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":matricula", $id);
        $stmt->execute();
    }

    public function listar()
    {
        $sql = "SELECT * FROM aluno";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $alunos;
    }

    //$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
