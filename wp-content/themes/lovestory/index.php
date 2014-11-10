<?php 
get_header();

if(ThemexUser::isUserFilter()) {
	get_template_part('template', 'profiles');
} else {
	get_template_part('template', 'posts');
}

get_footer(); 
?>