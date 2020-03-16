<?php

include 'banco.php';
function cadastrar_professor($nome, $email, $matricula)
{

    $conexao = conectar();

    $sql = "INSERT INTO professor (nome, email, matricula) VALUES (:NOME,:EMAIL,:MATRICULA)";
    try {
        $declaracao = $conexao->prepare($sql);

        $declaracao->bindParam(":NOME", $nome);
        $declaracao->bindParam(":EMAIL", $email);
        $declaracao->bindParam(":MATRICULA", $matricula);
        $declaracao->execute();
        header('Location:lista_professor.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function get_professores()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM professor order by nome");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}


