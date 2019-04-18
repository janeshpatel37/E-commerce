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
    <main>
        <form action="thanks.php" method="post">
        <br>
        First Name :<br>
        <input type="text" name="firstname" required><br><br>
        Last Name :<br>
        <input type="text" name="lastname" required><br><br>
        Address :<br>
        <input type="text" name="address" required><br><br>
        Phone :<br>
        <input type="text" name="phone" required><br><br>
        Email :<br>
        <input type="text" name="email" required><br><br>
        password :<br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit">
    </form>
    </main>
    <footer>
        <div class="social">
            <div class="sociallogo">
                <a href="https://www.facebook.com/" target="_blank">
            <img src="images/social/facebook-logo-button.png"></a>
            </div>
            <div class="sociallogo">
                <a href="https://plus.google.com/" target="_blank">
            <img src="images/social/google-plus-logo-button.png"></a>
            </div>
            <div class="sociallogo">
                <a href="https://www.instagram.com/" target="_blank">
            <img src="images/social/instagram-logo.png"></a>
            </div>
            <div class="sociallogo">
                <a href="https://www.linkedin.com" target="_blank">
            <img src="images/social/linkedin-logo-button.png"></a>
            </div>
            <div class="sociallogo">
                <a href="https://www.google.ca/maps/place/Conestoga+College/@43.390297,-80.405415,17z/data=!3m1!4b1!4m5!3m4!1s0x882b9018e9e89adf:0x2043c24369ede07e!8m2!3d43.390297!4d-80.4032263" target="_blank">
            <img src="images/social/map-pin-marked.png"></a>
            </div>
            <div class="sociallogo">
                <a href="https://twitter.com/">
            <img src="images/social/twitter-logo-button.png"></a>
            </div>
        </div>
        <div class="footlinks">
            <ul>
                <li><a href="about.php">Feedback</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="mailto:shehbanhp@gmail.com">Business Inquiries</a></li>
                <li>
                    <a href="http://www.techradar.com" target="_blank">Source of Content</a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy;Phoneix Inc. 2018. All Rights Reserved.
        </div>
    </footer>
</body>

</html>
