<?php
class Conexao
{
    public static function getConexao(){

        $banco = "sis_aluno";
        $usuario = "root";
        $senha = "";
        $conexao = new PDO("mysql:host=localhost;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}
