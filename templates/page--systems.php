<?php
/* Template name: Systems */

get_header();
?>

<video id="video" autoplay muted loop>
    <source src="https://thrxne.com/wp-content/uploads/0001-0250.webm" type="video/webm">
    <source src="https://thrxne.com/wp-content/uploads/0001-0250.mp4" type="video/mp4">
</video>

<div class="systems--container">

    <img class="reverb-image" src="https://thrxne.com/wp-content/uploads/reverb-tilted-dark-crop.jpg" alt="Reverb" />

    <div class="systems--module-title">
        <a href="/shop" title="Products">
            <h3>Products</h3>
        </a>
    </div>  

    <div class="systems--row">
        <ul>
            <li>
                <details>

                    <summary class="mouse-change">
                        01.Reverb
                    </summary>

                    <div class="image">
                        <img src="https://thrxne.com/wp-content/uploads/reverb-tilted-product-image.jpg" alt="Reverb" />
                    </div>

                    <div class="system-info">

                        <?php $_product = wc_get_product( '16' ); ?>

                        <div class="excerpt">
                            <?php echo $_product->get_short_description(); ?>
                        </div>

                        <div class="description">
                            <?php echo $_product->get_description(); ?>
                        </div>

                        <a class="mouse-change" href="/products/reverb" title="Reverb">View</a>

                    </div>

                </details>
            </li>
            <li>
            <details>

                    <summary class="mouse-change">
                        02.Saturation
                    </summary>

                    <div class="system-info">
                        <?php $_product = wc_get_product( '33' ); ?>
                        <div class="excerpt">
                            <?php echo $_product->get_short_description(); ?>
                        </div>
                        <div class="description">
                            <?php echo $_product->get_description(); ?>
                        </div>

                        <a class="mouse-change" href="/products/saturation" title="Saturation">View</a>
                    </div>

                </details>
            </li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>