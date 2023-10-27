<!--
          - #ABOUT
        -->
<!--
  - #BLOG
-->

<section class="section blog" id="blog" aria-label="blog">
    <div class="container">

        <p class="section-subtitle">Product</p>

        <h2 class="h2 section-title text-center">New available</h2>

        <ul class="blog-list has-scrollbar">
            <?php
            $rows = $sanpham->data;
            foreach($rows as $row)
            {
            $hinhanh = $row["images"];
            if($hinhanh=="")
                $hinhanh = "no-Image.png";
            $trangthai="";
            if($row["status"]==1)
                $trangthai = "có";
            else
                $trangthai = "không";
            ?>

            <li class="scrollbar-item">
                <div class="blog-card">
                    <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                        <img src="image/Product/<?=$hinhanh?>" width="440" height="270" loading="lazy"
                             alt="Going to the gym for the first time" class="img-cover">
                    </div>

                    <div class="card-content">
                        <h3 class="h3">
                            <a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><?=$row["title"]?></a>
                        </h3>

                        <p class="card-text">
                            Praesent id ipsum pellentesque lectus dapibus condimentum curabitur eget risus quam. In hac
                            habitasse platea dictumst.
                        </p>
                        <p>Price: <?=number_format($row["price"])?>$</p>
                        <a href="?module=cart&act=add&masp=<?=$row["id"]?>" class="btn-link has-before">Add to cart</a>

                    </div>

                </div>
            </li>
                <?php
            }
            ?>

        </ul>

    </div>
</section>


<section class="main-about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-box wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="about-img-one">
                        <img src="Public/assetsHomepage/images/about-banner.png" alt="About Us">
                    </div>
                    <div class="about-img-bg"></div>
                    <div class="fitness">
                        <img src="Public/assetsHomepage/images/fitness.png" alt="Fitness">
                    </div>
                    <div class="about-circle-one">
                        <img src="Public/assetsHomepage/images/about-circle-two.png" alt="Circle">
                    </div>
                    <div class="about-circle-two">
                        <img src="Public/assetsHomepage/images/about-circle-two.png" alt="Circle">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-box wow fadeInRight" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="about-us-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">About Us</h2>
                        </div>
                        <h2 class="h2-title">Welcome To Our Fitness Gym</h2>
                    </div>
                    <p>Nam ut hendrerit leo. Aenean vel ipsum nunc. Curabitur in tellus vitae nisi aliquet dapibus non et erat. Pellentesque porta sapien non accumsan dignissim curabitur sagittis nulla sit amet dolor feugiat.</p>
                    <p>Integer placerat vitae metus posuere tincidunt. Nullam suscipit ante ac aliquet viverra vestibulum ante ipsum primis.</p>
                    <div class="about-text-box">
                        <div class="about-trainer-box">
                            <div class="about-trainer-img">
                                <img src="Public/assetsHomepage/images/about-coach.jpg" class="rounded-circle" alt="Trainer">
                            </div>
                            <div class="about-trainer-name">
                                <h3 class="h3-title">Denis Robinson</h3>
                                <span>Our Coach</span>
                            </div>
                        </div>
                        <a href="about-us.html" class="sec-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Classes Start-->
<section class="main-classes">
    <div class="classes-overlay-bg animate-this" style="transform: translateX(20px) translateY(-7.46373px);">
        <img src="Public/assetsHomepage/images/classes-bg.png" alt="Overlay">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="classes-title">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">Our Classes</h2>
                    </div>
                    <h2 class="h2-title">Fitness Classes For Every Goal</h2>
                </div>
            </div>
        </div>
        <div class="row class-slider slick-initialized slick-slider slick-dotted" id="counter">
            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4840px; transform: translate3d(-2200px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-1.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-2.jpg" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Cardio &amp; Strenght<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="70">70</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="70%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 70%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-3.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-1.jpg" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="90">90</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="90%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 90%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-4.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-1.jpg" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="60">60</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="60%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 60%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 440px;">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-1.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-1.jpg" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Weight Lifting<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full" id="progress_bar">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="85">85</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="85%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 85.0041%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-1.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-1.jpg" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="0"><h3 class="h3-title">Cardio &amp; Strenght<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="70">70</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="70%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 70%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 440px;">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-1.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-icon-1.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="0"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="90">90</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="90%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 90%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-2.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-icon-2.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="0"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="60">60</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="60%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 60%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned slick-active" data-slick-index="4" id="" aria-hidden="false" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="class-img">
                                <img src="Public/assetsHomepage/images/class-3.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="Public/assetsHomepage/images/class-icon-3.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Weight Lifting<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full" id="">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="85">85</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="85%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 85.0041%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="assets/images/class-img2.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="assets/images/class-icon2.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Cardio &amp; Strenght<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="70">70</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="70%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 70%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="class-img">
                                <img src="assets/images/class-img3.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="assets/images/class-icon3.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="90">90</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="90%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 90%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-4 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 440px;">
                        <div class="class-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="class-img">
                                <img src="assets/images/class-img4.jpg" alt="Class">
                            </div>
                            <div class="class-box-contant">
                                <div class="class-box-title">
                                    <div class="class-box-icon">
                                        <img src="assets/images/class-icon4.png" alt="Icon">
                                    </div>
                                    <a href="class-detail.html" tabindex="-1"><h3 class="h3-title">Power Yoga<br>Classes</h3></a>
                                </div>
                                <p>Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.</p>
                                <div class="class-full">
                                    <div class="class-full-bar-box">
                                        <h3 class="h3-title">Class Full</h3>
                                        <div class="class-full-bar-percent">
                                            <h3 class="h3-title counting-data" data-count="60">60</h3><span>%</span>
                                        </div>
                                        <div class="skill-bar class-bar" data-width="60%">
                                            <div class="skill-bar-inner class-bar-in" style="width: 60%; overflow: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
        </div>
</section>
<!--Classes End-->

<!--Schedule Start-->
<section class="main-schedule">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="schedule-title">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">Our Schedule</h2>
                    </div>
                    <h2 class="h2-title">Check Our  Classes Schedule</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="main-schedule-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="schedule-box">
                        <div class="schedule-time-box">
                            <ul>
                                <li><img src="Public/assetsHomepage/images/clock-1.png" alt="Clock"></li>
                                <li><h3 class="h3-title">8:00 Am</h3></li>
                                <li><h3 class="h3-title">10:00 Am</h3></li>
                                <li><h3 class="h3-title">12:00 Pm</h3></li>
                                <li><h3 class="h3-title">5:00 Pm</h3></li>
                                <li><h3 class="h3-title">8:00 Pm</h3></li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Monday</h3></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Zumba Dance</h3>
                                        <span>Steven Hill</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Tuesday</h3></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Wednesday</h3></li>
                                <li></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Zumba Dance</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Thursday</h3></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Friday</h3></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Weight Lifting</h3>
                                        <span>Desert Antony</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule-class-box">
                            <ul>
                                <li><h3 class="h3-title">Saturday</h3></li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Boxing</h3>
                                        <span>John Hard</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Power Yoga</h3>
                                        <span>Zahra Sharif</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Cardio</h3>
                                        <span>Kate Johnson</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="schedule-class-text">
                                        <h3 class="h3-title">Aerobics</h3>
                                        <span>Manny Johnes</span>
                                    </div>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Schedule End-->

<!--Counter Start-->
<section class="main-counter">
    <div class="container">
        <div class="row counter-bg wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box">
                    <div class="counter-content">
                        <h2 class="h2-title counting-data" data-count="874">874</h2>
                        <div class="counter-text">
                            <img src="Public/assetsHomepage/images/happy-client.png" alt="Happy Client">
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box">
                    <div class="counter-content">
                        <h2 class="h2-title counting-data" data-count="987">987</h2>
                        <div class="counter-text">
                            <img src="Public/assetsHomepage/images/total-clients.png" alt="Total Clients">
                            <span>Total Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box">
                    <div class="counter-content">
                        <h2 class="h2-title counting-data" data-count="587">587</h2>
                        <div class="counter-text">
                            <img src="Public/assetsHomepage/images/gym-equipment.png" alt="Gym Equipment">
                            <span>Gym Equipment</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box">
                    <div class="counter-content">
                        <h2 class="h2-title counting-data" data-count="748">748</h2>
                        <div class="counter-text">
                            <img src="Public/assetsHomepage/images/cup-of-coffee.png" alt="Cup Of Coffee">
                            <span>Cup Of Coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter End-->

<!--Team Start-->
<section class="main-team">
    <div class="team-overlay-bg animate-this" style="transform: translateX(15.9991px) translateY(-9.99986px);">
<!--        <img src="assets/images/team-overlay-bg.png" alt="Overlay">-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="subtitle">
                        <h2 class="h2-subtitle">Best Trainer</h2>
                    </div>
                    <h2 class="h2-title">Our Professional Trainer</h2>
                </div>
            </div>
        </div>
        <div class="row team-slider slick-initialized slick-slider slick-dotted">
            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4620px; transform: translate3d(-2310px, 0px, 0px);"><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer2.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Kate Johnson</h3></a>
                                <span>Fitness Trainer</span>
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer3.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">John Hard</h3></a>
                                <span>Fitness Trainer</span>
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer4.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Zahra Sharif</h3></a>
                                <span>Fitness Trainer</span>
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" tabindex="-1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="#" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Ruth Edwards</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer1.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Desert Antony</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer2.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Kate Johnson</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="assets/images/trainer3.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">John Hard</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide13" aria-describedby="slick-slide-control13" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer2.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="0"><h3 class="h3-title team-text-color">Zahra Sharif</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide14" aria-describedby="slick-slide-control14" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer3.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="0"><h3 class="h3-title team-text-color">Ruth Edwards</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned slick-active" data-slick-index="5" id="" aria-hidden="false" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer1.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="0"><h3 class="h3-title team-text-color">Desert Antony</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned slick-active" data-slick-index="6" id="" aria-hidden="false" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer4.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="0"><h3 class="h3-title team-text-color">Kate Johnson</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer3%20(1).jpg.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">John Hard</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInDown" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer3.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Zahra Sharif</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div><div class="col-lg-3 slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 330px;">
                        <div class="team-box wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team-img-box team-border-one">
                                <div class="team-img">
                                    <img src="Public/assetsHomepage/images/trainer1.jpg" alt="Trainer">
                                </div>
                            </div>
                            <div class="team-content">
                                <a href="team-detail.html" tabindex="-1"><h3 class="h3-title team-text-color">Ruth Edwards</h3></a>
                                <span>Fitness Trainer</span>

                            </div>
                        </div>
                    </div></div></div>




        </div>
    </div>
</section>
<!--Team End-->





