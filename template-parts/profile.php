<?php
if ( get_theme_mod( 'show_profile_section' , 1 ) ):
?>
<header class="header-home animated">
    <div class="selfie <?php echo get_theme_mod('profile_animation' , true) ? "has-animation" : ''; ?>"><?php indigo_show_avatar(); ?></div>
    <a class="title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="title"><?php bloginfo( 'name' ); ?></h1></a>
	<?php if ( get_bloginfo( 'description' )  !== '' ) { ?>
		<h2 class="description"><?php bloginfo( 'description' ); ?></h2>
	<?php } ?>
    <div class="social-links">
		<?php indigo_show_socials(); ?>
    </div>
</header>
<?php
endif;