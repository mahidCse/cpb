<?php
/**
Template Name: Contact Template
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<?php 
	$kv_errors= array();
if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['submit_form']))  {

	$fields = array(
					'kv_name',
					'email',
					'message',
					'subject'
	);

	foreach ($fields as $field) {
		if (isset($_POST[$field])) $posted[$field] = stripslashes(trim($_POST[$field])); else $posted[$field] = '';
	}
	if ($posted['kv_name'] == null)
		array_push($kv_errors,  sprintf('<strong>Notice</strong>: Please enter Your Name.', 'kvcodes'));
		
	if ($posted['email'] == null)
		array_push($kv_errors,  sprintf('<strong>Notice</strong>: Please enter Your Email.', 'kvcodes'));
		
	if ($posted['message'] == null)
		array_push($kv_errors,  sprintf('<strong>Notice</strong>: Please enter Your Message.', 'kvcodes'));
	
	if ($posted['subject'] == null)
		array_push($kv_errors,  sprintf('<strong>Notice</strong>: Please enter Your Subject.', 'kvcodes'));
		
	$errors = array_filter($kv_errors);

	if (empty($errors)) { 	
		if ( ! function_exists( 'wp_handle_upload' ) ) {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
		}

		$uploadedfile = $_FILES['attachmentFile'];

		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

		if ( $movefile && ! isset( $movefile['error'] ) ) {			
			$movefile['url'];
		}

		$attachments = array($movefile['file'] );

		$headers = 'From: '.$posted['kv_name'].' <'.$posted['email'].'>' . "\r\n";
		if(wp_mail('shadhinbangla1990@gmail.com', $posted['subject'] , $posted['message'], $headers, $attachments)){
			echo '<div style="background-color: #BBF6E2;   border: 1px solid #01BE47;    margin-top: 10px;    padding: 8px;" >  Sent Successfully </div> ' ;
		}else {
			echo '<div style="background-color:#FAFFBD;border:1px solid #DAAAAA;color:#D8000C;margin-top:20px;" Error occurred </div> ' ; 
		}
		unlink( $movefile['file'] );
	}
} 
?>
<div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="we-are">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Contact Us</h3>
                        <span class="right-shadow"></span>
                    </div>
                    <div class="c-contact">
                        <div class="row">
                            <div class="span6 form-area">
                                <h3>Send us a mail</h3>
                             <form action="" method="post"  enctype="multipart/form-data">
                                     <ul class="contact-form">
                                        <li class="name">
                                            <span></span>
                                            <input type="text" name="kv_name" required placeholder="Your Name" />
                                        </li>
                                        <li class="email">
                                            <span></span>
                                            <input type="email" name="email" required placeholder="Your E-mail" />
                                        </li>
                                       <!-- <li class="phone">
                                            <span><i class="icon-phone"></i></span>
                                            <input type="text" name="phone" placeholder="Your Phone" />
                                        </li>
                                        <li class="country">
                                            <span><i class="icon-globe"></i></span>
                                            <input type="text" name="country" placeholder="Your Country" />
                                        </li>-->
                                        <li class="subject">
                                            <span></span>
                                            <input type="text" name="subject" required placeholder="Subject" />
                                        </li>
                                        <li class="text-area">
                                            <span></span>
                                            <textarea name="message" required placeholder="Your message........."></textarea>
                                        </li>
										 <li class="attachement">
                                            <span></span>
                                           	<input type="file" name="attachmentFile" placeholder="Attachement"> 
                                        </li>
									
		
                                        <li class="send-button">
                                            <input type="submit" id="submit" name="submit_form" value="Send" />
                                        </li>
                                    </ul>
                                </form>
								
                            </div>
                            <div class="span6 address-area">
                                <h3>Office Locations</h3>
                                <ul class="location-list row">
                                    
                                    <li class="span2">
                                        <p class="location-name">Bangladesh:</p>
                                        <p>House# 27, Road# 11,<br/>
                                        Block# D, Mirpur-12<br/>
                                        Dhaka-1216<br/>
                                        Bangladesh</p>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    <li class="mobile-number">
                                        <p><a href="callto:+880 (1734) 404975">+880 (1734) 404975</a></p>
                                    </li>
                                    <li class="email-address">
                                        <a href="mailto:info@clippingpathbest.com">info@clippingpathbest.com</a>
                                    </li>
                                </ul>
                                <div class="map">
                                    <iframe width="420" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7298.960164715163!2d90.36578352227066!3d23.837080388186585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a3366b005%3A0x901b07016468944c!2sMirpur+DOHS%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1553354861047"></iframe>
                               
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>