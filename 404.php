<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package emoving
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="container">
			<h1><?= __('404', 'emoving') ?></h1>
			<h2><?= __('Página não encontrada!', 'emoving') ?></h2>
			<p><?= __('Desculpa, a página que está procurando não existe mais, mudou de endereço ou está inativa.', 'emoving') ?></p>
			<a href="<?php echo esc_url(home_url()); ?>">
				<button class="bt bt-medio bt-primary"><?= __('Ir para home', 'emoving') ?></button>
			</a>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
