<!-- header section -->
 <?php include("includes/header.php") ?>




 <!-- navbar section -->
  <?php include("includes/navbar.php") ?>




    

    <style>
        .trending .trend-item .trend-content-main .trend-content h4 {
            padding: -2px 0px 0px !important;
            border: 1px dashed #f1f1f1;
            border-width: 1px 0;
            margin-bottom: 10px;
        }

        .trending .trend-item .trend-content-main .trend-content {
            padding: 10px 20px 1px !important;
        }

        .banner .slider .swiper-container .swiper-slide .slide-inner .slide-image {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-size: cover;
            background-position: bottom !important;
        }

        .overlay,
        .dot-overlay,
        .color-overlay,
        .black-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(22 34 65 / 70%);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1622418a !important;
            transition: all ease-in-out .5s;
            opacity: .7;
        }

        .trending .trend-item .trend-content-main .trend-last-main .trend-last {
            background: #dc3545 !important;
            padding: 10px 20px;
        }

        .why-us .why-us-item {
            padding: 0px !important;
            border: 1px solid #f1f1f1;
            box-shadow: 0 0 15px #cccccc37;
            transition: all ease-in-out .5s;
            overflow: hidden;
            position: relative;
            transform: translateY(0px);
        }

        .bg-pink {
            background: #dc3545 !important;
        }
    </style>


    <section class="banner overflow-hidden">
        <div class="slider slider1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/1.png)"></div>
                            <div class="swiper-content container">
                                <h1 class="white mb-2">Ravi Mehandi Art</h1>
                                <p class="white mb-4">My passion is draw mehndi and the most .I love to do is draw mehndi.</p>
                                
                            </div>
                            <div class="overlay"></div>
                       </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/4.jpg)"></div>
                            <div class="swiper-content1 container">
                                <h1 class="white mb-2">Ravi Mehandi Art</h1>
                                <p class="white mb-4">My passion is draw mehndi and the most .I love to do is draw mehndi.</p>

                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(images/slider/3.jpg)"></div>
                            <div class="swiper-content2 container">
                                <h1 class="white mb-2">Ravi Mehandi Art</h1>
                                <p class="white mb-4">My passion is draw mehndi and the most .I love to do is draw mehndi.</p>
                            
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <section class="about-us bg-grey pb-6">
        <div class="container">
            <div class="about-image-box mb-4">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-content">
                            <h4 class="mb-1 font-weight-normal blue">Welcome to </h4>
                            <h2 class>Ravi Mehandi Art</h2>
                            <h5>Crafting Timeless Mehendi Designs for Every Occasion</h5>
                            <p class="mb-2">
                                Welcome to Ravi Mehendi Artistry, where passion meets creativity to celebrate your most cherished moments. With years of expertise, we specialize in creating intricate mehendi designs that blend tradition with modern elegance. From weddings and festivals to special events, we bring your mehendi dreams to life.
                                Let your hands tell a story with our beautiful, handcrafted designs.
                                </p>
                            <a href="https://wa.me/919905639916" class="nir-btn" target="blank">Book Now<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-main">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mt-4">
                                    <img src="images/3.jpg" alt>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="images/5.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>



    <!-- service start -->

    <section class="trending destination pb-6 pt-9" style="background-image: url(images/bg/bg4.jpg);">
        <div class="container">
            <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white"><strong>OUR SERVICES</strong></h2>
                <!-- <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p> -->
            </div>
            <div class="trend-box">

                <div class="tab-content">
                    <div id="historical" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/1.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <h4><a href="tel:+91-9905639916">Arabic Mehandi</a></h4>
                                        </div>
                                        <div class="trend-last-main">

                                            <p class="mb-0 trend-para" style="color: black">Our skilled and talented artists excel in drawing creative bridal mehendi as requested by our clients.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/8.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <h4><a href="tel:+91-9905639916">Bridal Mehandi</a></h4>
                                        </div>
                                        <div class="trend-last-main">

                                            <p class="mb-0 trend-para" style="color: black">We are pioneer in designing the best mehendi in industry with new, unique and creative work, at your home.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/6.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <h4><a href="tel:+91-9905639916">Rajasthani Mehandi</a></h4>
                                        </div>
                                        <div class="trend-last-main">

                                            <p class="mb-0 trend-para" style="color: black">Made on arms, wrists, around the navel, shoulder and the back. Mehendi is also being used as body art.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/13.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                            </div>
                                            <h4><a href="tel:+91-9905639916">Marwari Mehandi</a></h4>
                                        </div>
                                        <div class="trend-last-main">

                                            <p class="mb-0 trend-para" style="color: black">Random figures, patterns of animals, images of anything, everthing just appears attractive and beautiful.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- <div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img src="komal/ser/6.png" alt="image">
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4><a href="tel:7386471160">Destination Wedding Artist</a></h4>
</div>
<div class="trend-last-main">

<p class="mb-0 trend-para"style="color: black">Mehendi is considered auspicious in indian traditions in all cultures, we have artists for all your needs</p>
<div class="trend-last d-flex align-items-center justify-content-between"style="background-color: #dc3545 !important">
<a href="tel:7386471160"><p class="mb-0 white d-flex align-items-center"> Book Now</p></a>
<div class="trend-price">
</div>
</div>
</div>
</div>
</div>
</div> -->



                            <!-- <div class="col-lg-4 col-md-6 mb-4">
<div class="trend-item">
<div class="trend-image">
<img src="" alt="image">
</div>
<div class="trend-content-main">
<div class="trend-content">
<div class="rating-main d-flex align-items-center pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4><a href="tel:7386471160">Professional training</a></h4>
</div>
<div class="trend-last-main">

<p class="mb-0 trend-para"style="color: black">Enjoyable skill that can earn you income for years to come. More the practice better is the perfection.</p>
<div class="trend-last d-flex align-items-center justify-content-between"style="background-color: #dc3545 !important">
<a href="tel:7386471160"><p class="mb-0 white d-flex align-items-center"> Book Now</p></a>
<div class="trend-price">
</div>
</div>
</div>
</div>
</div>
</div> -->



                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- services end -->




    <!-- <section class="discount-action pt-0">
<div class="container">
<div class="call-banner">
<div class="row d-flex align-items-center">
<div class="col-lg-6 col-md-6 p-0">
<div class="call-banner-inner text-center bg-navy">
<h4 class="white">SUMMER SPECIAL UPTO 25% OFF</h4>
<h2 class="white mb-4">SPEND THE BEST VACATION WITH US <br>The nights of Thailand</h2>
<a href="tel:+91 7386471160" class="nir-btn">View Details <i class="fa fa-arrow-right white pl-1"></i></a>
</div>
</div>
<div class="col-lg-6 col-md-6 p-0"></div>
</div>
</div>
</div>
</section> -->















    <!-- <section class="about-us bg-grey pb-6">
        <div class="container">


            <div class="why-us pt-4 border-t">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                <box-icon name='phone-call'></box-icon>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Advice & Support</a></h4>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-global pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">25+ Years
Experience</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-building pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Be The Part Of
Your Customization</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-location-pin pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">We Prefer Quality
Over Anything</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->


    <section class="call-to-action call-to-action1 pb-6 pt-10 whit-sec" style="background-image:url(komal/bg/3.png)">
        <div class="overlay1"></div>
        <div class="call-main">
            <div class="container">
                <div class="page">
                    <h1>Different Types Of Mehandi From Jharkhand's Best Mehandi Artists</h1>


                    <!-- tabs -->
                    <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
                        <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
                        <label for="tab1">White</label>

                        <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
                        <label for="tab2">Colorful</label>

                        <input type="radio" name="pcss3t" id="tab3" class="tab-content-3">
                        <label for="tab3">Basic</label>

                        <input type="radio" name="pcss3t" id="tab5" class="tab-content-last">
                        <label for="tab5"> Mehandi and Wedding</label>

                        <input type="radio" name="pcss3t" id="tab6" class="tab-content-5">
                        <label for="tab6">Mehandi by Ravi Mehandi Art</label>

                        <ul>
                            <li class="tab-content tab-content-first typography">
                                <h1>White</h1>
                                <p>The color trend of Mehandi has also changed with the passage of time. Now we see Mehandi in white shade. This created a lot of attention and caught the attention of the youth. White looks good with all kinds of clothes.
                                    It adds beauty to the whole look.</p>

                            </li>

                            <li class="tab-content tab-content-2 typography">
                                <h1>Colorful</h1>
                                <p>To bring out the variety, Mehandi is also available in different colors. Yes, the mehandi costs less than the original, but it always gives the hands a bright and elegant tone.</p>

                            </li>

                            <li class="tab-content tab-content-3 typography">
                                <h1>Basic</h1>
                                <p>Base Mehandi is the usual brown shade that appears after applying Mehandi for some time. This is the most used form, but it is still popular today. This type of Mehandi is a popular type of Wedding Mehandi Designs.</p>

                            </li>

                            <li class="tab-content tab-content-last typography">
                                <div class="typography">
                                    <h1>Mehandi and Wedding</h1>
                                    <p>No marriage is complete without some kind of Mehandi. Then Mehandi rasam begins. After this, fruits, nuts and cakes are brought and a song is sung to make the bride cry. This is because it was believed that luck would
                                        come if the bride wept. The bride sits on a cushion and her father-in-law puts a gold coin in her hand as a sign of good luck.If you give a gold coin to the bride, she will do mehandi. application The person who
                                        asked for the mehandi is a person who is known to be married. People apply mehandi on bride's hands, fingers and toes. The mehandi is made from dry mehandi leaves and it takes a lot of time to get it. Wedding mehndi
                                        designs can be found.Therefore, it is recommended to use it 32 to 48 hours before the wedding so that you have enough time for the color to reach the skin. inside Apart from the bride, most of the women attending
                                        the mehndi ceremony have mehandi on their hands for a beautiful look.</p>
                                </div>
                            </li>

                            <li class="tab-content tab-content-5 typography">
                                <div class="typography">
                                    <h1>Mehandi by Kali Ghata Mehandi Art</h1>
                                    <p>As the best Mehandi artist in Jharkhand, we offer affordable services. The women mehndi designs we provide help us provide a better experience to our customers. We have a wide variety of designs and artwork from experts
                                        in this field of Mehandi art. We are sure that your trusted Bridal mehndi artist takes care of every step of the mehandi.</p>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ tabs -->
                </div>
            </div>
            <div class="dot-overlay"></div>
    </section><br><br>













    <section class="counter-main pt-0 pb-6">
        <div class="container">
            <div class="counter text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink" style="background-color: #dc3545 !important">
                            <i class="fa fa-users white mb-1"></i>
                            <h3 class="value mb-0 white">200</h3>
                            <h4 class="m-0 white">Happy Customers</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink" style="background-color: #dc3545 !important">
                            <i class="fa fa-plane white mb-1"></i>
                            <h3 class="value mb-0 white">50</h3>
                            <h4 class="m-0 white">Amazing Tours </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12mb-4">
                        <div class="counter-item bg-pink" style="background-color: #dc3545 !important">
                            <i class="fa fa-chart-bar white mb-1"></i>
                            <h3 class="value mb-0 white">3472</h3>
                            <h4 class="m-0 white">In Business</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink" style="background-color: #dc3545 !important">
                            <i class="fa fa-support white mb-1"></i>
                            <h3 class="value mb-0 white">523</h3>
                            <h4 class="m-0 white">Support Cases </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="top-destination overflow-hidden bg-navy pt-9">
        <div class="container">
            <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white"><span>Our </span>Gallery</h2>
                <!-- <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p> -->
            </div>
            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/6.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>
                                <!-- <h4 class="white mb-0">New York Tour</h4> -->
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/1.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/3.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                   
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div cs="desti-image">
                            <img src="images/15.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/16.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/17.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 p-1">
                        <div class="desti-image">
                            <img src="images/18.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                           
                        </div>
                    </div>

                    <!-- ************************************* -->
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/19.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/20.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/22.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/24.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/25.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                   
                                </div>

                            </div>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/26.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                   
                                </div>

                            </div>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/26.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                   
                                   
                                </div>

                            </div>
                           </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="images/27.jpg" alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                               
                                </div>

                            </div>
                            
                               
                            
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>


    <!--  -->

    <br>
    <!-- <section class="testimonial pb-10 pt-9" style="background-image: url(komal/bg/4.png);">
        <div class="container">


            <div class="row">
                <div class="col-md-6">
                    <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                        <h2 class="m-0" style="color: white">Our <span>Testimonial</span></h2>

                    </div>
                    <div class="row about-slider w-75 mx-auto">
                        <div class="col-sm-4 item">
                            <div class="testimonial-item text-center">
                                <div class="details">
                                    <i class="fa fa-quote-left mb-2" style="color: #dc3545"></i>
                                    <p class="m-0" style="color: white">Ankush Mehandi Art "Very nice design and also very nice service in this area."</p>
                                </div>
                                <div class="author-info mt-2">
                                    <a href="#"><img src="images/testimonial/img1.jpg" alt></a>
                                    <div class="author-title">
                                        <h4 class="m-0 yellow" style="color: white"> Mr.Ajeet Rathore</h4>
                                        <span style="color: white">Supervisor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 item">
                            <div class="testimonial-item text-center">
                                <div class="details">
                                    <i class="fa fa-quote-left mb-2" style="color: #dc3545"></i>
                                    <p class="m-0" style="color: white">Ankush Mehandi Art"Best mehandi experience and also colour is awesome"/p>
                                </div>
                                <div class="author-info mt-2">
                                    <a href="#"><img src="images/testimonial/img2.jpg" alt></a>
                                    <div class="author-title">
                                        <h4 class="m-0 yellow" style="color: white">Mr Abhishek</h4>
                                        <span style="color: white">Sr. Chef</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 item">
                            <div class="testimonial-item text-center">
                                <div class="details">
                                    <i class="fa fa-quote-left mb-2" style="color: #dc3545"></i>
                                    <p class="m-0" style="color: white">Awesome work.. Awesome color, his team members are very talant , very nice mehandi designer in this area.</p>
                                </div>
                                <div class="author-info mt-2">
                                    <a href="#"><img src="images/testimonial/img3.jpg" alt></a>
                                    <div class="author-title">
                                        <h4 class="m-0 yellow" style="color: white">Mr Aman Kumar</h4>
                                        <span style="color: white">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-main" style="margin-top: 18%;">
                        <div class="form-content w-100 p-0">
                            <h3 class="form-title text-center m-0 p-3 white" style="background-color: #dc3545">Get Enquiry</h3>
                            <div class="form-content-inner p-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="box-shadow: 2px 2px 3px 3px;">
                                            <div class="input-box">
                                                <i class="fa fa-user"></i>
                                                <input type="text" placeholder="Your Name" style="color: black;font-weight: 700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" style="box-shadow: 2px 2px 3px 3px;">
                                            <div class="input-box">
                                                <i class="fa fa-map-marker" style="color: black;font-weight: 700 !important"></i>
                                                <select class="niceSelect">
<option value="1">Type of services</option>
<option value="2">Bridal Mehendi Artists</option>
<option value="3">Mehendi Artists At Home</option>
<option value="4">Heena body tattoos</option>
<option value="5">Ornament tattooss</option>
<option value="6">Bridal services</option>
<option value="7">Professional training</option>


</select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group" style="box-shadow: 2px 2px 3px 3px;">
                                            <div class="input-box">
                                                <i class="fa fa-phone"></i>
                                                <input id="date-range1" type="text" placeholder="Phone No" style="color: black;font-weight: 700">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group" style="box-shadow: 2px 2px 3px 3px;">
                                            <div class="input-box">
                                                <i class="fa fa-envelope"></i>
                                                <input id="date-range1" type="text" placeholder="Your Message" style="color: black;font-weight: 700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group m-0 w-100 text-center">
                                            <a href="tel:+91 7386471160" class="nir-btn"><i class="fa fa-search"></i> Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="overlay"></div>
    </section> -->

 <!--footer section-->
 <?php include("includes/footer.php") ?>
        <!-- <div class="footer-payment">
<div class="container">
<div class="footer-pay d-md-flex align-items-center justify-content-between pt-2 pb-2">
<div class="footer-payment-nav">
<ul class="d-md-flex align-items-center">
<li class="mr-2">We Support:</li>
<li class="mr-2"><i class="fab fa-cc-mastercard"></i></li>
<li class="mr-2"><i class="fab fa-cc-paypal"></i></li>
<li class="mr-2"><i class="fab fa-cc-stripe"></i></li>
<li class="mr-2"><i class="fab fa-cc-visa"></i></li>
<li class="mr-2"><i class="fab fa-cc-discover"></i></li>
</ul>
</div>
<div class="footer-payment-nav mb-0">
<ul>
<li>
<select>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
<option>English (United States)</option>
</select>
</li>
<li>
<select>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
<option>$ USD</option>
</select>
</li>
</ul>
</div>
</div>
</div>
</div> -->
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <!-- <p class="m-0 white">2024 Ravi Mehandi Art. All rights reserved.webinfotechsolution.com</p> -->
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="what2">
        <a href="https://wa.me/919905639916" target="_blank">
           <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
        <a href="Tel:+91-9905639916" style="background-color:#ff6b3b;">
           <i class="fa fa-phone" aria-hidden="true"></i>

        </a>
    </div>
    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink mb-1">Register</h3>
                            <p>Access thousands of online classes in design, business, and more!</p>
                        </div>
                        <div class="login-form text-center">
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">Register</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> By clicking this, you are agree to to<a href="#" class> our terms of use</a> and <a href="#" class>privacy policy</a> including the use of cookies
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                            <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i> Google</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Already have an account? <a href="login.html" class="pink">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink">Login</h3>
                        </div>
                        <div class="login-form">
                            <form>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">LOGIN</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> Remember Me | <a href="#" class>Forgot password?</a>
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Do not have an account? <a href="login.html" class="pink">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
<img src="images/shop/shop1.jpg" alt>
</a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
<img src="images/shop/shop2.jpg" alt>
</a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
<img src="images/shop/shop6.jpg" alt>
</a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particlerun.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-swiper.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/custom-date.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'7d27984d0d0585de',m:'552TrStDNUjoMvdxqDvAW1QdD8dYaAkXFL3cQq6GYPA-1685959503-0-AWThXg94uQwN8GFaCGkjJF8126KMPWc63C6cDOyUJd6h',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/68662470/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

<!-- Mirrored from htmldesigntemplates.com/html/yatriiworld/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 10:07:00 GMT -->

</html>