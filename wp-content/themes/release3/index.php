<?php get_header(); ?>
<main class="blog flex-col">
	<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
	<div class="container flex-col">
		<div class="header flex-row space-between">
			<div class="text flex-col center">
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			</div>
			<div>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_field('image1'); ?>" />
				</a>
			</div>
		</div>
		<div class="body flex2">
      <?php if(is_single()) : ?>
		    <?php the_content(); ?>
		  <?php else : ?>
		    <?php the_excerpt(); ?>
		  <?php endif; ?>
    </div>
  </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><<?php __('No Posts Found'); ?></p>
  <?php endif; ?>
</main>

<div class="browse-blog hidden">
	<div class="searchform">
		<?php get_search_form(); ?>
	</div>
	<div>
		<h2>categories</h2>
		<ul>
			<?php wp_list_categories('exclude=&title_li='); ?>
			<!-- <li>· <a>business</a></li>
			<li>· <a>technology</a></li>
			<li>· <a>uncategorized</a></li> -->
		</ul>
	</div>
	<div>
		<h2>archives</h2>
		<ul>
			<?php $args = array(
				'type'            => 'monthly',
				'limit'           => '',
				'format'          => 'html', 
				'before'          => '· ',
				'after'           => '',
				'show_post_count' => false,
				'echo'            => 1,
				'order'           => 'DESC',
			        'post_type'     => 'post'
			);
			wp_get_archives( $args ); ?>
		</ul>
	</div>
</div>

<div class="browse primary75-bg"></div>
<?php get_footer(); ?>