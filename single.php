<?php get_header(); ?>

<div class="post--container">
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>

    <div class="post--image" style="background: url('<?php echo get_the_post_thumbnail_url() ?>'); background-size: cover; background-position: center center;">
    </div>

    <?php the_content(); ?>

</div>

<?php get_footer(); ?>