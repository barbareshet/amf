<div class="container bottom-benefits">
    <div class="row">
        <?php if(have_rows('service_benefit', 'options')) :?>
        <?php while(have_rows('service_benefit', 'options')) : the_row();?>
        <?php $benefit_img = get_sub_field('benefit_img','options');?>
        <div class="col-md-4 col-sm-12 benefit">
            <img src="<?php echo $benefit_img['url'];?>" alt="<?php echo $benefit_img['alt'];?>" class="benefit-img">
            <div class="benefit-text">
                <?php the_sub_field('benefit_title','options');?>
            </div>
            <!-- /.benefit-text -->
        </div>
        <!-- /.col-ms-4 col-sm-12 benefit -->
            <?php endwhile; endif;?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container bottom-benefits -->
