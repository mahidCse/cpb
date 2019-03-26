<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<div id="primary" class="site-content container">
		<div id="content" role="main" class="row">
            <div class="span12">
                <div class="blog">
                    <span class="left-shadow"></span>
                    <h3 class="blog-head">blog</h3>
                    <span class="right-shadow"></span>
                </div>
            </div>
            <div class="span9">
                <div class="left-area">
					<?php if ( have_posts() ) : 
					// Do we have any posts in the databse that match our query?
					?>

						<?php while ( have_posts() ) : the_post(); 
						// If we have a post to show, start a loop that will display it
						?>

						<article id="post-539" class="post-539 post type-post status-publish format-standard hentry category-cpf-facts blog-post-small">
					<header class="entry-header">

						<h1 class="entry-title"><?php the_title(); // Display the title of the post ?></h1>
						<ul class="blog-post-info">
                <li class="author">
                    <p>By : <?php the_author(); ?></p>
                </li>
                <li class="time">
                    <p><?php the_time('m.d.Y'); // Display the time it was published ?></p>
                </li>
               
                <li class="path">
                    <p><?php the_category(', '); ?>  
	</p>
                </li>
									<li class="comments-link">
						<a href="#leave-a-reply"><span class="leave-reply">Leave a reply</span></a>
											</li><!-- .comments-link -->
				            </ul>
		</header><!-- .entry-header -->

								
						
								<div class="entry-content">
							<p>
									<?php the_content(); 
									// This call the main content of the post, the stuff in the main text box while composing.
									// This will wrap everything in p tags
									?>
							
									<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
								<p></div><!-- the-content -->
						
								<div class="meta clearfix">
									<div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
									<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
								</div><!-- Meta -->
						
							</article>

						<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
						<?php
							// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
							if ( comments_open() || '0' != get_comments_number() )
								comments_template( '', true );
						?>


					<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
						<article class="post error">
							<h1 class="404">Nothing has been posted like that yet</h1>
						</article>

					<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>
			</div><!-- #content .site-content -->
			</div><!-- #content .site-content -->
			<div class="span3">
				<?php get_template_part( 'right-sidebar' );  ?>
	        </div>
	</div><!-- #primary .content-area -->
	</div><!-- #primary .content-area -->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
