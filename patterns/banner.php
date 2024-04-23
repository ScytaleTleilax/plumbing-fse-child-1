<?php

/**
 * Title: Banner-Child
 * Slug: plumbing-fse-child/banner-child
 * Categories: plumbing-fse-child, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/banner_home.jpg'); ?>","id":666,"dimRatio":60,"overlayColor":"black","focalPoint":{"x":0.63,"y":0.5},"minHeight":99,"minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;min-height:99vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-223" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/banner_home.jpg'); ?>" style="object-position:63% 50%" data-object-fit="cover" data-object-position="63% 50%" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"5px","right":"5px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-primary-border-color" style="border-width:2px;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"3px","textTransform":"capitalize"},"spacing":{"padding":{"top":"8px","right":"20px","bottom":"8px","left":"20px"}}},"backgroundColor":"secondary","textColor":"white","className":"slide-sub-title","fontSize":"body-text"} -->
                        <h4 class="wp-block-heading has-text-align-center slide-sub-title has-white-color has-secondary-background-color has-text-color has-background has-body-text-font-size" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:capitalize"><?php esc_html_e('Lorem Ipsum', 'plumbing-fse'); ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"},"spacing":{"margin":{"top":"25px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"banner-title"} -->
                <h2 class="wp-block-heading has-text-align-center has-banner-title-font-size" style="margin-top:25px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e('Lorem Ipsum Doloret Lorem Ipsum', 'plumbing-fse'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem Ipsum doloret Lorem Ipsum doloret Lorem Ipsum doloret Lorem Ipsum doloret', 'plumbing-fse'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"textColor":"white","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.22em","fontSize":"14px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"10px","bottom":"10px"}},"border":{"radius":"0px","width":"2px"},"color":{"background":"#00000000"}},"borderColor":"white","className":"is-style-fill"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:0.22em"><a class="wp-block-button__link has-white-color has-text-color has-background has-border-color has-white-border-color wp-element-button" style="border-width:2px;border-radius:0px;background-color:#00000000;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px"><?php esc_html_e('Detalii', 'plumbing-fse'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->