<?php
    //print_r($_POST);
    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    
    echo "<h1>Dados do Usuário</h1>";
    echo "<hr>";
    echo "<p>O usuário $nome tem $idade anos.</p>";   

    echo '<a href="../index.html"><button>Home Page</button></a>';
    echo '<button type="button" onclick="history.back()">Voltar</button>';
    echo '<button onclick="window.location.href=\'https:\\\\www.udesc.br\'">Vai para Udesc</button>';
    ?>
