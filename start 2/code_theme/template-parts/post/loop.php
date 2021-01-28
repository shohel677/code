			<?php if(have_posts()) {?>
				<?php while(have_posts()) { ?>
					<?php the_post();?>
					<div class="post-sub">
						<h2>
							<a href="<?php the_permalink()?>" title="<? the_title_attribute(); ?>"><?php the_title()?></a>
						</h2>
						<div>
						<?php _codetheme_post_meta();?>
						</div>
						<div>
							<?php the_excerpt();?>
						</div>
						<?php _codetheme_readmore();?>
						</div>
				<?php }?>
				<?php the_posts_pagination()?>

			<?php } else { ?>

			<p> <?php esc_html_e('Sorry, No Post found', '_codetheme') ?></p>

			<?php } ?>