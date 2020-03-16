<?php

function get_cursos()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM curso order by descricaoCurso");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
