<?php

include 'banco.php';


function cadastrar_disciplina($nomeDaDisc, $carga, $descricao)
{   
    $conexao = conectar();

    $sql = "INSERT INTO disciplina (nome, descricaoDisciplina, ch) VALUES (:NOME,:DESCR,:CH)";

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":NOME", $nomeDaDisc);
    $declaracao->bindParam(":DESCR", $carga);
    $declaracao->bindParam(":CH", $descricao);


    $declaracao->execute();

    header('Location:formdisciplina.html');
}

function atualizar_disciplina($id_disc, $nomeDaDisc, $nomeDaProf, $descricao)
{
    $conn = conectar();

    $sql = "UPDATE disciplina SET nomeDaDisc = :NOMEDADISC, nomeDaProf = :NOMEDAPROF, descricao = :DESCRICAO WHERE id_disc = :ID_DISC";

    $declaracao = $conn->prepare($sql);
    $declaracao->bindParam(":ID_DISC", $id_disc);
    $declaracao->bindParam(":NOMEDADISC", $nomeDaDisc);
    $declaracao->bindParam(":NOMEDAPROF", $nomeDaProf);
    $declaracao->bindParam(":DESCRICAO", $descricao);


    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:index_disciplina.php');
    }
}

function get_disciplinas()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM disciplina order by nomeDaDisc");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}



function get_disciplina($id_disc)
{
    $conexao = conectar();

    $declaracao = $conexao->prepare("SELECT * FROM disciplina where id_disc = :ID_DISC");

    $declaracao->bindParam(":ID_DISC", $id_disc);

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function excluir_disciplina($id_disc)
{

    $conexao = conectar();

    $declaracao = $conexao->prepare("DELETE FROM disciplina WHERE id_disc = :ID_DISC");
    $declaracao->bindParam(":ID_DISC", $id_disc);

    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:index_disciplina.php');
    } else {
        echo "Erro ao deletar disciplina";
    }
}
