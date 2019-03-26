<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Brightpage
 */

get_header(); ?>
	<div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="blog">
                        <span class="left-shadow"></span>
                        <h3 class="blog-head">blog</h3>
                        <span class="right-shadow"></span>
                    </div>
					 <div class="span9">
					   <div class="left-area">
					   
                                </div>
                                </div>
	<?php if(!is_paged()) { ?>
		<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
			<!-- BEGIN INTRO -->
			<div id="intro">	
				<?php dynamic_sidebar( 'sidebar-right' ); ?>
			</div> <!-- end div #intro -->
			<!-- END INTRO -->
		<?php endif; ?>
	<?php } ?>
	
	<!-- BEGIN PAGE -->
	<div id="page" class="clearfix full">
		
		<div id="content" class="grid_1 first">
			<div class="in30">

				<?php get_template_part( 'post-excerpt' ); // Post Excerpt (post-excerpt.php) ?>


			</div> <!-- end div .in30 -->
		</div> <!-- end div #content -->
			
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
