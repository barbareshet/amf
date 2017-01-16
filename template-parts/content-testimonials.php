<section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="section-title"><?php the_field('testimonial_section_title');?></h3>
                <p class="section-desc"><?php the_field('testimonial_section_desc');?></p>
            </div>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(array(
               'post_type' =>'testimonial',
                'orderby' => 'post_id',
            ));
            if($loop->have_posts() ):
                while($loop->have_posts() ): $loop->the_post();
?>
                    <div class="col-sm-12 text-center">
                        <h3 class="section-title"><?php the_field('testimonial_section_title');?></h3>
                        <p class="section-desc"><?php the_field('testimonial_section_desc');?></p>
                    </div>
            <?php endwhile;?>
            <?php wp_reset_postdata();?>
            <?php endif;?>
        </div>
    </div>
</section>
