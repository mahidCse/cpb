<?php
/**
Template Name: Service Template
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	
<div class="main-wrapper slider-area">
        <ul class="sliding">
            <li class="item-1">


<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  

                <div class="default" style="background: url('<?php echo $image[0]; ?>') no-repeat;"></div>
                <div class="another_area"></div>
                <div class="moving" style="background: url('<?php echo $image[0]; ?>') no-repeat;"></div>
				<?php endif; ?>
            </li>
        </ul>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
					<?php if ( have_posts() ) : 
					// Do we have any posts in the databse that match our query?
					?>

						<?php while ( have_posts() ) : the_post(); 
						// If we have a post to show, start a loop that will display it
						?>
                        <h2 class="content-title"><?php the_title(); ?></h2>
                        <p class="service-main-content">
						
						<?php the_content(); 
									// This call the main content of the post, the stuff in the main text box while composing.
									// This will wrap everything in p tags
									?>
									<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
					
                        	</p><?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
						<article class="post error">
							<h1 class="404">Nothing has been posted like that yet</h1>
						</article>

					<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="<?php echo get_template_directory_uri();?>/assets/images/clipping.png" alt="man-cut-clipping">
                    </div>
                    <div class="clear"></div>
                    <div class="span12">
                        
                    </div>
                </div>
             </div>
             </div>
             </div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>