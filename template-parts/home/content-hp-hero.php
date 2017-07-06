<section id="hero">
	<div class="hero-overlay"></div>
	<!-- /.hero-overlay -->
	<?php get_template_part('template-parts/globals/content', 'topbar');?>
	<div class="container hp-title-wrapper">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php the_field('hero_title');?></h1>
			</div>
			<div class="col-sm-12">
				<div class="lead hp-secondary-title"><?php the_field('secondary_title');?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-6 btn-wrapper text-right">
				<a class="btn btn-success btn-lg hp-btn hp-quote-btn" href="<?php the_field('left_btn_link');?>"><?php the_field('left_btn_text');?></a>
			</div>
			<div class="col-sm-6 col-xs-6 btn-wrapper text-left">
				<a class="btn btn-default btn-lg hp-btn hp-book-btn" href="<?php the_field('right_btn_link');?>"><?php the_field('right_btn_text');?></a>
			</div>
		</div>
	</div>


</section>
