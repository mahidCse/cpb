<?php 
/**
 * 	This is the sidebar!
 *
 *	This file will render the sidebar, as defined by the user in the admin area
 *
*/
?>
 <div class="span3">
			<div id="secondary" class="widget-area right-area" role="complementary">
				<aside id="categories-2" class="widget widget_categories"><h3 class="widget-title">Categories</h3>		
				<ul>
	<li class="cat-item cat-item-4"><a href="category/clipping-path/index.html" title="View all posts filed under Clipping Path">Clipping Path</a>
</li>
	<li class="cat-item cat-item-11"><a href="category/cpf-facts/index.html" title="View all posts filed under CPF Facts">CPF Facts</a>
</li>
	<li class="cat-item cat-item-3"><a href="category/digital-manipulation/index.html" title="View all posts filed under Digital Manipulation">Digital Manipulation</a>
</li>
	<li class="cat-item cat-item-5"><a href="category/image-masking/index.html" title="View all posts filed under Image Masking">Image Masking</a>
</li>
	
		</ul>
</aside>

<aside id="rpwe_widget-2" class="widget rpwe_widget recent-posts-extended">
<style>

.rpwe-block ul{list-style:none!important;margin-left:0!important;padding-left:0!important;}.rpwe-block li{border-bottom:1px solid #eee;margin-bottom:10px;padding-bottom:10px;}.rpwe-block a{display:inline!important;text-decoration:none;}.rpwe-block h3{background:none!important;clear:none;margin-bottom:0!important;font-weight:400;font-size:12px!important;line-height:1.5em;}.rpwe-thumb{border:1px solid #EEE!important;box-shadow:none!important;margin:2px 10px 2px 0;padding:3px!important;}.rpwe-summary{font-size:12px;}.rpwe-time{color:#bbb;font-size:11px;}.rpwe-alignleft{display:inline;float:left;}.rpwe-alignright{display:inline;float:right;}.rpwe-alignnone{display:block;float:none;}.rpwe-clearfix:before,.rpwe-clearfix:after{content:"";display:table;}.rpwe-clearfix:after{clear:both;}.rpwe-clearfix{zoom:1;}.rpwe-title {margin-top: 0;}

</style>

	<h3 class="widget-title">Recent Posts</h3>


		<div  class="rpwe-block">
			<ul class="rpwe-ul popular-posts">
					<li class="rpwe-clearfix clearfix cl">
									<a href="new-year-greetings-clipping-path-family/index.html" title="Permalink to New Year Greetings from Clipping Path Family" rel="bookmark">
									<img width="67" height="67" src="wp-content/uploads/2014/12/happy-new-year-2015-150x150.jpg" class="rpwe-alignleft rpwe-thumb wp-post-image" alt="New Year Greetings from Clipping Path Family" title="New Year Greetings from Clipping Path Family" />								</a>
													                        <!-- <a href="#">
                            <img src="http://clippingpathfamily.com/assets/images/p-item02.jpg">
                        </a> -->
                        <div class="pupolar-post-c-area">
                            <h4 class="rpwe-title">
								<a href="new-year-greetings-clipping-path-family/index.html" title="Permalink to New Year Greetings from Clipping Path Family" rel="bookmark">New Year Greetings from Clipping Path Family</a>
							</h4>
                            <!-- <a href="#"><p>Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy</p></a> -->

							
                            								<p class="author"><a href="#"></a>Amenda Jane</p>
							                            <!-- <p class="author"><a href="#"></a>Amenda Jane</p> -->
                            								<time class="rpwe-time published date" datetime="2014-12-31T16:11:19+00:00" pubdate>December, 2014</time>
							                            <!-- <p class="date">22 May 2013</p> -->
                        </div>
                    </li>
			</ul>



		</div><!-- .rpwe-block - http://wordpress.org/extend/plugins/recent-posts-widget-extended/ -->



		</aside>			</div><!-- #secondary -->
		</div><!-- .span4 -->
			<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : // If the user hasn't defined any specific widgets in the admin yet, display a couple dummy widgets, as written below ?>
				<aside id="archives" class="widget">
					<h3 class="side-title"><?php _e( 'Archives', 'naked' ); // Wordpress archives widget ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="side-title"><?php _e( 'Meta', 'naked' ); // Wordpress meta widget ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>