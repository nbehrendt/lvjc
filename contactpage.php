<?php
/* Template Name: Contact */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on yourd WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LVJewish20
 */

get_header();
?>

	<main id="primary" class="site-main">
    <h1>CONTACT PAGE HERE</h1>
	</main><!-- #main -->
	<section class="contact-copy">
		<div class="contact-intro">
			<?php the_field('contact_one') ?>
		</div>
	</section>

<?php
