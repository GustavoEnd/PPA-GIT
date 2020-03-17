
    <?php

    $descricao = $_POST["descricao"];
    $serie = $_POST["serie"];
    $id_curso = $_POST["id_curso"];
    $turno = $_POST["turno"];
    $ano_letivo = $_POST["ano_letivo"];

    include 'banco_turma.php';
    cadastrar_turma(
        $descricao,
        $serie,
        $id_curso,
        $turno,
        $ano_letivo
    );
