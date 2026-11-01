<?php

require '..//model/db.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
</head>
<body>


<h1>Your Shopping Cart</h1>


<?php if(empty($_SESSION['cart'])):?>
 <p>Yout cart is currently empty.</p>

<?php else:?>
<table border="1" cellspacing='8' cellspacing = '0'>
<tr>
<th>Product ID</th>
<th>Quantity</th>
<th>Action</th>
</tr>


<?php foreach ($_SESSION['cart'] as $product_id => $quanity): ?>

    <tr>
        <td><?php echo $product_id;?></td>
        <td><?php echo $quanity;?></td>
        <td>
        <form action="POST" action="add_to_cart.php" style="margin: 0;">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"> 
        <button type="submit" name="remove_item">Remove</button>
        </form>

        </td>
        
    </tr>
<?php endforeach;?>

</table>
<?php endif;?>


<br>
<a href="index.php">Continue Shopping</a>
    
</body>
</html>