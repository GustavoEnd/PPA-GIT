<?php


function get_turmas()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM turma order by descricaoTurma");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}


