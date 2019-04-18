
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Phoneix Technology</title>
    <link rel="icon" href="images/smartphone.png">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="script/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<?php   require('mysqli_connect.php');
    $q = "SELECT * FROM products WHERE category='Apple';";
    $r = mysqli_query($dbc, $q);

while($res = mysqli_fetch_array($r))
{
    $productID= $res['id'];
	$pName = $res['name'];
    $image= $res['image'];
    $price = $res['price'];
    $description = $res['description'];
    echo "<div class='col-sm-4'>";
    echo "<form action='cart.php?product=$productID' method='post'>";
    echo "<h4>$pName</h4>";
    echo "<br>";
    echo '<div> <img height=400px src="data:images/jpeg;base64,'.base64_encode( ($image) ).'"/>';                       
    echo "<br>";
    echo "</div>";
    echo "<div width=300px height= 250px><strong>Description: </strong>$description";
    echo "</div>";
    echo "<br>";
    echo "<div><strong>Price:$ </strong>$price</div>";
    echo "<br>";
    echo "<div><strong>Quantity:$ </strong><input type='number' name='quantity'></input></div>";
    echo "<br>";
    echo "<strong>Product ID: </strong>$productID";
    echo "<br>";
    echo "<button class='btn btn-danger btn-xs' type='submit' name='submit'>AddToCart</button>";
    echo "</form>";
    echo "</div>";
}  
    ?>
</body>
</html>