

    <?php
    $nomeDaDisc = $_POST["nome"];
    $carga = (int) $_POST["ch"];
    $descricao = $_POST["descricao"];

    echo $nomeDaDisc . '<br>';
    echo $carga . '<br>';
    echo $descricao . '<br>';;




    include 'banco_disciplina.php';
    cadastrar_disciplina($nomeDaDisc, $carga, $descricao);
