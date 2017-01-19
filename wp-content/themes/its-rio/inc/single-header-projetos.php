<div class="row row-menu header-single" <?= get_thumbnail_style($destaque_id,'full'); ?>>
	<div class="row">
		<div class="column large-12">
			<h1><?php the_title() ?></h1>
			<p class="excerpt"><?= the_excerpt() ?></p>
			<div class="line"></div>
		</div>
		<div class="column medium-4 large-4">
			<p class="box-title"><?= pll__('área de pesquisa'); ?></p>
			<p class="box"><?= get_area_pesquisa() ?></p>
		</div>
		<div class="column medium-4 large-4 end">
			<p class="box-title"><?= pll__('categorias'); ?></p>
			<?php $no_label = true; include(ROOT.'inc/categories.php') ?>
		</div>
	</div>
</div>
<div class="row row-menu spread-items header-single-menu">
	<div class="row single-menu-container">
		<?php include(ROOT.'inc/single/menu.php') ?>
		<div class="sidebar">
			<a class="button large curved-shadow" href="<?= $meta['saiba_mais'][0] ?>" target="_blank"><?= strtolower(pll__('Saiba Mais')) ?></a>
		</div>
	</div>
</div>
<div class="header-single-menu-fix"></div>
