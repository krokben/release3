<?php /* Template Name: Front-page */ ?>
<?php get_header(); ?>
		<div class="logo">
			<svg width="80%" height="85%" viewBox="0 0 251 153" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <!-- Generator: Sketch 43.2 (39069) - http://www.bohemiancoding.com/sketch -->
			    <desc>Created with Sketch.</desc>
			    <defs></defs>
			    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="Mobile-Portrait" transform="translate(-69.000000, -55.000000)">
			            <circle id="Oval" cx="74.5" cy="76.5" r="5.5"></circle>
			            <circle id="Oval-Copy" cx="109.5" cy="100.5" r="11.5"></circle>
			            <circle id="Oval-Copy-2" cx="161" cy="132" r="20"></circle>
			            <circle id="Oval-Copy-3" cx="229.5" cy="159.5" r="27.5"></circle>
			            <circle id="Oval-Copy-4" cx="316.5" cy="184.5" r="39.5"></circle>
			        </g>
			    </g>
			</svg>
		</div>

		<main class="services">
			<div class="service-right">
				<i class="fa fa-floppy-o" aria-hidden="true"></i>
				<h4><?php the_field('fp-h1'); ?></h4>
				<p><?php the_field('fp-p1'); ?></p>
			</div>
			<div class="service-left">
				<i class="fa fa-pencil" aria-hidden="true"></i>
				<h4><?php the_field('fp-h2'); ?></h4>
				<p><?php the_field('fp-p2'); ?></p>
			</div>
			<div class="vertical-line"></div>
			<div class="horizontal-line"></div>
			<div class="hole"></div>
		</main>

		<div class="skills">
			<div class="container">
				<div class="author">
					<div class="circle" style="background-image:url('<?php the_field('fp-photo'); ?>')"></div>
					<div class="line"></div>
					<div class="name">tommy svensson</div>
				</div>
				<div class="list flex-row-wrap space-between">
					<div class="item">html</div>
					<div class="item-bar"><div class="bar html"></div></div>
					<div class="item">css</div>
					<div class="item-bar"><div class="bar css"></div></div>
					<div class="item">js</div>
					<div class="item-bar"><div class="bar js"></div></div>
					<div class="item">react</div>
					<div class="item-bar"><div class="bar react"></div></div>
					<div class="item">php</div>
					<div class="item-bar"><div class="bar php"></div></div>
					<div class="item">sktch</div>
					<div class="item-bar"><div class="bar sktch"></div></div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>