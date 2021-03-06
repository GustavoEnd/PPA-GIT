<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 5px;
        }

        td,
        th {
            border: 1px solid #4682B4;
            text-align: left;
            padding: 5px;
        }

        tr:nth-child(even) {
            background-color: #4682B4;
        }

        body {
            margin-top: 50px;
            margin-bottom: 100px;
            margin-right: 150px;
            margin-left: 80px;

        }

        .btnExcluir:link,
        .btnExcluir:visited {
            background-color: #f44336;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .btnEditar:link,
        .btnEditar:visited {
            background-color: #FFA500;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .btnExcluir:hover,
        .btnExcluir:active {
            background-color: red;
            border-radius: 5px;
        }

        .btnEditar:hover,
        .btnEditar:active {
            background-color: #FF4500;
            border-radius: 5px;
        }

        .linkNovo {
            margin-top: 10px;
        }

        .linkNovo:link,
        .linkNovo:visited {
            background-color: #6495ED;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;

        }

        .linkNovo:hover,
        .linkNovo:active {
            background-color: #4169E1;
            border-radius: 5px;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            text-align: center;
            background-color: #4682B4;
            border-radius: 5px;
        }
    </style>
</head>

<body>

      <h2>Projetos Cadastrado (PPA)</h2>

        <div>


            <table>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Tema</th>
                    <th>Questão-Problema</th>
                    <th>Justificativa</th>
                    <th>Objetivo Geral</th>
                    <th>Objetivos Específicos</th>
                    <th>Carga Horária</th>
                    <th>Atividades</th>
                    <th>Avaliação do Projeto</th>
                    <th>Produto Final</th>

                    <th colspan='2'>Ações</th>
                </tr>
                <?php
                include 'banco_proj.php';
                $result = get_projetos();
                foreach($result as $linha){
                    echo '<tr>';
                    echo '<td>'.$linha["id_projeto"].'</td>';
                    echo '<td>'.$linha["titulo"].'</td>';
                    echo '<td>'.$linha["tema"].'</td>';
                    echo '<td>'.$linha["problema"].'</td>';
                    echo '<td>'.$linha["justificativa"].'</td>';
                    echo '<td>'.$linha["objetivogeral"].'</td>';
                    echo '<td>'.$linha["objetivosespecificos"].'</td>';
                    echo '<td>'.$linha["horarias"].'</td>';
                    echo '<td>'.$linha["atividades"].'</td>';
                    echo '<td>'.$linha["projeto"].'</td>';
                    echo '<td>'.$linha["produto"].'</td>';
                    $id_projeto = $linha["id_projeto"];
                    echo '<td><a class="btnExcluir" href="excluir_proj.php?id_projeto='.$id_projeto.'">Excluir</a></td>';
                    echo '<td><a class="btnEditar" href="editar_projetos.php?id_projeto='.$id_projeto.'">Editar</a></td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
            <a class="linkNovo" href="formulario_proj.html">Cadastrar novo Projeto</a>
        </div>

    </body>

</html>