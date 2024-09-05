<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

 <section class="banner">
        
        <div class="slick-carousel">
            <div class="slider-img" style="background-image: url(https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/05/hero.png); ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                <div class="text-box">
                    <div class="content-text">
                        <p><span>WELCOME TO PUSAN TRADING CO. LLC.</span></p>
                        <h1>Your Ultimate Destination for Marine 
Essentials</h1>
                        <p> We offer everything from cabin essentials to deck materials, engine 
components, and marine supplies. Your vessel's needs, fulfilled with expertise 
and reliability
                        </p>

                        <div class="btn-box">
                            <a href="https://wa.me/97142216013" class="btn-contact">Contact Us <span><img class="arrow-img banner-icon"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/MicrosoftTeams-image.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>

    </section>


    
    <section class="sec-2">
        <div class="custom-container custom2 container">
            <div class="row">
                <div class="sec-2-main">
					<?php if( have_rows('homepageboxes') ):
                    while ( have_rows('homepageboxes') ) : the_row(); ?>
                    <div class="items-box">
						
                        <h2 class="text-white fs"><?php the_sub_field('title'); ?></h2>
                        <p class="text-white">
                         <?php the_sub_field('paragraph'); ?>
                        </p>
                        <div class="img-box">
                            <img class="img-fluid" src="<?php the_sub_field('icon'); ?>" alt="">
                        </div>
                    </div>
					 <?php  endwhile; else : endif;?>
                </div>
            </div>
        </div>
    </section>


    <section class="sec-3">
        <div class="container-fluid">
            <div class="row mob-gap">
                <div class="col-md-12 col-lg-7">
                    <div class="tab-box-left">
                        <span class="span-text">WELCOME TO PUSAN TRADING CO. LLC.</span>
                        <h2>Your One-Stop Shop for All Your Marine Needs Since 1991.</h2>

                        <div class="about-img">
                            <img class="img-fluid" src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/left-img.png" alt="">
                        </div>

                        <div class="counter-box">
                            <div class="counter-number">
                                <span class="count">10000</span><span>+</span>
                                <p>Product SKUs</p>
                            </div>
                            <div class="counter-number">
                                <span class="count">100</span><span>+</span>
                                <p>Happy Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="tab-box-right">
                        <img class="img-fluid" src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/right-img.png" alt="">
                    </div>
                    <div class="tab-boxs home_tab">


                        <div id="container">
                            <div class="tabs-nav">
                                <ul>
                                    <li class="active"><a href="#tab1">Our History</a></li>
                                    <li><a href="#tab2">Our Mission </a></li>
                                    <li><a href="#tab3"> Our Vision</a></li>

                                </ul>
                            </div>

                            <section class="tabs-content">
                                <div id="tab1">
                                    <!-- <h3>Our History </h3> -->
                                    <p>Pusan Trading Co. LLC was established in 1991 as a professional ship store
                                        supplying company in the UAE. Our main activities include providing cabin,
                                        deck, engine, and marine supplies, as well as servicing the oilfield sector and
                                        regularly supplying local ship chandlers.</p>
                                    <ul class="tab-list">
                                        <li>Reliable Supply</li>
                                        <li>Competitive Pricing</li>
                                        <li>Fostering Lasting Relationships</li>
                                    </ul>
                                    <a href="https://wa.me/97142216013" target="_blank" class="touch-btn"> Get in Touch  <i class="fa fa-whatsapp whatsapp-button" id="white" aria-hidden="true"></i> </a>

                                </div>

                                <div id="tab2">
                                    <!-- <h3>Our Mission </h3> -->
                                    <p>Our mission at Pusan Trading Co. LLC is to be the leading provider of marine
                                        supplies in the UAE. With a commitment to excellence, we aim to deliver
                                        exceptional service and innovative solutions to meet the diverse needs of our
                                        clients.</p>
                                    <ul class="tab-list">
                                        <li>Uphold Professionalism and Integrity</li>
                                        <li>Innovate to Address Industry Challenges</li>
                                        <li>Continuously Exceed Expectations
                                        </li>

                                    </ul>
                                    <a href="https://wa.me/97142216013" target="_blank" class="touch-btn"> Get in Touch  <i class="fa fa-whatsapp whatsapp-button" id="white" aria-hidden="true"></i> </a>
                                </div>

                                <div id="tab3">
                                    <!-- <h3> Our Vision</h3> -->
                                    <p>At Pusan Trading Co. LLC, we envision ourselves as pioneers in the marine
                                        supply industry of the UAE. We strive to set new standards in reliability and
                                        customer satisfaction, ensuring that every interaction with us leaves a lasting
                                        impression of quality and trust.</p>
                                    <ul class="tab-list">
                                        <li>Be UAE's Top Marine Supplier</li>
                                        <li>Diverse Marine Product Range</li>
                                        <li>Exemplary Client Services</li>

                                    </ul>

                                    <a href="https://wa.me/97142216013" target="_blank" class="touch-btn"> Get in Touch  <i class="fa fa-whatsapp whatsapp-button " id="white" aria-hidden="true"></i> </a>
                                </div>


                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="OUR-SERVICES">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 col-lg-9 p-0">
                    <div class="tab-box-left our-box">
                        <span>OUR PRODUCTS</span>
                        <h2>We Provide a Wide Range of Products to meet Your Diverse Needs
                        </h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 p-0">
<!--                     <div class="btn-box2_our_service"><a href="#" class="btn-contact" tabindex="0">View All Solutions <span><img class="arrow-img banner-icon" src="img/MicrosoftTeams-image.png" alt=""></span>
                    </a></div> -->
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="searvice-box">
					<?php if( have_rows('homepageourservices') ):
                    while ( have_rows('homepageourservices') ) : the_row(); ?>
					<div class="our_product_box">
					 <div class="searvice-icon">
						 <a href="<?php the_sub_field('link'); ?>">
						  <img class="img-fluid" src="<?php the_sub_field('icon'); ?>" alt="">
						 </a>
                               
                            </div>
                    <div class="box-sear">
                        <div class="bg-disc">
                           

                            <div class="searvice-disc">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('paragraph'); ?></p>
                                <a href="<?php the_sub_field('link'); ?>" class="read-btn">View Products <span><img class="arrow-img"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/MicrosoftTeams-image.png" alt=""></span></a>
                            </div>
                        </div>
                    </div>
						</div>
					 <?php  endwhile; else : endif;?>

                </div>
            </div>
        </div>
    </section>
   



    <section class="recent-work" style="display:none;">
        <div class="container-fluid">
            <div class="row">
                <div class="tab-box-left our-box pad-left">
                    <span>RECENT WORK</span>
                    <h2>Explore Large-Scale Projects
                    </h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row ">

                <div class="projects-slider">

                    <div class="item">
                        <!-- You can put an image or text inside each slide div -->
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-1.jpg">
                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>

                    </div>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-2.jpg">

                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-3.jpg">
                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-4.jpg">
                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-5.jpg">
                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>

                        </div>
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-6.jpg">
                        <div class="slider-btn">
                            <a href="#" class="s-btn">
                                <span class="R-Detail-btn">Read Details</span>
                                <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>


    <section class="OUR-SERVICES">
        <div class="container-fluid">
            <div class="row mob-gap">
                <div class="col-md-12 col-lg-7">
                    <div class="tab-box-left our-box">
                        <span>WHY CHOOSE US</span>
                        <h2>Your Trusted Partner for Quality<br> and 
Reliability
                        </h2>
                    </div>

                    <div class="why-choose-box">
                        <div class="why-icon">
                          <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/05/cirtified_company.png" alt="img">
                        </div>
                        <div class="why-disc">
                            <h4>High Quality Standards</h4>
                            <p>Committed to delivering top-quality products.</p>
                        </div>
                    </div>

                    <div class="why-choose-box">
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="69" viewBox="0 0 60 69"
                                fill="none">
                                <path
                                    d="M58.2461 47.1707C58.2431 47.1707 58.2401 47.1696 58.2361 47.1696L56.2 46.8572C55.9581 46.073 55.6456 45.3261 55.2656 44.6245L56.4812 42.9765C57.094 42.157 57.0124 40.9959 56.2887 40.2742L54.557 38.5516C53.8484 37.8047 52.6852 37.7089 51.8526 38.3278L50.1935 39.5494C49.4638 39.1594 48.7138 38.8499 47.9538 38.6221L47.6454 36.5981C47.5033 35.5861 46.6203 34.8231 45.5912 34.8231H43.1338C42.1218 34.8231 41.2569 35.5539 41.0705 36.5941L40.7751 38.6262C40.4506 38.7249 40.1462 38.8348 39.8549 38.9588C39.7107 39.0021 39.5787 39.0545 39.5031 39.0959C39.1805 39.2239 38.857 39.3741 38.5364 39.5454L36.8763 38.3228C36.0448 37.719 34.8836 37.8147 34.1881 38.5314L32.4554 40.2651C32.0092 40.6978 31.8059 41.2952 31.8482 41.8822C31.3836 41.8203 30.9172 41.7769 30.4496 41.7505V37.6273C33.8895 34.9974 36.0686 30.4769 36.3046 25.5176H37.6323C39.3448 25.5176 40.7388 24.1236 40.7388 22.411V21.3638C40.7388 19.7173 39.4465 18.3794 37.8252 18.2777C37.4136 12.4756 33.4955 7.53717 27.9226 5.83711V3.01885C27.9226 1.3547 26.5679 0 24.9037 0H22.6782C21.014 0 19.6593 1.3547 19.6593 3.01885V5.83711C14.0864 7.53717 10.1683 12.4756 9.7567 18.2777C8.13539 18.3794 6.84306 19.7173 6.84306 21.3638V22.411C6.84306 24.1236 8.23707 25.5176 9.9496 25.5176H11.2558C11.4923 30.4892 13.6997 35.0326 17.1293 37.6386V41.7691C7.59783 42.3011 0 50.2051 0 59.873V63.7234C0 66.1476 1.97258 68.1202 4.39774 68.1202H12.7962C12.7997 68.1202 12.8026 68.1222 12.8062 68.1222C12.8097 68.1222 12.8127 68.1202 12.8162 68.1202H35.8725C35.876 68.1202 35.8789 68.1222 35.8825 68.1222C35.886 68.1222 35.889 68.1202 35.8925 68.1202H43.1751C45.0677 68.1202 46.7598 66.8785 47.3372 65.0859C47.4802 64.8556 47.5945 64.6028 47.6434 64.3131L47.9548 62.278C48.731 62.0401 49.4769 61.7327 50.1834 61.3577L51.8627 62.5905C52.6973 63.1882 53.8565 63.0864 54.5328 62.3717L56.3028 60.6219C56.8652 60.0403 57.0436 59.2098 56.7695 58.483C56.712 58.2925 56.6163 58.105 56.4852 57.9286L55.2646 56.2736C55.6456 55.565 55.9591 54.8181 56.199 54.0419L58.226 53.7325C59.238 53.5873 60 52.7084 60 51.6883V49.2219C60 48.2159 59.246 47.3339 58.2461 47.1707ZM46.7992 54.6562C45.9481 51.7904 44.3933 49.1761 42.2548 47.0376C42.0801 46.8622 41.8968 46.6942 41.7138 46.5265C42.5001 45.9881 43.4234 45.692 44.4038 45.692C47.0557 45.692 49.2138 47.849 49.2138 50.501C49.2138 52.2287 48.2549 53.8054 46.7992 54.6562ZM20.1402 39.3323C20.2228 39.3623 20.3042 39.3948 20.3874 39.4226C21.4808 39.7951 22.6188 39.9919 23.7698 39.9919C24.9287 39.9919 26.0768 39.7921 27.1821 39.4147C27.2653 39.3867 27.3472 39.3545 27.4299 39.3244C27.6841 39.2307 27.9353 39.1273 28.184 39.0143C28.2504 38.9842 28.3194 38.9631 28.3852 38.9316V42.3113L23.7966 46.4546L19.1936 42.2519V38.9447C19.2661 38.9793 19.3422 39.0026 19.4153 39.0354C19.6544 39.1434 19.8959 39.2424 20.1402 39.3323ZM19.6593 8.02263V11.522C19.6593 12.0925 20.121 12.5542 20.6915 12.5542C21.262 12.5542 21.7236 12.0925 21.7236 11.522V6.62433V3.01885C21.7236 2.49269 22.152 2.06431 22.6782 2.06431H24.9037C25.4299 2.06431 25.8583 2.49269 25.8583 3.01885V6.62433C25.8583 6.79959 25.9144 6.95948 25.9933 7.10608V11.9806C25.9933 12.5512 26.455 13.0128 27.0255 13.0128C27.596 13.0128 28.0577 12.5512 28.0577 11.9806V8.07315C32.3629 9.69849 35.3667 13.6398 35.7585 18.2572H11.8234C12.2193 13.5924 15.2817 9.6159 19.6593 8.02263ZM8.90737 22.411V21.3638C8.90737 20.7892 9.37506 20.3225 9.9496 20.3225H37.6323C38.2068 20.3225 38.6745 20.7892 38.6745 21.3638V22.411C38.6745 22.9856 38.2068 23.4533 37.6323 23.4533H35.321H12.2306H9.9496C9.37506 23.4533 8.90737 22.9856 8.90737 22.411ZM13.3031 25.5176H34.2657C34.0278 30.0242 31.9917 34.0933 28.8318 36.2867C28.6067 36.4433 28.3687 36.5659 28.1353 36.7008C25.3844 38.2751 22.087 38.2657 19.3642 36.6654C19.1583 36.5426 18.9484 36.4357 18.7471 36.2947C15.5962 34.1256 13.542 30.0343 13.3031 25.5176ZM43.1751 66.0558H36.9146V56.0407C36.9146 55.4702 36.453 55.0086 35.8825 55.0086C35.312 55.0086 34.8503 55.4702 34.8503 56.0407V66.0558H13.8383V56.0407C13.8383 55.4702 13.3767 55.0086 12.8062 55.0086C12.2357 55.0086 11.774 55.4702 11.774 56.0407V66.0558H4.39774C3.11158 66.0558 2.06431 65.0096 2.06431 63.7234V59.873C2.06431 51.1322 9.06366 43.9978 17.809 43.7872L23.0934 48.613C23.291 48.7935 23.54 48.8832 23.7899 48.8832C24.0379 48.8832 24.2849 48.7945 24.4814 48.6171L24.5305 48.5728L29.8417 43.7879C31.0815 43.8202 32.3183 43.9936 33.5208 44.305C35.7061 44.8796 37.7119 45.8976 39.492 47.338C39.9476 47.6968 40.385 48.0859 40.7943 48.4961C42.9543 50.6562 44.4431 53.3616 45.1013 56.325C45.3644 57.4771 45.4974 58.6705 45.4974 59.873V63.7234C45.4974 63.9494 45.4672 64.1469 45.4135 64.3308C45.4068 64.3493 45.3992 64.3674 45.3936 64.3867C45.1104 65.3694 44.1982 66.0558 43.1751 66.0558ZM57.9357 49.2219L57.9236 51.6904L55.2293 52.1026C54.8191 52.1651 54.4854 52.4685 54.3846 52.8707C54.1216 53.9159 53.7083 54.9017 53.1549 55.8028C52.9342 56.1607 52.9533 56.6173 53.2033 56.956L54.8271 59.1594C54.8271 59.1584 54.7999 59.119 54.7818 59.0384C54.7959 59.0989 54.811 59.113 54.8352 59.1705L53.0753 60.9193L50.8668 59.2985C50.6854 59.1664 50.4707 59.0989 50.256 59.0989C50.0716 59.0989 49.8871 59.1483 49.7218 59.2481C49.0475 59.6553 48.3238 59.9869 47.5617 60.2369V59.873C47.5617 59.258 47.5214 58.6468 47.4597 58.0389C47.4406 57.8495 47.411 57.6635 47.386 57.4753C47.3535 57.2323 47.3329 56.9871 47.2906 56.7463C49.7097 55.6325 51.2781 53.2275 51.2781 50.501C51.2781 46.711 48.1947 43.6277 44.4038 43.6277C42.8203 43.6277 41.2841 44.183 40.0665 45.1759C39.901 45.0548 39.726 44.9515 39.5571 44.8365C39.377 44.7139 39.1979 44.5904 39.0141 44.4747C38.668 44.257 38.313 44.057 37.9542 43.8642C37.7955 43.779 37.6409 43.6859 37.4798 43.6056C36.9581 43.3454 36.4259 43.107 35.8799 42.8989C35.8109 42.8726 35.7385 42.8542 35.6691 42.8287C35.2514 42.6754 34.8306 42.5287 34.3998 42.406L33.9038 41.7357L35.6587 39.9889L37.8571 41.6087C38.1978 41.8607 38.6574 41.8778 39.0172 41.6521C39.4305 41.394 39.8498 41.1793 40.3447 40.9787C40.3911 40.9556 40.4304 40.9404 40.4697 40.9293C40.5191 40.9162 40.5675 40.8991 40.6149 40.8789C41.0059 40.7086 41.4384 40.5685 41.9363 40.4516C42.3486 40.3538 42.66 40.0141 42.7205 39.5948L43.1338 36.8874L45.6033 36.8975L46.0155 39.6019C46.079 40.0202 46.3915 40.3568 46.8037 40.4526C47.7996 40.6824 48.7844 41.0886 49.7319 41.6611C50.0907 41.8778 50.5433 41.8577 50.8779 41.6087L53.0793 39.9929L54.8241 41.7448L53.2033 43.9432C52.9523 44.2838 52.9342 44.7415 53.1569 45.1003C53.7053 45.9833 54.1175 46.968 54.3846 48.0284C54.4854 48.4306 54.8191 48.734 55.2293 48.7965L57.9236 49.2098L58.0798 48.1897L57.9357 49.2219Z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="why-disc">
                            <h4>On Time Delivery</h4>
                            <p>On-time delivery tailored to your requirements.</p>
                        </div>
                    </div>
                    <div class="why-choose-box">
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="white">
                                <path
                                    d="M55.1859 4.3288H47.5171C47.0317 4.3288 46.6382 4.72231 46.6382 5.2077C46.6382 5.69309 47.0317 6.08661 47.5171 6.08661H55.1859C55.6713 6.08661 56.0648 5.69309 56.0648 5.2077C56.0648 4.72231 55.6714 4.3288 55.1859 4.3288Z"
                                    fill="#fff"></path>
                                <path
                                    d="M43.1621 6.08661H44.0969C44.5823 6.08661 44.9758 5.69309 44.9758 5.2077C44.9758 4.72231 44.5823 4.3288 44.0969 4.3288H43.1621C42.6767 4.3288 42.2832 4.72231 42.2832 5.2077C42.2832 5.69309 42.6767 6.08661 43.1621 6.08661Z"
                                    fill="#fff"></path>
                                <path
                                    d="M43.1621 10.2153H55.186C55.6714 10.2153 56.0649 9.82181 56.0649 9.33642C56.0649 8.85103 55.6714 8.45752 55.186 8.45752H43.1621C42.6767 8.45752 42.2832 8.85103 42.2832 9.33642C42.2832 9.82181 42.6767 10.2153 43.1621 10.2153Z"
                                    fill="#fff"></path>
                                <path
                                    d="M46.3409 52.0062C46.3409 48.4954 45.1688 45.0511 43.0339 42.2683L43.1968 39.2677C43.3076 37.2251 41.6867 35.4971 39.6251 35.4971H30.0043C29.5617 35.1843 29.2932 34.6763 29.2932 34.1277V31.6736C30.7849 30.7089 31.8322 29.6088 32.6015 28.2996H34.3024C36.27 28.2996 37.8708 26.6988 37.8708 24.7311V18.1672C37.8708 17.0601 37.2304 16.0815 36.2726 15.6185V11.0119C36.2726 8.91469 34.5665 7.20845 32.4693 7.20845H32.3708C32.3108 7.20845 32.262 7.15958 32.262 7.09969C32.262 5.00251 30.5558 3.29626 28.4586 3.29626H19.1505C14.5302 3.29626 10.7712 7.05528 10.7712 11.6756V15.6184C9.8135 16.0814 9.17295 17.06 9.17295 18.1671V21.5053C9.17295 23.0672 10.4436 24.3378 12.0055 24.3378H13.1401C13.4338 26.8217 14.599 29.0902 16.424 30.6673C16.8522 31.0374 17.2951 31.368 17.7506 31.6633V34.1275C17.7506 34.6746 17.4811 35.1827 17.0365 35.497H7.41901C5.37339 35.497 3.7357 37.2091 3.84749 39.2676L4.01038 42.2682C1.87535 45.0511 0.703241 48.4954 0.703241 52.0062V55.3166C0.266249 55.8064 0 56.4515 0 57.1579C0 58.6846 1.24207 59.9265 2.76878 59.9265H44.2753C45.8021 59.9265 47.0441 58.6845 47.0441 57.1579C47.0441 56.4515 46.7779 55.8064 46.3409 55.3167V52.0062ZM44.5831 52.0062V54.4066C44.4819 54.3953 44.3794 54.3891 44.2753 54.3891H42.376L42.872 45.2497C43.9845 47.3158 44.5831 49.6435 44.5831 52.0062ZM36.0229 17.7381C36.0807 17.8703 36.1133 18.0153 36.1133 18.1673V21.5055C36.1133 22.0981 35.6311 22.5803 35.0385 22.5803H33.9933V19.267L34.535 19.0783C35.2051 18.8449 35.732 18.3527 36.0229 17.7381ZM30.155 27.9214H27.9493C27.5937 27.9214 27.3044 27.6322 27.3044 27.2766C27.3044 26.9211 27.5937 26.6319 27.9493 26.6319H30.155C30.5105 26.6319 30.7997 26.9211 30.7997 27.2766C30.7997 27.6322 30.5105 27.9214 30.155 27.9214ZM34.3026 26.5419H33.4142C33.6617 25.8362 33.8326 25.097 33.9227 24.3381H35.0385C35.4188 24.3381 35.7816 24.2622 36.1133 24.1257V24.7313C36.1133 25.7297 35.3009 26.5419 34.3026 26.5419ZM12.5292 11.6759C12.5292 8.02477 15.4997 5.05431 19.1507 5.05431H28.4588C29.5867 5.05431 30.5044 5.972 30.5044 7.09993C30.5044 8.12919 31.3419 8.96649 32.371 8.96649H32.4695C33.5975 8.96649 34.515 9.88418 34.515 11.0121V16.6328C34.515 16.9864 34.2906 17.3021 33.9567 17.4185L32.1097 18.0617C32.0353 18.0875 31.9585 18.0339 31.9585 17.9538L31.9619 14.4612C31.9726 11.9122 29.5858 9.68918 26.2417 10.7633C24.5599 11.3038 22.4785 11.3019 20.8023 10.7633C17.4929 9.69973 15.0715 11.8833 15.0821 14.4585L15.0862 17.954C15.0862 18.0347 15.0077 18.0878 14.9351 18.0617L13.0875 17.4184C12.7535 17.3021 12.5291 16.9863 12.5291 16.6326L12.5292 11.6759ZM10.931 21.5055V18.1672C10.931 18.0153 10.9636 17.8701 11.0213 17.738C11.3123 18.3527 11.8393 18.8449 12.5096 19.0783L13.0511 19.2669V22.5801H12.0058C11.4131 22.5803 10.931 22.098 10.931 21.5055ZM14.825 23.3229C14.7958 22.1674 14.8138 20.9409 14.8088 19.818C14.863 19.8227 14.9172 19.8254 14.9715 19.8254C16.0165 19.8254 16.8458 18.976 16.844 17.9515L16.8399 14.4537C16.834 13.0266 18.1141 11.7456 20.2645 12.4368C22.3026 13.0916 24.7481 13.0896 26.7795 12.4368C28.8283 11.7785 30.2104 12.9374 30.2041 14.4566L30.2007 17.9517C30.1993 19.0411 31.1304 19.9139 32.2353 19.818V23.394C32.2097 24.1536 32.0847 24.8949 31.8726 25.5999C31.4361 25.1527 30.8278 24.874 30.155 24.874H27.9493C26.6245 24.874 25.5466 25.9517 25.5466 27.2765C25.5466 28.6013 26.6245 29.6791 27.9493 29.6791H29.066C27.4426 30.9463 25.5965 31.607 23.5681 31.6406C19.1309 31.6051 14.9519 28.327 14.825 23.3229ZM19.5088 34.1278V32.5899C20.7792 33.116 22.1345 33.3885 23.5658 33.3986H23.572C23.5766 33.3986 23.5811 33.3986 23.5857 33.3985C24.9792 33.3768 26.2985 33.1068 27.5357 32.5971V34.1277C27.5357 34.6075 27.6362 35.0721 27.8211 35.4971H19.2223C19.4079 35.0719 19.5088 34.6073 19.5088 34.1278ZM4.1721 45.2497L4.31085 47.8068C4.33722 48.2916 4.75241 48.6644 5.23604 48.6368C5.72073 48.6106 6.09233 48.1963 6.06608 47.7116L5.60261 39.1726C5.54624 38.1338 6.37053 37.255 7.41901 37.255H39.6252C40.666 37.255 41.4984 38.126 41.4416 39.1726L40.6157 54.3892H26.8335C27.0015 53.3853 27.4536 52.441 28.15 51.6673L28.1752 51.6392C30.8356 48.6629 30.0393 44.0086 26.6006 42.0547C25.7182 41.5533 24.5975 42.1785 24.5975 43.2179V47.2057C24.5975 47.3886 24.4488 47.5372 24.266 47.5372H22.7782C22.5953 47.5372 22.4466 47.3884 22.4466 47.2057V43.2179C22.4466 42.1805 21.3277 41.5523 20.4436 42.0547C16.995 44.014 16.2149 48.67 18.8716 51.6421L18.8941 51.6673C19.5905 52.4409 20.0427 53.3852 20.2106 54.3891H6.42854L6.28757 51.7907C6.26132 51.306 5.84706 50.9339 5.36237 50.9607C4.87769 50.9869 4.50608 51.4012 4.53233 51.8859L4.66816 54.3891H2.76878C2.66472 54.3891 2.56218 54.3954 2.46105 54.4066V52.0062C2.46105 49.6436 3.05976 47.3158 4.1721 45.2497ZM21.9866 54.3891C21.8067 52.949 21.1893 51.5895 20.2007 50.4913L20.1795 50.4675C18.4814 48.5679 18.7088 45.6304 20.6889 44.0103V47.2056C20.6889 48.3577 21.6262 49.2948 22.7783 49.2948H24.2661C25.4182 49.2948 26.3554 48.3576 26.3554 47.2056V44.0103C28.3224 45.6196 28.5744 48.555 26.8626 50.47L26.8436 50.4912C25.8549 51.5895 25.2376 52.949 25.0577 54.3891H21.9866ZM44.2753 58.1689H2.76878C2.21132 58.1689 1.75781 57.7153 1.75781 57.158C1.75781 56.6007 2.21132 56.147 2.76878 56.147H44.2753C44.8328 56.147 45.2863 56.6005 45.2863 57.158C45.2863 57.7155 44.8328 58.1689 44.2753 58.1689Z"
                                    fill="#fff"></path>
                                <path
                                    d="M59.1209 6.01487C59.6063 6.01487 59.9998 5.62136 59.9998 5.13597V3.43488C59.9998 1.5409 58.4589 0 56.5648 0H41.7827C39.8886 0 38.3477 1.5409 38.3477 3.43488V10.828C38.3477 12.7221 39.8886 14.263 41.7827 14.263C42.1211 14.263 42.3965 14.5384 42.3965 14.8768V19.4489C42.3965 20.1092 42.824 20.6712 43.4604 20.8474C44.1006 21.0246 44.7545 20.7581 45.0921 20.1951L48.4706 14.5611C48.5809 14.3772 48.7827 14.263 48.9972 14.263H56.5649C58.459 14.263 59.9999 12.7221 59.9999 10.828V9.24502C59.9999 8.75963 59.6064 8.36612 59.121 8.36612C58.6356 8.36612 58.2421 8.75963 58.2421 9.24502V10.828C58.2421 11.7528 57.4897 12.5052 56.5649 12.5052H48.9971C48.1685 12.5052 47.3891 12.9466 46.963 13.6571L44.1542 18.3411V14.8768C44.1542 13.5691 43.0902 12.5052 41.7825 12.5052C40.8577 12.5052 40.1054 11.7528 40.1054 10.828V3.43488C40.1054 2.51015 40.8577 1.75781 41.7825 1.75781H56.5648C57.4896 1.75781 58.242 2.51015 58.242 3.43488V5.13597C58.242 5.62136 58.6355 6.01487 59.1209 6.01487Z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="why-disc">
                            <h4>Quick Support</h4>
                            <p> Our dedicated support team is here for you, ready to help with any 
questions or issues.</p>
                        </div>
                    </div>
                    <div class="why-choose-box">
                        <div class="why-icon">
                      <i class="fa fa-usd" aria-hidden="true"></i>

                        </div>
                        <div class="why-disc">
                            <h4>Competitive Pricing</h4>
                            <p> Competitive pricing tailored to fit your budget and needs.</p>
                        </div>
                    </div>

                    <div class="why-choose-box range-box" style="display:none;">

                        <div class="range-text">Providing Quality</div>


                        <div class="range-parsent">95%</div>
                    </div>
                    <div class="range-line" style="display:none;" ></div>

                </div>
                <div class="col-md-12 col-lg-5 posi">
                    <div class="why-choose-img">
                        <img class="img-fluid phone-img" src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/05/right_img_choose_us.png" alt="">

                    </div>
                    <div class="video-img" style="display:none;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-img.jpg" alt="">
                        <!-- <div class="vedio-icon">
                        <svg fill="#fff" aria-hidden="true" class="e-font-icon-svg e-fas-play" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg>
                    </div> -->
                        <a id="play-video" class="video-play-button" href="#">
                            <span></span>
                        </a>

                        <div id="video-overlay" class="video-overlay">
                            <svg fill="#fff" aria-hidden="true" class="e-font-icon-svg e-fas-play" viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="QUESTION bg-white" style="display:none;">
        <div class="container-fluid">
            <div class="row mob-gap">
                <div class="col-md-12 col-lg-6">
                    <div class="ouestion-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/faqs.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="tab-box-left our-box">
                        <span>QUESTION</span>
                        <h2>Do You Have Questions For Our Construction
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                    <div class="accordion-box">
                        <div class="accordion">
                            <div class="accordion__header is-active">
                                <h2>01. Can i use green energy in my home or business?</h2>
                                <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body is-active">
                                <p>Randomised words which don’t look even slightly believable. If you are going passage
                                    of you need sure there anything.</p>
                            </div>
                            <div class="accordion__header">
                                <h2>02. How do i get started with green energy?</h2>
                                <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                <p>Randomised words which don’t look even slightly believable. If you are going passage
                                    of you need sure there anything.</p>

                            </div>
                            <div class="accordion__header">
                                <h2>03. Green energy reliable during bad weather?</h2>
                                <span class="accordion__toggle"></span>
                            </div>
                            <div class="accordion__body">
                                <p>Randomised words which don’t look even slightly believable. If you are going passage
                                    of you need sure there anything.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="ENGINEER expert_engeenier" style="display:none;">
        <div class="container-fluid">
            <div class="row">
                <div class="tab-box-left our-box text-center">
                    <span>ENGINEER</span>
                    <h2>Best Construction Experts
                    </h2>

                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12 col-lg-4">
                    <div class="eng-box">
                        <div class="engineer-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/engineer-1.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="engineer-disc">
                        <h4>Penelopa Miller</h4>
                        <span>CEO of Industrie</span>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="eng-box">
                        <div class="engineer-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/engineer-2.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="engineer-disc">
                        <h4>Penelopa Miller</h4>
                        <span>CEO of Industrie</span>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="eng-box">
                        <div class="engineer-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/engineer-3.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="engineer-disc">
                        <h4>Penelopa Miller</h4>
                        <span>CEO of Industrie</span>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="textmonial">
        <div class="container-fluid">
            <div class="row mob-gap align-items-center">
                <div class="col-md-12 col-lg-9">
                    <div class="tab-box-left our-box">
                        <span>TESTIMONIALS</span>
                        <h2>What People Say About Us
                        </h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 text-end mob-start" style="display:none;">
                    <div class="btn-box2 btn-4">
                        <a href="#">More Reviews <span><img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/MicrosoftTeams-image.png"
                                    alt=""></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="textmonials-boxs testimonial_context">

                    <div class="col-md-12 col-lg-4 px-2">
                        <div class="textmonials-box">
							 <?php echo do_shortcode('[wprevpro_usetemplate tid="3"]') ?>
                            <div class="box-textmonial" style="display:none;">
                                <div class="text-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/textmonials-img.jpg" alt="">
                                </div>
                                <div class="text-disc">
                                    <h4>Joshua Sendu</h4>
                                    <span>Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                 
				</div>
        </div>
        <div class="logo-slider-main">
            <div class="col-12 text-center">
                <div class="title-inner">
                    <span class="parents-text">
                        EXPERIENCE EXCELLENCE </span>
                    <h2 class="title "> Discover Our Brands
</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="logo-slider">
                        <div class=" logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/Logo-3.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/Logo-2.png" alt="">
                            </div>
                        </div>

                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/Logo-1.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-5.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-8.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-7.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-4.png" alt="">
                            </div>
                        </div>
						 <div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-9.png" alt="">
                            </div>
                        </div>
						<div class="logo-item">
                            <div>
                                <img src="https://rmsdemo.com/projects/pushan_trading/wp-content/uploads/2024/04/logo-6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>



            </div>

    </section>


    <section class="update-sec" style="display:none;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-9">
                    <div class="tab-box-left our-box">
                        <span>UPDATES</span>
                        <h2>Articles & Blog Posts With Useful <br>Information
                        </h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3 text-end mob-start">
                    <div class="btn-box2 btn-4">
                        <a href="#">More Reviews <span><img class="arrow-img" src="img/MicrosoftTeams-image.png"
                                    alt=""></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="update-box-img">
                        <div class="oil-box-building">
                            <ul>
                                <li>
                                    By <b>Sagar</b>

                                </li>
                                <li>Feb 8, 2024</li>
                            </ul>
                            <div class="supply-text">
                                <a href="#" class="text-white">
                                    <h3>Construction of a new high tech plant <br>in washingtons</h3>
                                </a>

                                <p>Industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type and...</p>

                                <div class="oil-box-btn1">
                                    <a href="#" class="btn-3">Company </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 bg-color-b p-0">
                            <div class="oil-box">
                                <ul>
                                    <li>
                                        By <b>Sagar</b>

                                    </li>
                                    <li>Feb 8, 2024</li>
                                </ul>
                                <div class="supply-text">
                                    <a href="#">
                                        <h3 class="f-size">Building resilient supply chains for</h3>
                                    </a>

                                    <p class="color-text">Industry's standard dummy text ever...</p>

                                    <div class="oil-box-btn">
                                        <a href="#" class="btn-1">Oil Factory</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="oil-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row mar-b">
                        <div class="col-lg-6 bg-color-b">
                            <div class=" oil-box">
                                <ul>
                                    <li>
                                        By <b>Sagar</b>

                                    </li>
                                    <li>Feb 8, 2024</li>
                                </ul>
                                <div class="supply-text">
                                    <a href="#">
                                        <h3 class="f-size">Factories technologies in interactive and</h3>
                                    </a>

                                    <p class="color-text">Industry's standard dummy text ever...</p>

                                    <div class="oil-box-btn">
                                        <a href="#" class="btn-1">Manufacture </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="oil-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact">
        <div class="container-fluid z-index1">
            <div class="row">
                <div class="col-lg-7 text-center2">
                    <div class="contect-box">
                        <span>CONTACT</span>
                        <h3>Have a Project in Mind? Contact Us</h3>
                        <p>Experience a vast range of marine supplies with exceptional service.</p>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 col-lg-6 text-center2">
                            <div class="add-box">
                                <div class="icon-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="35" viewBox="0 0 30 35"
                                        fill="none">
                                        <path
                                            d="M20.6984 22.653C24.3306 16.928 23.874 17.6423 23.9787 17.493C25.3011 15.6195 26 13.4144 26 11.1161C26 5.02098 21.0759 0 15 0C8.94387 0 4 5.01107 4 11.1161C4 13.4129 4.7136 15.6757 6.07933 17.5745L9.30147 22.6531C5.85647 23.1848 0 24.7696 0 28.2589C0 29.5309 0.826533 31.3436 4.76413 32.7562C7.5136 33.7425 11.1487 34.2857 15 34.2857C22.2017 34.2857 30 32.2452 30 28.2589C30 24.7689 24.1504 23.1859 20.6984 22.653ZM7.74993 16.4695C7.73893 16.4523 7.72747 16.4354 7.71547 16.4188C6.579 14.8483 6 12.9871 6 11.1161C6 6.09254 10.0271 2.00893 15 2.00893C19.9626 2.00893 24 6.09435 24 11.1161C24 12.9901 23.4319 14.7882 22.3569 16.3173C22.2606 16.4449 22.7632 15.6606 15 27.8966L7.74993 16.4695ZM15 32.2768C7.13373 32.2768 2 29.9543 2 28.2589C2 27.1195 4.63787 25.2459 10.4832 24.5156L14.1567 30.3055C14.3403 30.5949 14.6583 30.7701 14.9999 30.7701C15.3416 30.7701 15.6597 30.5948 15.8432 30.3055L19.5166 24.5156C25.3621 25.2459 28 27.1195 28 28.2589C28 29.9399 22.9125 32.2768 15 32.2768Z"
                                            fill="#EE5C03"></path>
                                        <path
                                            d="M15.0039 6.09375C12.2469 6.09375 10.0039 8.34676 10.0039 11.1161C10.0039 13.8854 12.2469 16.1384 15.0039 16.1384C17.7609 16.1384 20.0039 13.8854 20.0039 11.1161C20.0039 8.34676 17.7609 6.09375 15.0039 6.09375ZM15.0039 14.1295C13.3497 14.1295 12.0039 12.7777 12.0039 11.1161C12.0039 9.45449 13.3497 8.10268 15.0039 8.10268C16.6581 8.10268 18.0039 9.45449 18.0039 11.1161C18.0039 12.7777 16.6581 14.1295 15.0039 14.1295Z"
                                            fill="#EE5C03"></path>
                                    </svg>
                                </div>

                                <div class="add-disc">
                                    <h2>United Arab Emirates</h2>
                                    <p><a href="https://maps.app.goo.gl/pSDsfogGUY3Spsk77" target="_blank">Deira St, Dubai, United Arab Emirates</a></p>
									

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="add-box">
                                <div class="icon-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                        <path
                                            d="M23.7225 18.5848C23.1074 17.9453 22.3655 17.6034 21.5792 17.6034C20.7993 17.6034 20.051 17.9389 19.4106 18.5784L17.4068 20.573C17.242 20.4843 17.0771 20.402 16.9186 20.3197C16.6903 20.2057 16.4747 20.0981 16.2908 19.9841C14.4139 18.7937 12.7081 17.2424 11.0722 15.2353C10.2795 14.2348 9.74688 13.3927 9.36008 12.5379C9.88004 12.063 10.362 11.5691 10.8312 11.0943C11.0087 10.917 11.1863 10.7333 11.3638 10.556C12.6955 9.22637 12.6955 7.50412 11.3638 6.17444L9.63274 4.44585C9.43617 4.24957 9.23326 4.04695 9.04303 3.84433C8.66256 3.45176 8.26308 3.04652 7.85091 2.66662C7.23583 2.05876 6.50028 1.73584 5.72667 1.73584C4.95307 1.73584 4.20483 2.05876 3.57072 2.66662C3.56438 2.67295 3.56438 2.67295 3.55804 2.67928L1.40209 4.85109C0.590443 5.66156 0.127549 6.64932 0.0260924 7.79538C-0.126092 9.64427 0.419236 11.3665 0.837743 12.4936C1.86499 15.2606 3.39952 17.825 5.68862 20.573C8.46599 23.8845 11.8077 26.4995 15.625 28.3421C17.0834 29.0323 19.0301 29.8491 21.2051 29.9884C21.3383 29.9947 21.4778 30.001 21.6046 30.001C23.0694 30.001 24.2995 29.4755 25.2634 28.4307C25.2697 28.4181 25.2824 28.4117 25.2887 28.3991C25.6185 28.0002 25.9989 27.6393 26.3984 27.253C26.6711 26.9934 26.9501 26.7212 27.2227 26.4362C27.8505 25.784 28.1802 25.0242 28.1802 24.2454C28.1802 23.4603 27.8442 22.7068 27.2037 22.0736L23.7225 18.5848ZM25.9926 25.2522C25.9862 25.2522 25.9862 25.2585 25.9926 25.2522C25.7453 25.5181 25.4916 25.7587 25.219 26.0247C24.8068 26.4172 24.3883 26.8288 23.9952 27.291C23.3547 27.9749 22.6001 28.2978 21.6109 28.2978C21.5158 28.2978 21.4144 28.2978 21.3192 28.2914C19.436 28.1711 17.6858 27.4366 16.3732 26.8098C12.7842 25.0749 9.63274 22.6118 7.0139 19.4902C4.85161 16.8879 3.40586 14.4818 2.44836 11.8984C1.85865 10.3218 1.64305 9.0934 1.73817 7.93468C1.80158 7.19386 2.08692 6.57967 2.61323 6.05413L4.77552 3.89499C5.08623 3.60372 5.41596 3.44543 5.73935 3.44543C6.13884 3.44543 6.46223 3.68604 6.66514 3.88865C6.67148 3.89499 6.67782 3.90132 6.68417 3.90765C7.07097 4.26856 7.43875 4.64214 7.82555 5.04104C8.02212 5.24366 8.22503 5.44628 8.42795 5.65523L10.159 7.38381C10.8312 8.05498 10.8312 8.6755 10.159 9.34667C9.97515 9.5303 9.79761 9.71392 9.61372 9.89121C9.08107 10.4357 8.57379 10.9423 8.02212 11.4362C8.00944 11.4488 7.99676 11.4552 7.99042 11.4678C7.44509 12.0124 7.54654 12.5442 7.66068 12.9051C7.66702 12.9241 7.67336 12.9431 7.67971 12.9621C8.12992 14.0512 8.76402 15.077 9.72785 16.299L9.7342 16.3053C11.4843 18.4581 13.3296 20.1361 15.365 21.4214C15.625 21.5861 15.8913 21.719 16.145 21.8457C16.3732 21.9596 16.5888 22.0673 16.7727 22.1812C16.7981 22.1939 16.8235 22.2129 16.8488 22.2256C17.0644 22.3332 17.2673 22.3839 17.4766 22.3839C18.0029 22.3839 18.3326 22.0546 18.4404 21.947L20.609 19.7815C20.8246 19.5662 21.1671 19.3066 21.5665 19.3066C21.9597 19.3066 22.2831 19.5535 22.4796 19.7688C22.486 19.7752 22.486 19.7752 22.4923 19.7815L25.9862 23.2703C26.6394 23.9162 26.6394 24.581 25.9926 25.2522Z"
                                            fill="#EE5C03"></path>
                                        <path
                                            d="M16.2163 7.13613C17.8777 7.41473 19.3869 8.19988 20.5917 9.40292C21.7964 10.606 22.5764 12.1129 22.8617 13.7719C22.9315 14.1898 23.2929 14.481 23.7051 14.481C23.7558 14.481 23.8002 14.4747 23.8509 14.4684C24.3202 14.3924 24.6309 13.9492 24.5548 13.4806C24.2124 11.4734 23.2612 9.64353 21.8091 8.19355C20.357 6.74356 18.5245 5.79379 16.5144 5.45187C16.0451 5.37589 15.6076 5.68615 15.5252 6.14837C15.4427 6.61059 15.7471 7.06015 16.2163 7.13613Z"
                                            fill="#EE5C03"></path>
                                        <path
                                            d="M29.9883 13.2338C29.4239 9.92864 27.864 6.92103 25.4671 4.52761C23.0702 2.13419 20.0582 0.576563 16.7482 0.0130318C16.2853 -0.0692817 15.8478 0.247309 15.7654 0.709531C15.6893 1.17808 16 1.61498 16.4692 1.69729C19.4241 2.19751 22.1191 3.59683 24.2623 5.73065C26.4056 7.8708 27.8006 10.5618 28.3016 13.5124C28.3713 13.9303 28.7328 14.2216 29.1449 14.2216C29.1956 14.2216 29.24 14.2153 29.2908 14.2089C29.7537 14.1393 30.0707 13.6961 29.9883 13.2338Z"
                                            fill="#EE5C03"></path>
                                    </svg>
                                </div>

                                <div class="add-disc">
                                    <h2>Phone Number</h2>
                                  <li><a href="tel:+971 4 221 6013">+971 4 221 6013</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gaprow">
                        <div class="col-md-12 col-lg-6">
                            <div class="add-box">
                                <div class="icon-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 30 30"
                                        fill="none">
                                        <path
                                            d="M0.590569 30H29.4095C29.5661 30 29.7163 29.9369 29.8271 29.8245C29.9378 29.7121 30 29.5597 30 29.4007V12.5559C29.997 12.4559 29.9726 12.3579 29.9283 12.2685C29.884 12.1792 29.8209 12.1008 29.7436 12.0388L28.1779 10.669V2.83051C28.1753 2.67336 28.1119 2.52356 28.0014 2.41338C27.891 2.30321 27.7423 2.24148 27.5875 2.24151H18.4097L16.4594 0.529288C16.0484 0.187052 15.5333 0 15.0017 0C14.4701 0 13.955 0.187052 13.5441 0.529288L11.5904 2.24151H2.41263C2.25776 2.24148 2.10909 2.30321 1.99863 2.41338C1.88818 2.52356 1.8248 2.67336 1.82215 2.83051V10.6862L0.273395 12.0251C0.187807 12.0834 0.117959 12.1625 0.0702202 12.2552C0.0224812 12.348 -0.00162984 12.4513 8.55304e-05 12.5559V29.4007C8.55304e-05 29.5597 0.062297 29.7121 0.173034 29.8245C0.283771 29.9369 0.433963 30 0.590569 30ZM9.38033 20.9355L1.19117 28.0583V13.8504L9.38033 20.9355ZM28.8055 13.8332V28.0994L20.6063 20.9389L28.8055 13.8332ZM19.486 21.5485L27.8 28.8014H2.15619L10.4837 21.5485H19.486ZM28.4917 12.5148L28.1779 12.7854V12.2614L28.4917 12.5148ZM14.31 1.45389C14.5083 1.29894 14.7515 1.21492 15.0017 1.21492C15.252 1.21492 15.4952 1.29894 15.6934 1.45389L16.591 2.24151H13.4125L14.31 1.45389ZM3.00311 3.42979H26.997V13.8093L19.459 20.3499H10.5208L2.98287 13.823C2.99644 13.7739 3.00326 13.7232 3.00311 13.6723V3.42979ZM1.82215 12.8196L1.48473 12.5388L1.82215 12.258V12.8196Z"
                                            fill="#EE5C03"></path>
                                        <path
                                            d="M13.2998 16.7201C14.7914 17.1362 16.3818 16.9802 17.7673 16.2817C17.9069 16.2095 18.0125 16.084 18.0609 15.9328C18.1093 15.7815 18.0965 15.617 18.0254 15.4753C17.9542 15.3336 17.8306 15.2264 17.6815 15.1773C17.5325 15.1281 17.3704 15.1411 17.2308 15.2133C16.1244 15.7667 14.8603 15.9026 13.6642 15.5968C10.4284 14.3401 11.3023 10.8437 11.3293 10.6965C11.5891 9.70339 12.8679 7.183 15.682 7.39874C18.8436 7.64873 18.8335 10.6109 18.7998 11.2033C18.7289 12.4361 18.0304 13.371 17.4703 13.371H17.4501C17.4047 13.3739 17.3591 13.3668 17.3166 13.3502C17.2741 13.3337 17.2356 13.3081 17.2038 13.2751C17.0698 13.0413 17.013 12.7701 17.0418 12.5012L17.44 9.29588C17.44 9.26849 17.44 9.24452 17.44 9.22055C17.4415 9.07215 17.3887 8.92845 17.2919 8.81728C17.195 8.7061 17.061 8.63535 16.9156 8.61873C16.7703 8.60211 16.6241 8.64079 16.5053 8.7273C16.3865 8.8138 16.3035 8.94197 16.2725 9.08699C15.9262 8.80318 15.4991 8.63991 15.0544 8.62127H15.0038C13.8026 8.62127 12.4158 9.59039 12.1627 11.4225C12.0368 12.0696 12.1644 12.741 12.5185 13.2941C12.8726 13.8472 13.4252 14.2384 14.059 14.3846C14.4264 14.4475 14.8027 14.4315 15.1636 14.3377C15.5245 14.244 15.862 14.0744 16.1544 13.8401C16.2012 13.9164 16.2543 13.9886 16.313 14.0559C16.4488 14.2145 16.6161 14.3423 16.8039 14.4308C16.9917 14.5193 17.1958 14.5666 17.4028 14.5695C18.7087 14.6312 19.8728 13.1415 19.9807 11.2718C20.1123 8.92262 18.8639 6.44675 15.7697 6.20362C12.544 5.95021 10.6612 8.5699 10.1888 10.3917C9.23056 14.0764 11.6735 16.0968 13.2998 16.7201ZM15.8777 12.2683C15.7564 12.5814 15.5344 12.8438 15.2478 13.0128C14.9612 13.1819 14.6267 13.2478 14.2986 13.1997C13.9599 13.113 13.6684 12.8945 13.4871 12.5914C13.3059 12.2883 13.2495 11.925 13.3302 11.58C13.5124 10.2821 14.4403 9.80955 15.0173 9.80955H15.0409C15.5639 9.80955 15.9519 10.4431 15.9621 10.4568C15.9967 10.5185 16.0425 10.5731 16.097 10.6177L15.8777 12.2683Z"
                                            fill="#EE5C03"></path>
                                    </svg>
                                </div>

                                <div class="add-disc">
                                    <h2>Email Address</h2>
                                    <li><p>Interested in working with us?</p></li>
                                    <li><a href="mailto:sales@pusantrading.com"> sales@pusantrading.com</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="add-box">
                                <div class="icon-add">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="50"
                                        height="30">
                                        <path
                                            d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z">
                                        </path>
                                        <path
                                            d="M12,6a1,1,0,0,0-1,1v4.325L7.629,13.437a1,1,0,0,0,1.062,1.7l3.84-2.4A1,1,0,0,0,13,11.879V7A1,1,0,0,0,12,6Z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="add-disc">
                                    <h2>Opening Hour</h2>
									<p>Mon - Sat </p>
									<p>8:00 to 13:15 & 16:00 to 20:00 </p>
									<p>Sunday - Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" id="contact">

                        <h3>Get in Touch</h3>
                        
 <?php echo do_shortcode('[contact-form-7 id="0c2bfb4" title="Contact form 1"]'); ?>
                 
<!--                         <fieldset>
                            <input class="input-bg-color" placeholder="Fill Name" type="text" tabindex="1" required>
                        </fieldset>
                        <fieldset>
                            <input class="input-bg-color" placeholder=" Email Address" type="email" tabindex="2"
                                required>
                        </fieldset>
                        <fieldset>
                            <input class="input-bg-color" placeholder="Your Inquiry (optional)" type="tel" tabindex="3"
                                required>
                        </fieldset>

                        <fieldset>
                            <textarea class="input-bg-color" placeholder="Write Here..." tabindex="5"
                                required></textarea>
                        </fieldset>
                        <fieldset>
                            <button class="submit-btn" name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Send Message <span><img class="arrow-img"
                                        src="img/MicrosoftTeams-image.png" alt=""></span></button>
                        </fieldset> -->

					

                </div>
            </div>
        </div>
    </section>

    
<?php
get_footer();
