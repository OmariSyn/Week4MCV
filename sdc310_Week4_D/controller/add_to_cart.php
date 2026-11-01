<?php

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] =  array();

}



// 1. Add Item to Cart

if(isset($_SESSION['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];


}



if($quantity > 0) {
    if(isset($_SESSION['cart'][$product_id])){

        $_SESSION['cart'][$product_id] += $quantity;


    } else{
        $_SESSION['cart'][$product_id]  = $quantity;

    }
}



//REMOVE ITEMS

if(isset($_POST['remove_itmes'])){
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    header("Location: cart.php");
    exit();
}



// fallback

header('Location: index.php');
exit();



?>