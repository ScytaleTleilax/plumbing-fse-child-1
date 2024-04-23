<?php

/**
 * Title: Header-child
 * Slug: plumbing-fse-child/header-child
 * Categories: plumbing-fse-child, header-child
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20parts/header.htmlpx","left":"20px","top":"20px","bottom":"15px"}}},"backgroundColor":"Background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo /-->

                <!-- wp:site-title /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:navigation -->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"12px","bottom":"10px","left":"12px"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:image {"align":"center","id":81,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/foo-mail.png'); ?>" alt="" class="wp-image-81 has-secondary-color" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-primary-color has-text-color has-link-color"><strong><?php esc_html_e('Cereti o oferta', 'plumbing-fse'); ?></strong></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p style="margin-top:5px"><a class="has-base-color" href="mailto:example@example.com"><?php esc_html_e('office@amiris.ro', 'plumbing-fse'); ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group has-secondary-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"12px","bottom":"10px","left":"12px"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:image {"align":"center","id":408,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/foo-pin.png'); ?>" alt="" class="wp-image-408 has-secondary-color" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-secondary-background-color"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-primary-color"><strong><?php esc_html_e('Locatie', 'plumbing-fse'); ?></strong></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}}},"textColor":"body-text"} -->
                        <p class="has-secondary-background-color has-base-color" style="margin-top:5px"><?php esc_html_e('Strada Carierei nr.160 , Brasov', 'plumbing-fse'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column has-primary-background-color"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"12px","bottom":"10px","left":"12px"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="border-radius:5px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px"><!-- wp:image {"align":"center","id":409,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/foo-phone.png'); ?>" alt="" class="wp-image-409 has-secondary-color" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-secondary-color"><strong><?php esc_html_e('Sunati-ne!', 'plumbing-fse'); ?></strong></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"5px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p style="margin-top:5px"><a class="has-secondary-color" href="tel:+00-123-456-78" data-type="tel" data-id="tel:"><?php esc_html_e('+00-123-456-78', 'plumbing-fse'); ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->