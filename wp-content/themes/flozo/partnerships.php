<?php /* Template Name: Partnerships  */ ?>

<?php get_header(); ?>
<div id="content">
<div class="info">
<h1><?php the_title(); ?></h1>
<div class="partnerships">

  <?php if(get_field('parnerships')): ?>

  	<ul>

  	<?php while(has_sub_field('parnerships')): ?>

  		<li>
        <img class="partner-logo" src="<?php the_sub_field('logo'); ?>"></img>
        <div class="partner-info">
          <?php the_sub_field('content'); ?>
        </div>
        <a class="website" href="<?php the_sub_field('website'); ?>">Website</a>
      </li>

  	<?php endwhile; ?>

  	</ul>

  <?php endif; ?>


</div>
</div>
<?php wp_reset_query(); ?>
</div>
<?php get_footer();?>
