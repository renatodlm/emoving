<?php

use Classes\Page_Hero;

get_header();
?>
<div class="main-body">
	<section class="filtro-blog">
		<div class="container">
			<div class="row justify-content-center">
				<div class="filtro-blog-title"><i class="filtro-blog-title-icon"></i>Filtro</div>
				<div class="filtro-blog-content">
					<div class="sidebar-item">
						<div class="search-default">
							<?php get_search_form(); ?>
						</div>
					</div>
					<div class="sidebar-item">
						<div class="categories">
							<div class="categories-title">Categorias</div>
							<ul class="categories-list">
								<?php
								$categories = get_categories();
								foreach ($categories as $category) :
									global $wp;
								?>
									<li class="categories-list-item"><a class="categories-list-item-link <?php if (get_the_archive_title() == $category->name) {
																												echo 'cat-active';
																											} ?>" href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	/**
	 * Hero
	 */

	$default_obj = [
		'title' => 'Resultados para: ' . get_search_query(),
		'text' => '',
		'background-color' => '#444580',
		'before' => false,
		'after' => true,
		'link' => ''
	];
	$text = null;

	$hero = new Page_Hero;
	?>
	<div class="blog-hero">
		<?php
		echo $hero::default($default_obj, $text);
		?>
	</div>
	<style>
		.swiper {
			width: 100%;
			height: auto;
		}
	</style>
	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
					?>
							<div class="blog-item">
								<article title="<?= get_the_title(); ?>">
									<a href="<?= get_permalink() ?>">
										<div class="blog-item-image-box">
											<picture>
												<img class="blog-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img//blog-item.png" alt="blog item">
											</picture>
										</div>
									</a>
									<h2 class="blog-item-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
									<div class="blog-item-post-info">
										<ul class="blog-item-post-info-tags">
											<?php $categories = get_the_category(get_the_ID()); ?>
											<?php foreach ($categories as $category) : ?>
												<li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
											<?php endforeach; ?>
										</ul>
										<div class="blog-item-post-info-date">
											<?= get_the_date('d/m/Y') ?>
										</div>
									</div>
								</article>
							</div>
					<?php endwhile;
					endif; ?>

					<?php
					global $wp_query;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					echo new_pagination($wp_query, $paged) ?>
				</div>
				<div class="col-lg-4 d-md-block d-none">
					<div class="sidebar">
						<div class="sidebar-item">
							<div class="search-default">
								<?php get_search_form(); ?>
							</div>
						</div>
						<div class="sidebar-item">
							<div class="categories">
								<div class="categories-title">Categorias</div>
								<ul class="categories-list">
									<?php
									$categories = get_categories();
									foreach ($categories as $category) :
									?>
										<li class="categories-list-item"><a class="categories-list-item-link <?php if (get_the_archive_title() == $category->name) {
																													echo 'cat-active';
																												} ?>" href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php

get_footer();
