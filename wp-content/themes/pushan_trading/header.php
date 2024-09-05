<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fancybox.css">
	<?php wp_head();?>
</head>
<body <?php body_class( 'class-name' ); ?>>
    <header class="main-navbar">
        <div class="top-main-header">
            <div class="container-fluid">
                <div class="custom-container">
                    <div class="row">
                        <div class="top-header">
                            <div class="top-left">
                                <ul>
                                    <li><a href="https://maps.app.goo.gl/MgP6As7jq1ZJhvgB8">
                                            <!-- <span><i class="fa fa-map-marker" aria-hidden="true"></i> </span>-->
                                            <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" width="18"
                                                height="22" viewBox="0 0 18 22" fill="none">
                                                <path
                                                    d="M9 18.8995L13.9497 13.9497C16.6834 11.2161 16.6834 6.78392 13.9497 4.05025C11.2161 1.31658 6.78392 1.31658 4.05025 4.05025C1.31658 6.78392 1.31658 11.2161 4.05025 13.9497L9 18.8995ZM9 21.7279L2.63604 15.364C-0.87868 11.8492 -0.87868 6.15076 2.63604 2.63604C6.15076 -0.87868 11.8492 -0.87868 15.364 2.63604C18.8787 6.15076 18.8787 11.8492 15.364 15.364L9 21.7279ZM9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.8954 7 7 7.89543 7 9C7 10.1046 7.8954 11 9 11ZM9 13C6.79086 13 5 11.2091 5 9C5 6.79086 6.79086 5 9 5C11.2091 5 13 6.79086 13 9C13 11.2091 11.2091 13 9 13Z"
                                                    fill="#ee5c03"></path>
                                            </svg>Deira St, Dubai
                                        </a></li>
                                    <li><a href="mailto:sales@pusantrading.com?subject=">
  <span>
    <i class="fa fa-envelope-o" aria-hidden="true"></i>
  </span>
  sales@pusantrading.com
</a>
</li>
                                    <li>
										
									<a href="tel:+97142216013">
    <span><i class="fa fa-phone" aria-hidden="true"></i></span> +971 4 221 6013
</a>
									</li>

                                </ul>
                            </div>
                            <div class="top-right">
                                <ul>
                                    <li><a href="#">Follow Us:</a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg header_main">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">
           <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        } ?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none"><path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path></svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu', // The location registered in functions.php
            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0', // Add Bootstrap classes
            'container' => false, // Avoid extra div wrapping
        )
    );
    ?>
            </ul>
          </div>
          <div class="search_btn">
            <div class="search_item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <span><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
              
                <div class="search_head">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<span class="fa fa-search"></span>
                    <input placeholder="Searching...." name="s">
						<input type="hidden" name="post_type" value="product" />
					</form>
                    
                  </div>
           
                <div>
               <a href="https://wa.me/97142216013" target="_blank" rel="noopener noreferrer">
  Get In Touch
  <i class="fa fa-whatsapp whatsapp-button" aria-hidden="true"></i> <!-- WhatsApp icon -->
</a></div>
          </div>
        </div>
      </nav>


        <!-- offcanvas -->

        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/green-logo.png" alt="">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus fugit, tempora nisi quisquam
                    amet asperiores a excepturi voluptatem recusandae suscipit quae cupiditate et officiis pariatur
                    voluptas ullam commodi obcaecati repellat nobis quasi consequuntur assumenda.

                </p>
            </div>
        </div>
        <!-- offcanvas -->
        <!-- modale-popo -->



        <div id="popup1" class="overlay">
            <div class="popup">

                <a class="close" href="#"><i class="fa fa-search search-2" aria-hidden="true"></i>
                </a>
                <div class="content">
                    <input type="text" placeholder="search">

                </div>
            </div>
        </div>
        <!-- modale end -->
    </header>
	