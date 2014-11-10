<?php
/*
Template Name: Registration
*/
?>
<?php get_header(); ?>
<?php if(get_option('users_can_register')) { ?>
<div class="column eightcol">
	<div class="section-title">
		<h1><?php _e('Register', 'lovestory'); ?></h1>
	</div>
	<form class="ajax-form formatted-form" action="<?php echo AJAX_URL; ?>" method="POST">
		<div class="message"></div>
		<div class="column sixcol">
			<div class="field-wrap">
				<input type="text" name="user_login" placeholder="<?php _e('Username', 'lovestory'); ?>" />
			</div>
		</div>
		<div class="column sixcol last">
			<div class="field-wrap">
				<input type="text" name="user_email" placeholder="<?php _e('Email', 'lovestory'); ?>" />
			</div>
		</div>
		<div class="clear"></div>
		<div class="column sixcol">
			<div class="field-wrap">
				<input type="password" name="user_password" placeholder="<?php _e('Password','lovestory'); ?>" />
			</div>
		</div>
		<div class="column sixcol last">
			<div class="field-wrap">
				<input type="password" name="user_password_repeat" placeholder="<?php _e('Repeat Password','lovestory'); ?>" />
			</div>
		</div>		
		<?php if(ThemexCore::checkOption('user_captcha')) { ?>
		<div class="form-captcha">
			<img src="<?php echo THEMEX_URI; ?>assets/images/captcha/captcha.php" alt="" />
			<input type="text" name="captcha" id="captcha" size="6" value="" />
		</div>
		<div class="clear"></div>
		<?php } ?>
		<a href="#" class="button submit-button"><?php _e('Register', 'lovestory'); ?></a>
		<div class="loader"></div>
		<input type="hidden" name="user_action" value="register_user" />
		<input type="hidden" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
		<input type="hidden" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
	</form>
</div>
<?php } ?>
<div class="column fourcol last">
	<?php if(get_option('users_can_register')) { ?>
	<div class="section-title">
		<h1><?php _e('Sign In', 'lovestory'); ?></h1>
	</div>
	<?php } ?>
	<form class="ajax-form formatted-form" action="<?php echo AJAX_URL; ?>" method="POST">
		<div class="message"></div>
		<div class="field-wrap">
			<input type="text" name="user_login" placeholder="<?php _e('Username', 'lovestory'); ?>" />
		</div>
		<div class="field-wrap">
			<input type="password" name="user_password" placeholder="<?php _e('Password', 'lovestory'); ?>" />
		</div>
		<a href="#" class="button submit-button form-button"><?php _e('Sign In', 'lovestory'); ?></a>
		<?php if(ThemexFacebook::isActive()) { ?>
		<a href="<?php echo home_url('?facebook_login=1'); ?>" class="button facebook-login-button form-button" title="<?php _e('Sign in with Facebook', 'lovestory'); ?>">
			<span class="button-icon icon-facebook nomargin"></span>
		</a>
		<?php } ?>
		<div class="loader"></div>
		<input type="hidden" name="user_action" value="login_user" />
		<input type="hidden" class="nonce" value="<?php echo wp_create_nonce(THEMEX_PREFIX.'nonce'); ?>" />
		<input type="hidden" class="action" value="<?php echo THEMEX_PREFIX; ?>update_user" />
	</form>
</div>
<div class="clear"></div>
<?php 
query_posts(array(
	'post_type' => 'page',
	'meta_key' => '_wp_page_template',
	'meta_value' => 'template-register.php'
));

while(have_posts()) {
	the_post();
	echo '<br />';
	the_content();
	break;
}
?>
<?php get_footer(); ?>