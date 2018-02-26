<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); 
global $redux_demo;
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home-slider section">
				<?php 

			    $slider_args = array(
			        'post_type' => 'slider',
			        'posts_per_page'=> 5,
			    );

			    // the query
			    $slider_query = new WP_Query( $slider_args ); ?>

			    <?php if ( $slider_query->have_posts() ) : ?>

					<div class="swiper-container home-product-wrapper">
						<div class="swiper-wrapper">
							<!-- the loop -->
					        <?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
								<div class="swiper-slide">
				            		<img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="img-responsive">
				            		<div class="slider-content">
					            		<h3 class="hover-title"><?php echo get_the_title(); ?></h3>
					            		<p><?php echo get_the_content(); ?></p>
					            		<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Know More</a>
				            		</div>
								</div>
					        <?php endwhile; ?>
					        <!-- end of the loop -->
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
						<!-- Add Arrows -->
						<!-- <div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div> -->
					</div>
				 <!-- pagination here -->

			    <?php wp_reset_postdata(); ?>

			    <?php else : ?>
			        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			    <?php endif; ?>
			</div>
			<div class="foursection section">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="blog1 blog">
								<a href="<?php echo $redux_demo['home-section-first-link']; ?>">
									<div class="blog-img">
										<?php if( $redux_demo['home-section-first-media']['url'] ) : ?>
											<img src="<?php echo $redux_demo['home-section-first-media']['url']; ?>" class="img-responsive">
										<?php endif ?>
									</div>
									<div class="blog-content">
										<?php if( $redux_demo['home-section-first-title']) : ?>
											<h2><?php echo $redux_demo['home-section-first-title']; ?></h2>
						    			<?php endif; ?>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="blog1 blog">
								<a href="<?php echo $redux_demo['home-section-second-link']; ?>">
									<div class="blog-img">
										<?php if( $redux_demo['home-section-second-media']['url'] ) : ?>
											<img src="<?php echo $redux_demo['home-section-second-media']['url']; ?>" class="img-responsive">
										<?php endif ?>
									</div>
									<div class="blog-content">
										<?php if( $redux_demo['home-section-second-title']) : ?>
											<h2><?php echo $redux_demo['home-section-second-title']; ?></h2>
						    			<?php endif; ?>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="blog1 blog">
								<a href="<?php echo $redux_demo['home-section-third-link']; ?>">
									<div class="blog-img">
										<?php if( $redux_demo['home-section-third-media']['url'] ) : ?>
											<img src="<?php echo $redux_demo['home-section-third-media']['url']; ?>" class="img-responsive">
										<?php endif ?>
									</div>
									<div class="blog-content">
										<?php if( $redux_demo['home-section-third-title']) : ?>
											<h2><?php echo $redux_demo['home-section-third-title']; ?></h2>
						    			<?php endif; ?>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="blog1 blog">
								<a href="<?php echo $redux_demo['home-section-fourth-link']; ?>">
									<div class="blog-img">
										<?php if( $redux_demo['home-section-fourth-media']['url'] ) : ?>
											<img src="<?php echo $redux_demo['home-section-fourth-media']['url']; ?>" class="img-responsive">
										<?php endif ?>
									</div>
									<div class="blog-content">
										<?php if( $redux_demo['home-section-fourth-title']) : ?>
											<h2><?php echo $redux_demo['home-section-fourth-title']; ?></h2>
						    			<?php endif; ?>
									</div>
								</a>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<div class="testimonial section">
				<?php 

				    $testi_args = array(
				        'post_type' => 'testi',
				        'posts_per_page'=> 5,
				    );

				    // the query
				    $testi_query = new WP_Query( $testi_args ); 
				?>

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-8">
							<div class="testimonial-wrapper">
								<span class="testimonial-icon"></span>
							    <?php if ( $testi_query->have_posts() ) : ?>
						    		<div class="swiper-container home-testi-wrapper">
										<div class="swiper-wrapper">
											<!-- the loop -->
									        <?php while ( $testi_query->have_posts() ) : $testi_query->the_post(); ?>
												<div class="swiper-slide">
								            		<div class="testi-content">
									            		<p><?php echo get_the_content(); ?></p>
									            		<h3 class="hover-title"><?php echo get_the_title(); ?></h3>
								            		</div>
												</div>
									        <?php endwhile; ?>
									        <!-- end of the loop -->
										</div>
										<!-- Add Pagination -->
										<div class="swiper-pagination"></div>
										<!-- Add Arrows -->
										<!-- <div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div> -->
									</div>						    	
							    <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="recipes section">
				<?php 

				    $testi_args = array(
				        'post_type' => 'post',
				        'posts_per_page'=> 2,
				    );

				    // the query
				    $testi_query = new WP_Query( $testi_args ); 
				?>

				<?php if ( $testi_query->have_posts() ) : ?>
		    		<div class="container">

						<div class="row">
							<div class="col-sm-12">
								<h2 class="recipe-title text-center">Recipes</h2>
								<p class="recipe-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="row">
							<!-- the loop -->
					        <?php while ( $testi_query->have_posts() ) : $testi_query->the_post(); ?>
								<div class="col-sm-6">
				            		<div class="recipe-content">
				            			<div class="recipe-img-wrapper">
					            			<img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="img-responsive">
						            		<a href="<?php echo get_permalink(); ?>" class="recipe-btn"><img src="<?php echo get_stylesheet_directory_uri() . '/img/btn.png'; ?>" /></a>
				            			</div>
				            			<div class="recipe-content-wrapper">
				            				<h3 class="recipe-title"><?php echo get_the_title(); ?></h3>
					            			<?php echo get_the_content(); ?>
				            			</div>
				            		</div>
								</div>
					        <?php endwhile; ?>
					        <!-- end of the loop -->
						</div>
					</div>						    	
			    <?php endif; ?>
			</div>
			<div class="instagram-feed">
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
