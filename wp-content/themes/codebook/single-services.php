<?php get_header(); ?>

<div class="singlePage">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-9">
                <div class="postContent">
                <div class="postTitle"><h2 class="pb-4"><?php the_title(); ?></h2></div>
                <!-- <div class="imgFeatured pb-5"><?php //the_post_thumbnail(); ?></div> -->
                <?php //the_content(); ?>
                <?php get_template_part( 'template-parts/content', 'page' );?>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                <div class="sidebarContent">
                    <h2 class="pb-4">Other Services</h2>
                   <?php $args = array('post_type' => 'services', 'post__not_in' => array( get_the_ID() ));
				    $the_query = new WP_Query( $args );
				    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				    <?php $featured_img_url_default = 'https://estudylink.com/wp-content/uploads/2021/04/Estudylink.png'; ?>
				    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'medium_large'); ?>
				    <div class="sidebarDestinations">
    				    <a href="<?php the_permalink(); ?>">
    				        <div class="img" style="background: url(<?php if($featured_img_url) { echo $featured_img_url; } else { echo $featured_img_url_default; } ?>) no-repeat center/cover"></div>
    				        <div class="title"><?php the_title(); ?></div>
    				    </a>
    				</div>
				    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>