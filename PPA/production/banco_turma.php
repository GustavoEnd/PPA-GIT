<?php

function cadastrar_turma(
    $descricao,
    $serie,
    $id_curso,
    $turno,
    $ano_letivo
) {
    $conexao = conectar();

    $sql = 'INSERT INTO turma ( anoReferencia, serie, turno,descricaoTurma,id_curso) VALUES ( :ANO, :SERIE, :TURNO,:DESCRICAO,:ID_CURSO)';

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":ANO", $ano_letivo);
    $declaracao->bindParam(":SERIE", $serie);
    $declaracao->bindParam(":TURNO", $turno);
    $declaracao->bindParam(":DESCRICAO", $descricao);
    $declaracao->bindParam(":ID_CURSO", $id_curso);




    $declaracao->execute();

    header('Location:lista_disciplina.php');
}


function get_turmas()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM turma order by descricaoTurma");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
