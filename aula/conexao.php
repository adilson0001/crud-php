<?php
    $host = "localhost";
    $user = "root";
    $pass = "alunos";

    $banco = "categoriaproduto";

    // Criar a conexao com o servidor de banco de dados
    $conn = new mysqli( $host , $user , $pass , $banco );

    // Verificar se ocorreu algum erro de conexao com o servidor
    if($conn->connect_error)
    {
        die( "Falha na conexao: " . $conn->connect_error );
    }
?>