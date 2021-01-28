<?php get_header(); ?>
<?php if(have_posts()) {?>
	<?php while(have_posts()) { ?>
		<?php the_post();?>
			<h2>
				<a href="<?php the_permalink()?>" title="<? the_title_attribute(); ?>"><?php the_title()?></a>
			</h2>
			<div>
			Posted on: <a href="<?php the_permalink()?>" ><time><?php the_date("l, Fj, Y"); ?></time></a>
			By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo get_the_author(); ?></a>
			</div>
			<div>
				<?php the_excerpt();?>
			</div>
			<a  href = "<?php echo get_the_permalink() ?>" title="<? the_title_attribute(); ?>" > read more</a>
	<?php }?>
	<?php the_posts_pagination()?>
<?php } else { ?>

<p> Sorry, No Post found</p>

<?php } ?>

<?php get_footer(); ?>