<?php
    include 'Carrinho.class.php';
    include 'Produto.class.php';
    include 'header.php';

    session_start();

   $carrinho =  $_SESSION['carrinho'];
?>
 <table class="table">
  <thead>
    <tr class="col offset-3">
      <th scope="col">Preço Unitário</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço Total</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>      
</table>
<?php
    foreach ($carrinho as $key => $value) { ?>
      <div class="card mb-3" style="width: 85rem;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value -> item; ?></h5>
                <p class="card-text"><?php echo $value -> quantidade; ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        </div>
<?php } 
   


   print_r($_SESSION['carrinho']);
   ?>


<?php
    include 'footer.php';
?>