<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">
    <div class="container">
        <div class="row sf-top-wrap">
        <div class="col-lg-3 col-12 sf-brand-col">
        <?php $logo = get_field('global_company_logo','option'); ?>
        <?php if( !empty($logo) ): ?>
            <a href="<?php bloginfo('url'); ?>" class="sf-logo">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" title="<?php echo esc_attr($logo['alt']); ?>">
            </a>
        <?php endif;?>
            <div class="sf-cert-badge" aria-label="Verified supplier">
                <span class="sf-cert-badge__star" aria-hidden="true">★</span>
                <span class="sf-cert-badge__top">Thomas</span>
                <span class="sf-cert-badge__main">Verified</span>
                <span class="sf-cert-badge__bottom">Supplier</span>
            </div>
            </div>
        <div class="col-lg-3 col-12 sf-menu-col">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           

            <div class="col-lg-2 col-12 sf-menu-col">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Right Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>

            <div class="col-lg-4 col-12 sf-contact-col">
                <ul class="sf-contact-info">
                    <?php if(get_field('global_address','option')):?>
                        <li class="sf-address"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo esc_html(get_field('global_company_name','option'));?> <?php echo esc_html(get_field('global_address','option'));?></span></li>
                    <?php endif;?>

                    <?php if(get_field('global_email','option')):?>
                        <li class="sf-email"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo esc_attr(get_field('global_email','option'));?>" class="sf-mail" aria-label="Email Us"><?php echo esc_html(get_field('global_email','option'));?></a></li>
                    <?php endif;?>

                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    <?php if ($string): ?>
                        <li class="sf-ph"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo esc_attr($string);?>" aria-label="Phone Number"><?php echo esc_html(get_field('global_phone_number','option'));?></a></li>
                    <?php endif ?>                 

                    <?php if (get_field('global_fax','option')): ?>
                        <li class="sf-fax"><i class="fa fa-fax" aria-hidden="true"></i><a href="javascript:void(0)" class="nonlink fax" tabindex="-1" aria-label="Fax Number"><?php echo esc_html(get_field('global_fax','option'));?></a></li>
                    <?php endif;?>
                </ul>
                <div class="sf-btn-wrap">
                    <?php 
                    $link = get_field('request_quote_link', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-primary btn-sm sf-rfq-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php 
                    $link2 = get_field('contact_link', 'option');
                    if( $link2 ): 
                        $link_url = $link2['url'];
                        $link_title = $link2['title'];
                        $link_target = $link2['target'] ? $link2['target'] : '_self';
                        ?>
                        <a class="btn btn-alt-on-color btn-sm sf-contact-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved | Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a></p>

            <div class="social-icons">
                <?php
                if( have_rows('social_profiles', 'option') ): ?>
                    <?php
                    while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                        <?php
                        $sf_social_icon = get_sub_field('sp_social_icon');
                        $socialclass = str_replace(' ', '-', get_sub_field('sp_social_profile')); // Replaces all spaces with hyphens.
                        $socialclass = preg_replace('/[^A-Za-z0-9\-]/', '', $socialclass); // Removes special chars.
                        $socialclass = strtolower($socialclass); // Convert to lowercase
                        if (get_sub_field('sp_social_link')) :
                        ?>
                            <a class="<?php echo $socialclass; ?>" href="<?php echo esc_url(get_sub_field('sp_social_link')); ?>" target="_blank"  title="<?php echo get_sub_field('sp_social_profile'); ?>" rel="noreferrer noopener" aria-label="<?php echo get_sub_field('sp_social_profile'); ?>">
                        <?php endif ?>
                                <?php if ($sf_social_icon): ?>
                                    <?php echo $sf_social_icon; ?>
                                <?php endif ?>
                        <?php if (get_sub_field('sp_social_link')) : ?>
                            </a>
                        <?php endif ?>
                    <?php
                    endwhile; ?>
                <?php
                endif;  ?>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->

