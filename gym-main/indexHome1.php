<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitlife - Work Hard To Get Better Life</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="Public/assetsHomepage/css/style.css">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
            rel="stylesheet">

    <!--
      - preload images
    -->
    <link rel="preload" as="image" href="Public/assetsHomepage/images/hero-banner.png">
    <link rel="preload" as="image" href="Public/assetsHomepage/images/hero-circle-one.png">
    <link rel="preload" as="image" href="Public/assetsHomepage/images/hero-circle-two.png">
    <link rel="preload" as="image" href="Public/assetsHomepage/images/heart-rate.svg">
    <link rel="preload" as="image" href="Public/assetsHomepage/images/calories.svg">

</head>

<body id="top">

<!--
  - #HEADER
-->
<div id="wrapper">
    <main>
        <article>
            <?php include("ViewsUser/inc_Banner.php"); ?>
            <?php include("ViewsUser/inc_Header.php"); ?>
            <div id="content" class="clear_fix">
                <?php
                //hiển thị phần nội dung giữa của trang web
                $module = "";
                if(isset($_REQUEST["module"]))
                    $module = $_REQUEST["module"];
                else if($module=="blog")
                {
                    require("ViewsUser/vBlog.php");
                }
                else if($module=="sanpham")
                {
                    require("ControllerHome/ctlProduct.php");
                }
                else if($module=="chitietsanpham")
                {
                    require("ControllerHome/ctlDetail.php");
                }
                else if($module=="cart")
                {
                    require("ControllerHome/ctlCart.php");
                }
                else if($module=="checkout")
                {
                    require("ControllerHome/ctlCheckOut.php");
                }
                else
                {
                    require("ControllerHome/ctlHome.php");
                }
                ?>
            </div> <!--id="content" -->
    </article>
</main>
</div>





<!--
  - #FOOTER
-->

<footer class="footer" class="section contact" id="contact" aria-label="contact">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('Public/assetsHomepage/images/footer-bg.png')">
        <div class="container">

            <div class="footer-brand">

                <a href="#" class="logo">
                    <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

                    <span class="span">Fitlife</span>
                </a>

                <p class="footer-brand-text">
                    Etiam suscipit fringilla ullamcorper sed malesuada urna nec odio.
                </p>

                <div class="wrapper">

                    <img src="Public/assetsHomepage/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

                    <ul class="footer-brand-list">

                        <li>
                            <p class="footer-brand-title">Monday - Friday</p>

                            <p>7:00Am - 10:00Pm</p>
                        </li>

                        <li>
                            <p class="footer-brand-title">Saturday - Sunday</p>

                            <p>7:00Am - 2:00Pm</p>
                        </li>

                    </ul>

                </div>

            </div>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title has-before">Our Links</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Home</a>
                </li>

                <li>
                    <a href="#" class="footer-link">About Us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Classes</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Blog</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Contact Us</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title has-before">Contact Us</p>
                </li>

                <li class="footer-list-item">
                    <div class="icon">
                        <ion-icon name="location" aria-hidden="true"></ion-icon>
                    </div>

                    <address class="address footer-link">
                        1247/Plot No. 39, 15th Phase, Colony, Kukatpally, Hyderabad
                    </address>
                </li>

                <li class="footer-list-item">
                    <div class="icon">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                    </div>

                    <div>
                        <a href="tel:18001213637" class="footer-link">1800-121-3637</a>

                        <a href="tel:+915552348765" class="footer-link">+91 555 234-8765</a>
                    </div>
                </li>

                <li class="footer-list-item">
                    <div class="icon">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                    </div>

                    <div>
                        <a href="mailto:info@fitlife.com" class="footer-link">info@fitlife.com</a>

                        <a href="mailto:services@fitlife.com" class="footer-link">services@fitlife.com</a>
                    </div>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title has-before">Our Newsletter</p>
                </li>

                <li>
                    <form action="" class="footer-form">
                        <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required
                               class="input-field">

                        <button type="submit" class="btn btn-primary" aria-label="Submit">
                            <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </li>

                <li>
                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <p class="copyright">
                &copy; 2022 Fitlife. All Rights Reserved By <a href="#" class="copyright-link">codewithsadee.</a>
            </p>

            <ul class="footer-bottom-list">

                <li>
                    <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
                </li>

            </ul>

        </div>
    </div>
</div>
</footer>





<!--
  - #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
</a>





<!--
  - custom js link
-->
<script src="Public/assetsHomepage/js/script.js" defer></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
<!--<a href="?module=sanpham">Bam vao day de mua hang</a>-->
<!--<a href="?module=cart">Bam vao day de xem hang</a>-->
<!--<a href="Logout.php">Log out</a>-->
<!--<div id="content" class="clear_fix">-->-->
<!--//--><?php
    //hiển thị phần nội dung giữa của trang web
//    $module = "";
//    if(isset($_REQUEST["module"]))
//        $module = $_REQUEST["module"];
////    if($module=="tintuc")
////    {
////        require("ControllersHome/ctlTintuc.php");
////    }
//    else if($module=="sanpham")
//    {
//        require("Controller/ctlProductUser.php");
//    }
////    else if($module=="chitietsanpham")
////    {
////        require("Controller/ctlProductUser.php");
////    }
////    else if($module=="cart")
////    {
////        require("Controller/ctlCart.php");
////    }
////    else if($module=="checkout")
////    {
////        require("ControllersHome/ctlCheckout.php");
////    }
////    else
////    {
////        require("ControllersHome/ctlHome.php");
////    }
//    ?>
<!---->
<!--</div>-->
