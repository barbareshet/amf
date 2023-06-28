<?php
$hero_quote_btn = array(
	'text'  => get_field('hero_get_quote_btn_text'),
	'url'   => get_field('hero_get_quote_btn_link'),
);
$hero_vid_url = get_field('hero_video_bg_url');


?>

<section id="hero">
	<div class="hero-overlay"></div>
<!--	--><?php // if ( is_user_logged_in() && current_user_can('administrator')){ ?>
		<video class="hero-video" loop autoplay muted poster="<?php echo get_stylesheet_directory_uri().'/assets/img/hero_new_light.jpg';?>">
			<source src="<?php echo $hero_vid_url;?>" type="video/mp4">
		</video>
<!--	--><?php //}  ?>
	<!-- /.hero-overlay -->
	<?php get_template_part('template-parts/globals/content', 'topbar');?>
	<div class="container hp-title-wrapper">
        <?php if ( $hero_quote_btn['text'] ){ ?>
        <div class="row">
            <div class="col-sm-12 text-center">
	            <a href="<?php echo esc_url( $hero_quote_btn['url'] );?>" class="btn btn-default btn-lg">
		            <?php echo $hero_quote_btn['text'];?>
	            </a>
            </div>


            <?php /*
			<div class="col-sm-12">
				<div class="lead hp-secondary-title"><?php the_field('secondary_title');?></div>
			</div>
            */?>
		</div>
        <?php } ?>
		<div class="row">
			<?php if ( wp_is_mobile() ){
				$directionr = 'center';
			} else {
				$directionr = 'right';
			} /*?>
			<div class="col-md-6 col-sm-12 btn-wrapper text-<?php echo $directionr;?>">
				<a class="btn btn-lg hp-btn hp-quote-btn" href="<?php the_field('left_btn_link');?>" target="_blank">

                    <?php if ( !wp_is_mobile() ){

	                    the_field('left_btn_text');
                    } else {

                        echo wordwrap( get_field('left_btn_text'), 25, "<br>\n",TRUE );
                    }
                    ?>
                </a>
			</div>
            <?php */ if ( wp_is_mobile() ){
                $direction = 'center';
            } else {
                $direction = 'center';
            } /*?>
			<div class="col-xs-12 btn-wrapper text-<?php echo $direction;?>">
				<a class="btn btn-default btn-lg hp-btn hp-book-btn" href="<?php the_field('right_btn_link');?>"><?php the_field('right_btn_text');?></a>
			</div>
            <?php */ ?>
		</div>
	</div>


</section>
