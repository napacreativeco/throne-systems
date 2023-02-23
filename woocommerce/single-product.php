<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<?php global $product; ?>

<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

    <article class="single-product">
        <!--
        *
        * PRODUCT DETAILS
        *
        -->
        <div class="product-details">

            <div class="product-title jetbrains">
                <h1 class="jetbrains"><?php the_title(); ?></h1>
            </div>

            <div class="product-excerpt jetbrains">
                <?php the_excerpt(); ?>
            </div>

            <div class="product-description">
                <p class="jetbrains">
                    <?php the_content(); ?>
                </p>
            </div>

            <div class="details-table">
                <div class="table-row">
                    <div class="table-cell formats">
                        <h2 class="table-title">Formats</h2>
                        <p><?php the_field('plugin_formats'); ?></p>
                    </div>
                    <div class="table-cell version">
                        <h2 class="table-title">Version</h2>
                        <p><?php the_field('plugin_version'); ?></p>
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell tested-on">
                        <h2 class="table-title">Tested on</h2>
                        <p><?php the_field('plugin_was_tested_on'); ?></p>
                    </div>
                    <div class="table-cell price">
                        <h2 class="table-title">Price</h2>

                        <?php
                        $price = $product->get_price();
                        if ($price < 1) { ?>
                            <p>FREE</p>
                        <?php } else { ?>
                            <p>$<?php echo $product->get_price(); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

        <!--
        *
        * PURCHASE DETAILS
        *
        -->
        <div class="purchase-details">

            <div class="disclaimer">
                <span class="jetbrains">Product Disclaimer</span>
                <div class="disclaimer--box">
                    <p><?php the_field('product_disclaimer'); ?></p>
                </div>
            </div>

            <div class="add-to-cart">
                <?php 
                echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add-to-cart--button button %s product_type_%s">%s</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( $product->get_id() ),
                    esc_attr( $product->get_sku() ),
                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                    esc_attr( $product->get_type() ),
                    esc_html( $product->add_to_cart_text() )
                ), $product );
                ?>
            </div>

        </div>

        <!--
        *
        * SLIDESHOW
        *
        -->
        <div class="product-slideshow">

            <?php $attachment_ids = $product->get_gallery_image_ids(); ?>

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach( $attachment_ids as $attachment_id ) { ?>
                        <div class="swiper-slide">
                            <?php
                            $price = $product->get_price();
                            if ($price < 1) { ?>
                                <img class="free-sticker" src="/wp-content/themes/throne-systems/assets/free-sticker.png" alt="" />
                            <?php } ?>

                            <img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>">

                        </div>
                    <?php } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>



    </article>

<?php endwhile; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

<?php get_footer(); ?>