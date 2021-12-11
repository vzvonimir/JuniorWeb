<?php require_once("init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product List</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootsrtrap\bootstrap.css" rel="stylesheet">


</head>

<body>

<?php
$dvds = DVD::findAll("DVD"); 
$books = Book::findAll("Book");
$furnitures = Furniture::findAll("Furniture");
$products = array_merge($dvds, $books, $furnitures);
usort($products, function($first, $second){
    return $first->getId() > $second->getId();
});
?>
    
        <nav class="container mt-3 mb-2">
            <label>
                <h3>Product List</h3>
            </label>
            <span class="float-end">
                <a href="addproduct.php" type="button" class="btn btn-primary btn-sm mx-3">ADD</a>
                <a id="delete-product-btn" type="button" class="btn btn-danger btn-sm">MASS DELETE</a>
            </span>
            <hr class="mt-0">
        </nav>
       

        <main class="container d-flex justify-content-center">
            <form action="controllers/mass_delete.php" method="get">
            <div class="row">
            
                <?php foreach($products as $product): ?>
                <div class="col-md-3 p-3">
                    <div class="card border-dark m-auto" style="width: 15rem; height: 11rem;">       
                        <div class="card-body p-2">
                            <div class="form-check">
                                <input class="form-check-input delete-checkbox" type="checkbox" name="delete[]" value="<?php echo $product->getId() ?>">
                            </div>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $product->getSKU(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $product->getName(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $product->getPrice() . " $"; ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $product->getProduct_spec(); ?></p>
                        </div>
                    </div>
                </div> 
                <?php endforeach; ?>
                
            </div>
            </form>
        </main>
      
     
        <footer class="container">
            <hr>
            <p class="d-flex justify-content-center">Scandiweb Test assignment</p>
        </footer>
       


        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>

        <script src="js/mass_delete.js" ></script>

</body>

</html>