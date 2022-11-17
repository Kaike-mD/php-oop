<?php
    include "Carrinho.class.php";
    include "Produto.class.php";
    //INICIANDO SESSÃO
    session_start();

    
    $carrim = new Carrinho;
    

    
    
    if (isset($_SESSION['carrinho'][$_GET['cod']])){
        $_SESSION['carrinho'][$_GET['cod']] -> quantidade ++ ;
        $_SESSION['carrinho'][$_GET['cod']] -> subtot = $_SESSION['carrinho'][$_GET['cod']] -> valor_unit * $_SESSION['carrinho'][$_GET['cod']] -> quantidade;
    } else{

        $carrim -> item = $_SESSION['produtos'][$_GET['cod']] -> nome_produto; 
        $carrim -> cod_item = $_SESSION['produtos'][$_GET['cod']] -> cod_produto; 
        $carrim -> quantidade = 1;
        $carrim -> valor_unit = $_SESSION['produtos'][$_GET['cod']] -> valor_produto; 
        $carrim -> subtot = $_SESSION['produtos'][$_GET['cod']] -> valor_produto * $carrim -> quantidade; 
        $_SESSION['carrinho'][] = $carrim;

    };
    
    echo "<pre>";
    print_r($_SESSION['carrinho']);
    // if (isset ($_GET['cod'])){
    //     $idProduto = $_GET['cod'];
    //     $_SESSION['carrinho'] = $p1;
        
       
    // };
    // echo "<pre>";
    //     print_r($_SESSION);
    //     print_r($_SESSION['carrinho']);
    //     print_r($idProduto);


    // foreach ($_SESSION['carrinho'] as $k => $valor) {
    //     // echo '<p>Nome: ' .$valor->[''nome'].'</p>'; 
    //     print_r($k);
    // }

    header("Location: carrinho.php");
?>