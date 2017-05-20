<?php /* Template Name: CV */ ?>
<?php get_header(); ?>
<main class="cv">
	<article class="flex-row">
		<div class="blank"></div>
		<div class="item">
			<h3>education</h3>
			<ul>
				<li>· <?php the_field('education1'); ?> <span><?php the_field('education_date1'); ?></span></li>
				<li>· <?php the_field('education2'); ?> <span><?php the_field('education_date2'); ?></span></li>
				<li>· <?php the_field('education3'); ?> <span><?php the_field('education_date3'); ?></span></li>
				<li>· <?php the_field('education4'); ?> <span><?php the_field('education_date4'); ?></span></li>
			</ul>
		</div>
	</article>
	<article class="flex-row">
		<div class="blank"></div>
		<div class="item">
			<h3>work</h3>
			<ul>
				<li>· <?php the_field('work1'); ?> <span><?php the_field('work_date1'); ?></span></li>
				<li>· <?php the_field('work2'); ?> <span><?php the_field('work_date2'); ?></span></li>
				<li>· <?php the_field('work3'); ?> <span><?php the_field('work_date3'); ?></span></li>
				<li>· <?php the_field('work4'); ?> <span><?php the_field('work_date4'); ?></span></li>
			</ul>
		</div>
	</article>
	<article class="flex-row">
		<div class="blank"></div>
		<div class="item">
			<h3>it</h3>
			<ul>
				<li>· <?php the_field('it1'); ?></li>
				<li>· <?php the_field('it2'); ?></li>
				<li>· <?php the_field('it3'); ?></li>
				<li>· <?php the_field('it4'); ?></li>
				<li>· <?php the_field('it5'); ?></li>
			</ul>
		</div>
	</article>
	<article class="flex-row">
		<div class="blank"></div>
		<div class="item">
			<h3>languages</h3>
			<ul>
				<li>· <?php the_field('languages1'); ?></li>
				<li>· <?php the_field('languages2'); ?></li>
				<li>· <?php the_field('languages3'); ?></li>
			</ul>
		</div>
	</article>
</main>

<div class="red-background-small1"></div>
<div class="red-background-small2"></div>
<?php get_footer(); ?>