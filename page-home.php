<?php
/*
 Template Name: Home Page
 * 
 * No Sidebar on this page.
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
									
							<?php if( have_rows('hero_section') ): 

								while( have_rows('hero_section') ): the_row(); 
									
									// vars
									$bg_image = get_sub_field('bg_image');
									$overlay_color = get_sub_field('overlay_color');
									
									?>
									
									<section class="hero-outer" style="background-image: url('<?php echo $bg_image['url']; ?>');">
										<div class="hero-inner cf">
												<img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/dc-logo-white.svg" alt="Derrick Carter Logo"/>
												<a class="down-arrow" href="#bio"><i class="far fa-angle-down down-arrow arrow bounce"></i></a>
										</div>
									</section>
									
								<?php endwhile; ?>
								
							<?php endif; ?>
							
							<a class="anchor" id="bio"></a>
							
							<?php if( have_rows('bio') ): 

								while( have_rows('bio') ): the_row(); 
									
									// vars
									$bg_image = get_sub_field('bg_image');
									$bio_short = get_sub_field('bio_short');
									$bio_full = get_sub_field('bio_full');
									
									?>
									
									<section class="bio-outer">
										<div class="bio-inner">
											<div class="bio-hero-outer" data-parallax="scroll" data-image-src="<?php echo $bg_image['url']; ?>">
												<div class="bio-hero-inner">
													<h2 data-aos="fade-up">BIO</h2>
												</div>
											</div>
											<div class="bio-copy-outer">
												<div class="bio-copy-inner wrap cf">
													<p><?php echo $bio_short; ?></p>
													<a href="#" class="button-white"><span>MORE</span><i class="far fa-angle-double-right"></i></a>
												</div>
											</div>
											
										</div>
									</section>
									
								<?php endwhile; ?>
								
							<?php endif; ?>
							
							<section class="tour-outer">
								<div class="tour-inner">
									
								</div>
							</section>
							
							<section class="contact-outer">
								<div class="contact-inner">
									
								</div>
							</section>

						</main>
						
						<script type="text/javascript">

							jQuery(document).ready(function( $ ) {

								$('.down-arrow').click(function() {
									$('.down-arrow').addClass('hidden');
								});

								$(document).on("mousewheel", function() {
									if (document.body.scrollTop > 0){
											$('.arrow').fadeOut();
											$('.hero-logo').fadeOut();
									} else {

											$('.arrow').fadeIn();
											$('.hero-logo').fadeIn();
									};
								});
							});

						</script>

				</div>

			</div>

<?php get_footer(); ?>
