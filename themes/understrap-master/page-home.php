<?php
/**
 * Template Name: Home Page
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
		

			<main class="site-main" id="main">

				<?php the_content(); ?>

			</main><!-- #main -->

		<!-- Do the right sidebar check -->


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
