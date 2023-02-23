<?php
/* Template name: Systems */

get_header();
?>

<div class="systems--container">

    <div class="systems--module-title">
        <a href="/shop" title="Products">
            <h3>Products</h3>
        </a>
    </div>  
    <div class="systems--row">
        <ul>
            <li>
                <details>
                    <summary>
                        01.Reverb
                    </summary>
                    <div class="system-info">
                        <?php $_product = wc_get_product( '16' ); ?>
                        <div class="excerpt">
                            <?php echo $_product->get_short_description(); ?>
                        </div>
                        <div class="description">
                            <?php echo $_product->get_description(); ?>
                        </div>

                        <a href="/products/reverb" title="Reverb">View</a>
                    </div>
                </details>
            </li>
            <li>
            <details>
                    <summary>
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

                        <a href="/products/saturation" title="Saturation">View</a>
                    </div>
                </details>
            </li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>