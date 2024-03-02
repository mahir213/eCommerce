<?php

require_once 'inc/header.php';
require_once 'app/classes/product.php';
require_once 'app/classes/cart.php';

$product = new Product();
$product = $product->read($_GET['product_id']);


if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $product_id = $product['product_id'];

    $user_id = $_SESSION['user_id'];

    $quantity = $_POST['quantity'];

    $cart = new Cart();
    $cart->add_to_cart($product_id, $user_id, $quantity);

    header('Location: cart.php');
    exit();
}


?>


<div class="row">
    <div class="col-lg-6">
        <img src="<?php echo $product['image']; ?>" class="img-fluid">
    </div>
    <div class="col-lg-6">
        <h2><?php echo $product['name'];?></h2>
        <p>Size: <?php echo $product['size'];?></p>
        <p>Price: $<?php echo $product['price'];?></p>
        
        <form action="" method="POST">
            <input type="number" name="quantity">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>