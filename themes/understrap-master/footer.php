<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 offset-md-2 footer-brand animated fadeInLeft">
            	<img class="logo" src="/wp-content/themes/understrap-master/img/DEITCH.png"></img>
                <!--<p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>-->
            </div>
        	<div class="col-md-3 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                    </ul>
                </div>
            	<!--<div class="col-md-6">-->
             <!--       <ul class="list">-->
             <!--           <li><a href="#">Contact Us</a></li>-->
             <!--       </ul>-->
             <!--   </div>-->
            </div>
        	<div class="col-md-3 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>
        	
        </div>
                
    <section style="font-size: 14px; text-align:center; padding-top: 30px; margin:10px auto;"><p>&copy; 2018 Deitch Custom Homes, All rights reserved | Designed by <a style="color: orange;" href="http://enfoplus.net">Web Content Development</a></p></section>
    </footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

