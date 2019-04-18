<?php
$id = filter_input(INPUT_GET,'product');
    require('mysqli_connect.php');
 $q = "SELECT * FROM products WHERE id=$id";
    $r = mysqli_query($dbc, $q);
while($res = mysqli_fetch_array($r))
{

	$pName = $res['name'];
    $price = $res['price'];
    $quantity = $_REQUEST['quantity'];
    
}
$total=$price*$quantity;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Phoneix Technology</title>
    <link rel="icon" href="images/smartphone.png">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="script/main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans" rel="stylesheet">
</head>
<a href="index.php" id="homeheader">
    <header>
        <h1>Phoneix Technology</h1>
    </header>
</a>

<body id="wrapper">

    <nav class="nav">
        <ul>
            <li id="home"><a href="index.php">Home</a></li>
            <li id="apple"><a href="apple.php">Apple</a></li>
            <li id="samsung"><a href="samsung.php">Samsung</a></li>
            <li>
                <div class="dropdown">
                    <a href="accessories.php">
            <button class="dropbtn">Accessories</button></a>
                    <div class="dropdown-content">
                        <a href="cables.php">Cables</a>
                        <a href="docks.php" target="_blank">Docks</a>
                        <a href="wireless.php">wireless</a>
                    </div>
                </div>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>
    <table class="table">
    <tr><th><h4>ORDER DETAILS</h4></th></tr>
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price($)</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Remove</th>
    </tr>
    
    <tr>
    <td><?php echo "$id";?></td>
    <td><?php echo "$pName";?></td>
    <td><?php echo "$ $price";?></td>
    <td><?php echo "$quantity";?></td>
    <td><?php echo "$total";?></td>
    <td><button href="index.php" value="Remove" width="80px" height="30px">Remove</button></td>
    <td><button href="checkout.php" class="button" value="checkout" width="80px" height="30px">Checkout</button></td>
    </tr>
</table>
</body>
</html>