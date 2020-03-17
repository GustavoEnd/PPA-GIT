

    <?php
    $nomeDaDisc = $_POST["nome"];
    $carga = (int) $_POST["ch"];
    $descricao = $_POST["descricao"];

    include 'banco_disciplina.php';
    cadastrar_disciplina($nomeDaDisc, $carga, $descricao);
