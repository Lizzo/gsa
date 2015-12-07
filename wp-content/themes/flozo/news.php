<?php /* Template Name: News  */ ?>

<?php get_header(); ?>
<div id="content">
<div class="info">
<h1><?php the_title(); ?></h1>
<div class="news">

  <?php if(get_field('news')): ?>

  	<ul>

  	<?php while(has_sub_field('news')): ?>

  		<li>
        <img class="partner-logo" src="<?php the_sub_field('logo'); ?>"></img>
        <a class="article-title" href="<?php the_sub_field('website'); ?>"><?php the_sub_field('title'); ?></a>
      </li>

  	<?php endwhile; ?>

  	</ul>

  <?php endif; ?>


</div>
</div>
<?php wp_reset_query(); ?>
</div>
<?php get_footer();?>
