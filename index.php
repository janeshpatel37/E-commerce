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
        <div class="slideshow-container">
            <div class="myslides fade">
                <a href="s9.php">
                <img src="images/s9.jpg" style="width: 100%" alt="S9+">
                </a>
            </div>
            <div class="myslides fade">
                <a href="iphonex.php">
                <img src="images/iphonex.jpg" style="width: 100%" alt="iphonex">
                </a>
            </div>
            <div class="myslides fade">
                <a href="https://www.techradar.com/reviews/oneplus-5t-review" target="_blank">
                <img src="images/oneplus5t.jpg" style="width: 100%" alt="oneplus5t">
                </a>
            </div>
            <div class="myslides fade">
                <a href="https://www.techradar.com/reviews/huawei-p20-pro-review" target="_blank">
                <img src="images/huaweip20p.jpg" style="width: 100%" alt="huawei p20 pro">
                </a>
            </div>
            <br>
            <div style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
        <div class="articles">
            <a href="https://www.techradar.com/reviews/razer-phone-review" target="_blank">
            <div class="heroimage">
                <img src="images/razer.jpg">
            </div>
            </a>
            <div class="headline">
                <a href="https://www.techradar.com/reviews/razer-phone-review" target="_blank">
                    <h2>Razer Phone Review</h2>
                </a>
                <p>The Razer Phone is a first attempt by PC manufacturer Razer in the mobile phone department. Does it stand up to the competition and is it worth the money?</p><a href="https://www.techradar.com/reviews/razer-phone-review" target="_blank">Read More&raquo;</a>
            </div>
        </div>

        <div class="articles">
            <div class="heroimage">
                <img src="images/linda.jpg">
            </div>
            <div class="headline">
                <a href="https://www.techradar.com/news/first-look-project-linda" target="_blank">
                    <h2>Razer Project Linda First Look</h2>
                </a>
                <p>Razer has just unveiled their concept Project Linda that can be used to run Razer Phone's Android interface on a specialiazed laptop sized screen.</p><a href="https://www.techradar.com/news/first-look-project-linda" target="_blank">Read More&raquo;</a>
            </div>
        </div>
        <div class="articles">
            <a href="pogo.php">
            <div class="heroimage">
                <img src="images/pogo.jpg">
            </div>
            </a>
            <div class="headline">
                <a href="pogo.php">
                    <h2>Pokemon Go Event News</h2>
                </a>
                <p>There is a Kanto event on in Pokemon Go travellers! If you need anything to complete the Kanto Pokedex, now's your chance.</p><a href="pogo.php">Read More&raquo;</a>
            </div>
        </div>
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
            <a href="https://twitter.com/" target="_blank">
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

    <script>
        var slideIndex = 0;
        showslides();
        myFunction();

        function showslides() {
            var i;
            var slides = document.getElementsByClassName("myslides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            var timer = setTimeout(showslides, 3500);
        }
    </script>

</body>

</html>
