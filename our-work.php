<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care - Every Life, Every Heartbeat</title>
    <link rel="stylesheet" href="./css/ourWork.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/secondary_nav.css">
    <link rel="stylesheet" href="./css/fadeScroll.css">
    <link rel="stylesheet" href="./css/hamMenu.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="navbarReuse js-reveal">
        <div class="logoContainer"></div>
        <div class="logBgMobile mobile">
            <i class="fa-solid fa-bars" onclick="handleMobileMenu();"></i>
        </div>
        <div class="mobileMenuContent"><i class="fa-solid fa-x" onclick="handleCloseNav();"></i>
            <div id="bindDrpdowndata"></div>
        </div>
        <div class="navbarCustom">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="our-work.php" class="active">Our Work</a></li>
                <li><a href="get-involved.php">Get Involved</a></li>
                <li><a href="work-with-us.php">Work With Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="donate.php" class="donateBtn">Donate</a></li>
            </ul>
        </div>
    </div>

    <div class="Breadcrumbs js-reveal">
        <div class="title">Our Work</div>
        <p class="linksLadder">Home/<span>Our Work</span></p>
    </div>

    <div class="weInvite js-reveal">
        We invite you to explore our work gallery and be inspired by the remarkable stories of hope, healing, and
        compassion. Together, we can continue to make a meaningful impact in the lives of animals in need. Join us in
        our mission to create a world where every animal is treated with kindness and respect. Your support, whether
        through donations, volunteering, or spreading awareness, makes all the difference. Thank you for being a part of
        our journey towards a brighter future for animals.
    </div>

    <div class="imgCollage js-reveal">
        <div class="row1">
            <div class="left"></div>
            <div class="right"></div>
        </div>
        <div class="row2">
            <div class="left"></div>
            <div class="right">
                <div class="gridItems"></div>
                <div class="gridItems"></div>
                <div class="gridItems"></div>
                <div class="gridItems"></div>
            </div>
        </div>
        <div class="loadMore">
            <a class="donateBtn" href="#">LOAD MORE</a>
        </div>
    </div>

    <p class="title js-reveal">What We Offer</p>
    <div class="subTextCont js-reveal">
        <p class="comprehensive">Providing comprehensive care and support for animals in need</p>

        <p class="subParagraph">
            <span class="Strong">Rescue:</span>
            We tirelessly work to rescue and rehabilitate sick and needy animals,
            providing them with the care they deserve. Join us in this noble cause and make a difference in their lives.
        </p>

        <p class="subParagraph">
            <span class="Strong">Shelters:</span>
            We set up and run shelters and ambulance services to ensure that animals have a safe place to stay and
            receive immediate medical attention.
        </p>

        <p class="subParagraph">
            <span class="Strong">Education:</span>
            We conduct education programs in schools, teaching children about the importance of animal welfare and
            compassion towards animals.
        </p>

    </div>

    <div class="alignDonate js-reveal">
        <a class="donateBtn" href="donate.html">Donate</a>
    </div>

    <div class="footer js-reveal">
        <footer>
            <div class="innerFtrContainer">
                <div class="item logoSocial">
                    <div class="logo"></div>
                    <div class="socialIcons">
                        <a target="_blank" href="https://www.facebook.com/animalcareindia.org.in">
                            <div class="fb"><i class="fa-brands fa-facebook-f"></i></div>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/animalcareindia.org.in/">
                            <div class="insta"><i class="fa-brands fa-instagram"></i></div>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@animalcareindia">
                            <div class="yt"><i class="fa-brands fa-youtube"></i></div>
                        </a>
                    </div>
                </div>
                <div class="item siteMap">
                    <p class="FooterTitleTxt">SITE MAP</p>
                    <ul class="siteMapUL Home">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="our-work.php">Our Work</a></li>
                        <li><a href="get-involved.php">Get Involved</a></li>
                        <li><a href="work-with-us.php">Work With Us</a></li>
                        
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="shipping-delivery.php">Shipping and Delivery</a></li>
                        <li><a href="cancellation-refund.php">Cancellation and Refund</a></li>
                    </ul>
                </div>
                
                <div class="item address home">
                    <p class="title">SWASTIK APARTMENT</p>
                    <p>RZF-988/16, flat no. 204, Second floor,</p>
                    <p>Ambedkar Marg, Rajnagar part-2,Palam</p>
                    <p>Colony,New Delhi -110077</p>
                    <p>Contact: +91 9315982650</p>
                    <p>E-mail: info@animalcareindia.org.in</p>
                </div>
            </div>
            <div class="copyright">Copyright © 2024 Animal Care</div>
        </footer>
    </div>
    <script src="JS/jquery.scroll-reveal.js"></script>
    <script src="JS/mobileMenu.js"></script>
    <script>
        $.fn.scrollReveal();
    </script>
</body>

</html>