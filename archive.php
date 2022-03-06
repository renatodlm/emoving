<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emoving
 */

get_header();
?>
<style>
	body {
		background-color: #EEEEEE !important;
	}
</style>

<?php
if (have_posts()) :
	$i = 0;
?>
	<section class="blog-index">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-10">


					<div class="row justify-content-between">
						<div class="col-lg-7">

							<div class="row">
								<?php while (have_posts()) : the_post();
									$i++; ?>

									<div class="col-md-12 px-0 blog-item d-flex align-items-center pb-4">
										<a href="<?php echo get_permalink(); ?>">
											<div class="row w-100 mx-0 d-flex justify-content-center">
												<div class="col-lg-12">
													<div class="blog-item-foto">
														<?php if (get_the_post_thumbnail()) : ?>
															<img class="m-auto img-fluid" src="<?php the_post_thumbnail_url('crop-512'); ?>" alt="">
														<?php else : ?>
															<img class="m-auto img-fluid" src="https://via.placeholder.com/800" alt="">
														<?php endif; ?>
													</div>
													<div class="blog-item-content">
														<div class="blog-item-data">
															<?php echo get_the_date(__('d/m/Y')); ?>
														</div>
														<div class="post-categorias-destaque">
															<?php echo get_the_category_list('', '', get_the_ID()); ?>
														</div>
														<a href="<?php echo get_permalink(); ?>">
															<div class="blog-item-title">
																<?php the_title(); ?>
															</div>
														</a>
													</div>
												</div>
											</div>
										</a>
									</div>


								<?php
								endwhile;
								?>

							</div>

						</div>
						<div class="col-lg-5">
							<div class="blog-sidebar">
								<?php get_sidebar('blog'); ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container my-3">
			<div class="row">
				<div class="d-flex justify-content-center col-sm-12 py-3">
					<?php
					the_posts_pagination(array(
						'mid_size' => 1,
						'prev_text' => __('', 'emoving'),
						'next_text' => __('', 'emoving'),
						'screen_reader_text' => __('')
					)); ?>
				</div>
			</div>
		</div>
	</section>



<?php
endif;
wp_reset_postdata(); ?>

<?php
get_footer();
