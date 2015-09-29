<?php /* Template Name: In The News  */ ?>

<?php get_header(); ?>
<div id="content">
<div class="info">
<h1><?php the_title(); ?></h1>
<div class="news">

<?php
	$args = array( 'post_type' => 'news', 'posts_per_page' => 50 );
	$loop = new WP_Query( $args );
	$count = 0;
	echo '<ul>';
	while ( $loop->have_posts() ) : $loop->the_post();

		$count++;
		$class = ($count % 3 == 1) ? 'first' : '';

		echo '<li class="'.$class.'">';
		echo '<a href="';
		the_permalink();
		echo '">';
		//echo '<div class="overlay" style="background-color:'.ot_get_option( 'main_colour' ).';"></div>';
		the_post_thumbnail('full', array('class' => 'alignleft'));
		echo '</a>';

		echo '<div class="center-flex">';

		echo '<h2><a href="';
		the_permalink();
		echo '">';
		the_title();
		echo '</a></h2>';
		echo '<div class="entry-content">';
		echo the_time('F j, Y');
		echo '</div>';
		echo '</div>';
		echo '</li>';
	endwhile;
	echo '</ul>';
?>
</div>
</div>
<?php wp_reset_query(); ?>
</div>
<?php get_footer();?>
