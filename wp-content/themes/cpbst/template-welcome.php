<?php
/**
Template Name: Welcome Template
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	

    <div class="main-wrapper slider-area">
        <!--LayerSlider begin-->
        <div id="slider" style="width: 100%; height: 100%;">
         
            <!--LayerSlider layer-->
            <div class="ls-layer">
                <div id="layer-01-bg" class="ls-bg" style="layer1-background"></div>
                <div id="layer-01-bg-02" class="ls-s6" style="layer1-sublayer1" data-rel="delayin: 1000; slidedirection: top; slideoutdirection: left; durationin: 3000;"></div>

                <div id="layer-01-slide-01" class="ls-s6" style="layer1-sublayer2" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1500;">
                    <p>REFLECTION</p>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/reflection-image-06.jpg" alt="home-slider-01">
                </div>

                <div id="layer-01-slide-02" class="ls-s4" style="layer1-sublayer3" data-rel="delayin: 100; slidedirection: bottom; slideoutdirection: bottom; durationin: 2000;">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/perfect-clipping-image-04.jpg" alt="home-slider-02">
                    <p>CLIPPING PATH</p>
                </div>

                <div id="layer-01-slide-03" class="ls-s2" style="layer1-sublayer4" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1000;">
                    <p class="pera-01">Perfect clipping</p>
                    <p class="pera-02">at low price</p>
                    <p class="pera-03">Starts From <span class="bold">$0.20</span></p>
                   <!--  <a href="inside/auth.html" class="slider-button">Try 3 Images for free now <span>></span></a> -->
                </div>
            </div>
		<div class="ls-layer">
			
                <div id="layer-02-bg" class="ls-bg" style="layer2-background"></div>
				 <img id="layer-02-slide-01a" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Clipping-Path--2a.jpg" style="layer2-sublayer3" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1500;" alt="home-slider-02-01">
                <img id="layer-02-slide-02a" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Clipping-Path--2b.jpg" style="layer2-sublayer2" data-rel="delayin: 100; slidedirection: right; slideoutdirection: bottom; durationin: 2000;" alt="home-slider-02-01">
               
				
		   </div>
			<div class="ls-layer">
			
                <div id="layer-02-bg" class="ls-bg" style="layer2-background"></div>
                <img id="layer-03-slide-01" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Images-Masking-1a.jpg" style="layer2-sublayer2" data-rel="delayin: 100; slidedirection: right; slideoutdirection: bottom; durationin: 2000;" alt="home-slider-02-01">
                <img id="layer-03-slide-02" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Images-Masking-1b.jpg" style="layer2-sublayer3" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1500;" alt="home-slider-02-01">
                <img id="layer-03-slide-03" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Images-Masking-1a.jpg" style="layer2-sublayer3" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1000;" alt="home-slider-02-01">
				<div id="layer-03-slide-04" class="ls-s2" style="layer1-sublayer4" data-rel="delayin: 100; slidedirection: top; slideoutdirection: bottom; durationin: 2500;">
                    <p class="style-02">Acurate Image Masking</p>
                   <!--  <a href="inside/auth.html" class="slider-button">Try 3 Images for free now <span>></span></a> -->
                </div>
				
		   </div>
            <div class="ls-layer">
                <div id="layer-02-bg" class="ls-bg" style="layer2-background"></div>
         
                <img id="layer-02-slide-01" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/image-07.png" style="layer2-sublayer1" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 2000;" alt="home-slider-02-01">

                <div id="layer-02-slide-02" class="ls-s2" style="layer2-sublayer2" data-rel="delayin: 100; slidedirection: left; slideoutdirection: bottom; durationin: 1500;">
                    <p class="style-01">Photo Retouching.</p>
					<p class="pera-03">Lighting, sharpening, color correction, glare, </p>
                    <p class="pera-03">flare, sun spots or darkness even damaged photos  </span></p>
                   
					
                  <!--   <a href="inside/auth.html" class="slide02-button">Try Now <span>></span></a> -->
                </div>
            </div>
			<div class="ls-layer">
			
                <div id="layer-02-bg" class="ls-bg" style="layer2-background">
				
				</div>
                <img id="layer-03-slide-01" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Color-correction-1c.jpg" style="layer2-sublayer2" data-rel="delayin: 100; slidedirection: right; slideoutdirection: bottom; durationin: 2000;" alt="home-slider-02-01">
                <img id="layer-03-slide-02" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Color-correction-1b.jpg" style="layer2-sublayer3" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1500;" alt="home-slider-02-01">
                <img id="layer-03-slide-03" class="ls-s6" src="<?php echo get_template_directory_uri();?>/assets/images/home-slider/Color-correction-1a.jpg" style="layer2-sublayer3" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1000;" alt="home-slider-02-01">
				<div id="layer-03-slide-04" class="ls-s2" style="layer1-sublayer4" data-rel="delayin: 100; slidedirection: top; slideoutdirection: bottom; durationin: 2500;">
                    <p class="style-02">Color Correction</p>
                   <!--  <a href="inside/auth.html" class="slider-button">Try 3 Images for free now <span>></span></a> -->
                </div>
				
		   </div>
          
        </div>
        <!--LayerSlider end-->
    </div>
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- <ul class="slider-items-list">
                        <li><a href="clipping-path.html">Clipping Path</a></li>
                        <li><a href="photoshop-masking.html">Image Masking</a></li>
                        <li><a href="photo-retouch.html">Image Retouch</a></li>

                    </ul> -->
                    <div class="contact-area">
                        <span class="lan">
                        <a href="callto:+880 (1734) 404975" class="lan"><i class="mobile-number"></i>+880 (1734) 404975</a> 
                            <a href="callto:clippingpethbest" class="lan"><i class="icon-skype"></i> Skype</a>
                            
                        </span> &nbsp;&nbsp;&nbsp;
                        <a href="mailto:info@clippingpathbest.com" class="email"><i class="icon-envelope-alt"></i> info@clippingpathbest.com</a>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <div class="main-wrapper portfolio-area">
        <div class="container">
            <div class="c-p-family">
                <h1>CLIPPING PATH BEST &ndash; OUTSOURCED IMAGE-EDITING SOLUTION!</h1>
                <p>If you need bulk image editing service with great quality, reliability and fast turnaround time!!</p>
            </div>
            <div class="row">
                <div class="span12 c-p-feature">
                    <div class="row">
                        <div class="span4 item-style feature-item-1">
                            <h2>Image Editing</h2>
                            <p>Super professional Image Editing team to take your Clipping Paths projects to a new height and ready to solve all of your Photoshop clipping tasks at your desired timeframe.</p>
                        </div>
                        <div class="span4 item-style feature-item-3">
                            <h2>UI Design</h2>
                            <p>We research the industry and then go for designing the App by Balancing the color, implementing the prototypes with Easy-to-Use functionality is our expertise.</p>
                        </div>
                        <div class="span4 item-style feature-item-2">
                            <h2>Identity Design</h2>
                            <p>Our creative designers feel how people perceive one&apos;s business and then go for designing the whole Corporate Identity, Logo, Business Cards, Brochures and other stationary stuffs.</p>
                        </div>
                    </div>
                </div>
                <div class="span12 portfolio">
                    <!-- <div class="row p-selector">
                        <div class="span4 p-button2">
                            <p>Portfolio</p>
                        </div>
                        <div id="filters" class="span8 p-list portfolio-list option-set clearfix" data-option-key="filter">
                            <ul class="all-list">
                                <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                            </ul>
                            <ul>
                                <li><a href="#filter" data-option-value=".logo-design" >Logo Design</a></li>
                                <li><a href="#filter" data-option-value=".web-design" >Web Design</a></li>
                                <li><a href="#filter" data-option-value=".raster-to-vector" >Raster to Vector</a></li>
                                <li><a href="#filter" data-option-value=".image-masking" >Image Masking</a></li>
                                <li><a href="#filter" data-option-value=".image-retouch" >Image Retouch</a></li>
                                <li><a href="#filter" data-option-value=".clipping-path">Clipping Path</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="container" class="row p-items portfolio-section-box clearfix">
                        <a href="clipping-path.html">
                            <div class="span4 p-single-item element clipping-path">
                                <img src="assets/images/portfolio-01.jpg" alt="clipping-path" />
                                <div class="item-hover">
                                    <img src="assets/images/new-icon/eye-icon.png" alt="plus-icon" />
                                </div>
                            </div>
                        </a>
                        <a href="photoshop-masking.html">
                            <div class="span4 p-single-item element image-retouch">
                                <img src="assets/images/portfolio-02.jpg" alt="photoshop-masking" />
                                <div class="item-hover">
                                    <img src="assets/images/new-icon/eye-icon.png" alt="plus-icon" />
                                </div>
                            </div>
                        </a>
                        <a href="color-masking.html">
                            <div class="span4 p-single-item element image-masking">
                                <img src="assets/images/portfolio-03.jpg" alt="color-masking" />
                                <div class="item-hover">
                                    <img src="assets/images/new-icon/eye-icon.png" alt="plus-icon" />
                                </div>
                            </div>
                        </a>
                    </div> -->
                    <!--<div class="row all-portfolio">
                        <div class="span12 text-center">
                            <a href="#" class="text">Check our Full Portfolio</a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>-->
                    <!-- <div class="row arrow-buttons">
                        <div class="span12 ">
                            <a href="#" class="next"></a>
                            <a href="#" class="prev"></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
  <div class="main-wrapper prome-area">
        <div class="container">
            <div class="row">
                <div class="span3 some-feature feature-1">
                    <div class="promo-area-bg"></div>
                     <p>ON TIME <br> DELIVERY</p>
                     
                </div>
                <div class="span3 some-feature feature-2">
                    <div class="promo-area-bg"></div>
                   <p>100%<br>SECURED YOUR FILES</p>
                </div>
                <div class="span3 some-feature feature-3">
                    <div class="promo-area-bg"></div>
                    <p>Enjoy<br>Unlimited redo</p>
                </div>
                <div class="span3 some-feature feature-4">
                    <div class="promo-area-bg"></div>
                    <p>24/7<br>WE ARE OPEN</p>
                </div>
            </div>
        </div>
    </div>
   <!--    <div class="testimonial-area"> -->
       <!--  <div class="container">
            <div class="row">
                <div class="span12 c-p-tesimonials">
                    <div class="row">
                        <div class="span12"><h3>Testimonials</h3></div>
                        <div class="span4 box">
                            <img src="assets/images/tesimonials/t-steave.png" alt="photo editing service testimonials">
                            <p class="client-name">Steave</p>
                            <p class="client-designation">Photographer</p>
                            <p class="client-message">You guys are dependable!! All these images within such short turnaround time is really impressive!! I will have more jobs for you soon.</p>
                        </div>
                        <div class="span4 box">
                            <img src="assets/images/tesimonials/t-alp.png" alt="Clipping Path Service Testimonial">
                            <p class="client-name">Jane</p>
                            <p class="client-designation">E-commerce website content provider</p>
                            <p class="client-message">My company has been working with Clipping path family for last two years and I am really happy with their services. I always deal with quality service and clipping path family team is something I can rely on.</p>
                        </div>
                        <div class="span4 box">
                            <img src="assets/images/tesimonials/t-michael.png" alt="identity design testimonial">
                            <p class="client-name">Michael</p>
                            <p class="client-designation">Marketing Consultant</p>
                            <p class="client-message">I am a fan of your work. Your designs are simple, target oriented and meaningful. Looking forward to work with you on another app design job. Cheers!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    
   

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>