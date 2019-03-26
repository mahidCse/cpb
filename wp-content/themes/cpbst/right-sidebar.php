
						 	<div id="secondary" class="widget-area right-area" role="complementary">
							<?php if(!is_paged()) { ?>
								<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
									<!-- BEGIN INTRO -->

										<?php dynamic_sidebar( 'sidebar-right' ); ?>
							 <!-- end div #intro -->
									<!-- END INTRO -->
								<?php endif; ?>
							<?php } ?>
	                    </div>
	           