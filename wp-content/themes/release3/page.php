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
      <?php the_excerpt(); ?>
    </div>
  </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><<?php __('No Posts Found'); ?></p>
  <?php endif; ?>
</main>

<div class="browse-blog hidden">
	<div>
		<h2>categories</h2>
		<ul>
			<li>· <a>business</a></li>
			<li>· <a>technology</a></li>
			<li>· <a>uncategorized</a></li>
		</ul>
	</div>
	<div>
		<h2>archives</h2>
		<ul>
			<li>· <a>april 2017</a></li>
			<li>· <a>march 2017</a></li>
			<li>· <a>feb 2017</a></li>
		</ul>
	</div>
</div>

<div class="browse primary75-bg"></div>
<?php get_footer(); ?>