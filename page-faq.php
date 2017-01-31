<?php
/**
 *  template name: FAQ page
 *
 * The template for displaying FAQ page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

get_header();

get_template_part('template-parts/globals/content', 'top-page');
get_template_part('template-parts/content', 'page-optin-top');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-2 col-sm-12 text-center">
						<h3><?php the_field('secondary_title');?></h3>
					</div><!-- /.col-sm-12 text-center -->
				</div><!--.row-->
				<hr class="divider"><!-- /.divider -->
				<div class="row">
					<div class="col-md-8 col-md-push-2 col-sm-12">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php
							// check if the repeater field has rows of data
							if( have_rows('faq') ):
								$count = 1;
								// loop through the rows of data
								while ( have_rows('faq') ) : the_row('faq');

									?>

									<div class="panel panel-default">
										<div class="panel-heading question" role="tab" id="heading<?php echo $count;  ?>">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
<!--													<i class="fa fa-plus"></i>-->
													<?php the_sub_field('faq_q');?>
												</a>
											</h4>
										</div>
										<div id="collapse<?php echo $count; ?>" class="panel-collapse collapse answer <?php if ($count == 1 ){echo 'in';} ;?>" role="tabpanel" aria-labelledby="heading<?php echo $count; ?>">
											<div class="panel-body">
												<?php the_sub_field('faq_a');?>
											</div>
										</div>
									</div>

									<?php $count++;
								endwhile;


							endif;
							?>
						</div><!--#accordion-->
					</div><!-- /.col-md-8 col-md-push-2 col-sm-12 -->
				</div><!-- .row -->
				<div class="row">
					<hr class="divider">
					<!-- /.divider -->
					<div class="lead faq-bottom-text">
						<?php the_field('bottom_text');?>
					</div>
					<!-- /.faq-bottom-text -->
				</div>
				<!-- /.row -->
			</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
