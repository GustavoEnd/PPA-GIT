<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$matricula = $_POST["matricula"];


include 'banco_prof.php';
cadastrar_professor($nome, $email, $matricula);
