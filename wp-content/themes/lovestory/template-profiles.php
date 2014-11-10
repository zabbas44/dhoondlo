<?php
/*
Template Name: Profiles
*/

$users=ThemexUser::getUsers(array(
	'number' => ThemexCore::getOption('user_per_page', 9),
	'offset' => ThemexCore::getOption('user_per_page', 9)*(themex_paged()-1),
));
?>
<?php get_header(); ?>
<div class="column eightcol">
	<?php if(!empty($users)) { ?>
 	<div class="profiles-listing clearfix">
		<?php
		$counter=0;
		foreach($users as $user) {		
		ThemexUser::$data['active_user']=ThemexUser::getUser($user->ID);
		$counter++;
		?>
			<div class="column fourcol <?php if($counter==3) { ?>last<?php } ?>">
			<?php get_template_part('content', 'profile-grid'); ?>
			</div>
			<?php		
			if($counter==3) {
			$counter=0;
			?>
			<div class="clear"></div>
			<?php } ?>
		<?php } ?>
	</div>
	<!-- /profiles -->
	<?php ThemexInterface::renderPagination(themex_paged(), themex_pages(ThemexUser::getUsers(), ThemexCore::getOption('user_per_page', 9))); ?>
	<?php } else { ?>
	<h3><?php _e('No profiles found. Try a different search?','lovestory'); ?></h3>
	<p><?php _e('Sorry, no profiles matched your search. Try again with different parameters.','lovestory'); ?></p>
	<?php } ?>
</div>
<aside class="sidebar column fourcol last">
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>