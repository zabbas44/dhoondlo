<?php
/*
Template Name: Stories
*/

$paged=(get_query_var('paged'))?get_query_var('paged'):1;
$paged=(get_query_var('page'))?get_query_var('page'):$paged;

$query=new WP_Query(array(
	'post_type' =>'story',
	'posts_per_page' => ThemexCore::getOption('story_per_page', 9),
	'paged' => $paged,
));
?>
<?php get_header(); ?>
<div class="stories-listing clearfix">
	<?php 
	$counter=0;
	while($query->have_posts()) { 
	$query->the_post(); 
	$counter++;
	?>
		<?php if(has_post_thumbnail()) { ?>
			<div class="column fourcol <?php if($counter==3) { ?>last<?php } ?>">
			<?php get_template_part('content', 'story-grid'); ?>
			</div>
			<?php		
			if($counter==3) {
			$counter=0;
			?>
			<div class="clear"></div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div>
<!-- /stories -->
<?php ThemexInterface::renderPagination(themex_paged(), $query->max_num_pages); ?>
<?php get_footer(); ?>