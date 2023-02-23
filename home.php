<?php
// Blog Archive

get_header(); ?>
<h1 style="display: none;"><?php the_title(); ?></h1>

<div class="blog--container">
    
    <h1 class="page-title">Journal</h1>

    <div class="posts">
        <?php
            while ( have_posts() ) {
                the_post(); ?>
                
                <div class="post">

                    <div class="title">
                        <div>
                            <h2 onclick="window.location='<?php the_permalink(); ?>';"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="view-button">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                View
                            </a>
                        </div>
                    </div>
                    
                    <div class="image" onclick="window.location='<?php the_permalink(); ?>';">
                        <?php if (get_the_post_thumbnail()) {?>
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                        <?php } else { ?>
                            <img src="/wp-content/uploads/woocommerce-placeholder.png" alt="Throne" />
                        <?php } ?>
                    </div>

                </div>

            <?php
            }
        ?>
    </div>



</div>

<?php get_footer(); ?>