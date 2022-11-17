<?php
    include 'Produto.class.php';
    session_start();

    $v = new Produto;
    $v -> nome_produto = "Capuccino";
    $v -> desc_produto = "Café Expresso";
    $v -> valor_produto = 50.00;
    $v -> qnt_produto = 15;
    
    
    $_SESSION['produto'][]= $v;
    print_r($_SESSION['produto']);
?>