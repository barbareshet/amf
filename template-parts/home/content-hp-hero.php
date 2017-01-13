<section id="hero">
	<?php get_template_part('template-parts/globals/content', 'topbar');?>
	<div class="container hp-title-wrapper">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php the_field('hero_title');?></h1>
			</div>
			<div class="col-sm-12 secondary">
				<p><?php the_field('secondary_title');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 btn-wrapper text-right">
				<a class="btn btn-success btn-lg" href="#"><?php the_field('left_btn_text');?></a>
			</div>
			<div class="col-sm-6 btn-wrapper text-left">
				<a class="btn btn-default btn-lg" href="#"><?php the_field('right_btn_text');?></a>
			</div>
		</div>
	</div>


</section>
