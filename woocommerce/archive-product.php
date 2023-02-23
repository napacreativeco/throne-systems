<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<div class="product--archive">
        <div class="products">
            <?php
            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    
                    <div class="product">

                        <div class="title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        
                        <div class="image">
                            <?php
                            $price = $product->get_price();
                            if ($price < 1) { ?>
                                <img class="free-sticker" src="/wp-content/themes/throne-systems/assets/free-sticker.png" alt="" />
                            <?php } ?>
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                        </div>

                        <div class="view-button">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                View
                            </a>
                        </div>
                    </div>

                <?php
                }
            }?>
        </div>

</div>

<?php 
get_footer( 'shop' );
?>