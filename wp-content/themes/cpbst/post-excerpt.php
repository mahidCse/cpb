<?php
/**
 * The template for displaying post excerpts. 
 *
 * @package WordPress
 * @subpackage cpb
 */
?>

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		

	<div class="blog-post-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
                                   <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>		
                                    <ul class="blog-post-info">
                                        <li class="author">
                                            <p>By: <?php the_author(); ?></p>
                                        </li>
                                        <li class="time">
                                            <p><?php the_date(); ?></p>
                                        </li>
                                       
                                        <li class="path">
                                        	<?php the_category(', '); ?>                                 
										</li>
                                    </ul>

                                    <div class="post-content">
                                       <?php the_post_thumbnail('post-image', array('class' => 'imgthumb')); ?>
										<p class="excerpt"><p>
										<?php the_excerpt(); ?> 
										<?php get_template_part( 'postmeta' );?>
										</p>
</p>
                                    </div>
                                </div>
<?php endwhile; ?>	
<?php endif; ?>
