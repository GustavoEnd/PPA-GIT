<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $id_turma = 1;
    $id_curso = 1;
    $ano_letivo = $_POST["ano_letivo"];
    $telefone = $_POST["telefone"];
    $num_matricula = $_POST["num_matricula"];

    /*
    if($id_curso === 'informatica'){
        $id_curso = 1;
    }else if($id_curso === 'alimentos'){
        $id_curso = 2;
    }else{
        $id_curso = 3;
    }
    */

    include 'banco_aluno.php';    
    cadastrar_aluno($nome, $email, $id_turma,$id_curso, $ano_letivo, $sexo, $telefone, $num_matricula);
