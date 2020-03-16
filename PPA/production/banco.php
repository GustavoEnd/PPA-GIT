<?php

function conectar()
{
    $conn = new PDO(
        "mysql:dbname=ppave;host=localhost",
        "sena",
        "P@ssw0rd"
    );

    return $conn;
}
