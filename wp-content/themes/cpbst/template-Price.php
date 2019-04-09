<?php
/**
Template Name: Price Template
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	
 <div class="we-are pricing-head">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Pricing</h3>
                        <span class="right-shadow"></span>
                    </div>
					<div class="row">
               
                    <div class="span12 offset1">
					<?php if ( have_posts() ) : 
					// Do we have any posts in the databse that match our query?
					?>

						<?php while ( have_posts() ) : the_post(); 
						// If we have a post to show, start a loop that will display it
						?>
                      
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
                   
                    <div class="clear"></div>
             </div>
                    <div class="pricing-list-area">
                        <ul class="pricint-list">
                            <li class="single-list">
                                <ul class="single-name-area">
                                    <li class="head">
                                        <p>Quantity 1-20</p>
                                    </li>
                                    <li>
                                        <p class="list-name">Very Simple</p>
                                        <p><span class="pri-start">(e.g. mobile, can) </span><span class="pri-number">$0.35</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Simple</p>
                                        <p><span class="pri-start">(e.g. wallet, sun-glass) </span><span class="pri-number">$0.45</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Medium</p>
                                        <p><span class="pri-start">(e.g. bag, Shoe, t-shirt, furniture) </span><span class="pri-number">$0.69</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Complex</p>
                                        <p><span class="pri-start">(e.g. jewelry, group-furniture) </span><span class="pri-number">$2.79</span></p>
                                    </li>
                                   <li>
                                        <p class="list-name">Super Complex</p>
                                        <p><span class="pri-start">(e.g cycle) </span><span class="pri-number">$4.89</span></p>
                                    </li>
									<li>
                                        <a href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>">Place an Order !</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="single-list featured">
                                <ul class="single-name-area">
                                    <li class="head">
                                        <p>Quantity 21-100</p>
                                    </li>
                                     <li>
                                        <p class="list-name">Very Simple</p>
                                        <p><span class="pri-start">(e.g. mobile, can) </span><span class="pri-number">$0.29</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Simple</p>
                                        <p><span class="pri-start">(e.g. wallet, sun-glass) </span><span class="pri-number">$0.39</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Medium</p>
                                        <p><span class="pri-start">(e.g. bag, Shoe, t-shirt, furniture) </span><span class="pri-number">$0.50</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Complex</p>
                                        <p><span class="pri-start">(e.g. jewelry, group-furniture) </span><span class="pri-number">$2.39</span></p>
                                    </li>
                                   <li>
                                        <p class="list-name">Super Complex</p>
                                        <p><span class="pri-start">(e.g cycle) </span><span class="pri-number">$3.49</span></p>
                                    </li>
                                    <li>
                                       <a href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>">Place an Order !</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="single-list">
                                <ul class="single-name-area">
                                    <li class="head">
                                        <p>Quantity 150+</p>
                                    </li>
                                     <li>
                                        <p class="list-name">Very Simple</p>
                                        <p><span class="pri-start">(e.g. mobile, can) </span><span class="pri-number">$0.25</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Simple</p>
                                        <p><span class="pri-start">(e.g. wallet, sun-glass) </span><span class="pri-number">$0.35</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Medium</p>
                                        <p><span class="pri-start">(e.g. bag, Shoe, t-shirt, furniture) </span><span class="pri-number">$0.49</span></p>
                                    </li>
                                    <li>
                                        <p class="list-name">Complex</p>
                                        <p><span class="pri-start">(e.g. jewelry, group-furniture) </span><span class="pri-number">$1.99</span></p>
                                    </li>
                                   <li>
                                        <p class="list-name">Super Complex</p>
                                        <p><span class="pri-start">(e.g cycle) </span><span class="pri-number">$2.99</span></p>
                                    </li>
									 <li>
                                       <a href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>">Place an Order !</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                        <div class="row all-portfolio">
                            <div class="span12 text-center">
                                <a href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>" class="text">Get special discount on bulk order</a>
                            </div>
                        </div>
                    </div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>