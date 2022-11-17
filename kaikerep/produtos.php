<?php
    session_start();
    include 'header.php';
    include 'Produto.class.php';

    // PRODUTO 1
    $p1 = new Produto;
    $p1 -> cod_produto = 0;
    $p1 -> nome_produto = "Capuccino";
    $p1 -> valor_produto = 50.00;
    $p1 -> qnt_produto = 15;


    // PRODUTO 2
    $p2 = new Produto;
    $p2 -> cod_produto = 1;
    $p2 -> nome_produto = "Croissant";
    $p2 -> valor_produto = 35.00;
    $p2 -> qnt_produto = 13;

    // PRODUTO 3
    $p3 = new Produto;
    $p3 -> cod_produto = 2;
    $p3 -> nome_produto = "Pãozão com Mortadela";
    $p3 -> valor_produto = 7.00;
    $p3 -> qnt_produto = 25;

    // PRODUTO 4
    $p4 = new Produto;
    $p4 -> cod_produto = 3;
    $p4 -> nome_produto = "Suco de Maracujá";
    $p4 -> valor_produto = 5.00;
    $p4 -> qnt_produto = 18;

    // PRODUTO 5
    $p5 = new Produto;
    $p5 -> cod_produto = 4;
    $p5 -> nome_produto = "Salada de Fruta";
    $p5 -> valor_produto = 35.00;
    $p5 -> qnt_produto = 13;

    // PRODUTO 6
    $p6 = new Produto;
    $p6 -> cod_produto = 5;
    $p6 -> nome_produto = "Coca-Cola";
    $p6 -> valor_produto = 7.80;
    $p6 -> qnt_produto = 50;
    
    
    $produtos = array($p1, $p2, $p3, $p4, $p5, $p6);

    $_SESSION['produtos'] = $produtos;

    foreach ($produtos as $key => $value) { ?>
        <div class="col-lg-4">
            <!-- PRODUTO 1 -->
            <div class="card" style="width: 25rem; margin-bottom: 5%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">-------------------------------</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $value -> nome_produto?></li>
                <li class="list-group-item"><?php echo 'R$ ' . $value -> valor_produto?></li>
                <li class="list-group-item"><?php echo $value -> qnt_produto?></li>
            </ul>
            <div class="card-body">
                <a href="add.php?cod=<?php echo $key?>" class="btn btn-dark">COMPRAR</a>
            </div>
            </div>
        </div>
   <?php } 
   


   print_r($_SESSION['produtos']);
   ?>



<?php
    include 'footer.php';
?>