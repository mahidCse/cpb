
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
	<title> <?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title('');?>
	</title>
    <!-- <meta name="google-site-verification" content="HBIdfukqAT4EWWLvSB8xLWHgkdPhZdU3d8gd4XDNeJA" />
    <meta name="msvalidate.01" content="2CE4F1CDA764A57E3C2588D393AE9E59" />
    <meta name="alexaVerifyID" content="NTy8TiklnxqE0ldAvPHRBSRQaok" /> -->
    
    <!-- Font embeding -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> -->
    
    <!-- CSS Include -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lavalamp.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/layerslider/css/layerslider.css">
        
   
    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

            <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_uri');?>">
        
    
            <meta name="description" content="Providing affordable & professional services on Remove background from image, Holistic Image Editing, Identity Designs & Web UI Designs within your timeframe with 100% Quality assurance.">
    
            <meta name="keywords" content="remove background from image, Photoshop clipping path services, color masking, image masking, photo retouch, neck joint, image optimization, identity design, ui design service">
    
    <meta property="og:type" content="website">     
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="Complete Solutions To Design & Image Editing Project">     
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>/assets/images/logo.png">     
    <meta property="og:description" content="Providing affordable & professional services on Holistic Image Editing, Identity Designs & Web UI Designs within your timeframe with 100% Quality assurance.">

    <link rel="canonical" href="index.html"/>

    <script type="text/javascript">
        var base_url = 'index.html';
    </script>

    <script>
        
    </script>
	<?php wp_head(); ?>
</head>

<body>
    <!-- <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "../connect.facebook.net/en_US/all.js#xfbml=1&appId=366685830126558";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> -->

    
        <div class="sub-area" >
		<div class="" id="sticky-navbar">
            <div class="main-wrapper fixed-area">
                
            </div>
				<div class="main-wrapper head-area">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <span class="logo"><a href="<?php bloginfo('home')?>">Clipping path best</a></span>
                        </div>
                        <div class="span8">
                            <div class="main-menu-area">
							<?php
				if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'wpj-main-menu', 'menu_id' => 'nav','menu_class' => 'main-menu lavaLamp', 'fallback_cb' => 'wpj_default_menu'));
				}
				else {
					wpj_default_menu();
				}
				?>
                                <!-- lavaLamp class is require for lavaLamp effect -->
                              <!--  <ul class="main-menu lavaLamp">
                                    <li><a href="index.html" class="active">Home</a></li>
                                    <li><a href="#">About</a></li>
                                   
                                    <li><a href="#">Services </a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Clipping Path</a></li>
                                            <li><a href="#">Masking</a></li>
                                            <li><a href="#">Color Masking</a></li>
                                            <li><a href="#">Retouching</a></li>
                                            <li><a href="#">Shadow Creation</a></li>
                                            <li><a href="#">Reflation creation</a></li>
                                           
                                        </ul>
                                    </li>
                                
                                    <li><a href="#">Price</a></li>
                                
                                    <li><a href="#">Contact</a></li>
                               
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
            <div id="back-to-top"></div>
        </div>
    </header>
	<div class="main-body" >