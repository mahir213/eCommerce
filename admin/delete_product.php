<?php
require_once '../app/config/config.php';
require_once '../app/classes/user.php';
require_once '../app/classes/product.php';

$user = new User();

if($user->is_logged() && $user->is_admin()) : 

    $product = new Product();

    $product_id = $_GET['id'];

    $product->delete($product_id);

    header('Location: index.php');

endif;

?>