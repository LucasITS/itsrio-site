<?php 
get_header();
?>
<div class="row">
	<div class="column large-12">
		<br><br>
		<h2 class="list-title" style="text-transform: lowercase"><u style="font-weight:normal">categoria</u>: <?php single_cat_title() ?>
		</h2>
	</div>
	<div class="older-posts">
		<?php 
		$posts = get_posts([ 'cat' => [$wp_query->get_queried_object_id()], 'post_type' =>  [ 'varandas_ctp', 'cursos_ctp', 'publicacoes_ctp', 'projetos_ctp'], 'posts_per_page' => '1000' ]);


		if (count($posts) > 0) {
			foreach ($posts as $post) {
				setup_postdata();
				include(ROOT.'inc/post-box.php');
			}
		} else {
			?>
			<br><br>
			<div class="column large-12"><h3>Nenhum post foi encontrado</h3></div>
			<?php
		}
		?>
	</div>
</div>
<script>
	'use strict';
	setTimeout(()=>{
		$('.older-posts').masonry({
			columnWidth : '.large-4',
			selector : '.large-4',
			percentPosition: true,
		});
	}, 500);
</script>
<?php get_footer(); ?>