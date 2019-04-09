<?php
/**
Template Name: Blank Template
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	

    <div class="we-are-area">
        <div class="container">
            <div class="row">
                <div class="span12">
				 <?php if ( have_posts() ) : 
					// Do we have any posts in the databse that match our query?
					?>
                    <div class="we-are">
					 
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head"><?php the_title(); ?></h3>
                        <span class="right-shadow"></span>
                       
                    </div>
                    <div class="man we-are-about row">
                     

						<?php while ( have_posts() ) : the_post(); 
						// If we have a post to show, start a loop that will display it
						?>
						<div class="span2">
						
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  

                            <img src="<?php echo $image[0]; ?>">
							<?php endif;?>
                        </div>
                        
                        <div class="span10">
                            <div class="about-pera">
							
                      
                        <p>
						<?php the_content(); 
									// This call the main content of the post, the stuff in the main text box while composing.
									// This will wrap everything in p tags
									?>
									<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
					
                        	</p><?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
						<article class="post error">
							<h1 class="404">Nothing has been posted like that yet</h1>
						</article>

					
                               </div>
						
                        </div>
                        <div class="clear"></div>
                        
                    </div>	<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>
                   <!-- <div class="row we-are-about">
                        <div class="span3">
                            <i class=""></i>
                            <h3>6375 Images<br />A Day/ Average</h3>
                            <p>By ensuring quality service &amp; meeting the Deadlines, we can process number of images you can imagine.</p>
                        </div>
                        <div class="span3">
                            <h3>300+ <br />Designers</h3>
                            <p>Dedicated in-house employees to deliver quality clipping paths, masks, retouch, neck join and other image editing services.</p>
                        </div>
                        <div class="span3">
                            <h3>30+ <br />QCs</h3>
                            <p>3 layer quality checks to ensure what you get is just perfect.</p>
                        </div>
                        <div class="span3">
                            <h3>24x7x365<br />Customer support</h3>
                            <p>We are committed to quicker response. Answering your queries, valuing your values is all we care about.</p>
                        </div>
                    </div>-->
                    <!-- <div class="trial-button-area">
                        <a href="#" class="trial-button">free trial</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>