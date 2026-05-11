<?php get_template_part('parts/covid-banner'); ?>
<div class="sh-sticky-wrap">
	<header class="site-header header0 header6">
		<div class="top-line">
			<div class="container px-5">
				<div class="d-flex align-items-center justify-content-between w-100">
							<div class="header-topline-menu navbar-expand-xl navbar-dark d-none d-xl-block mr-4">
								<?php wp_nav_menu(
									array(
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => '',
										'menu'			  => 'Top Nav Menu',
										'menu_class'      => 'navbar-nav',
										'fallback_cb'     => '',
										'menu_id'         => 'top-line-menu',
										'depth'           => 0,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
							</div>
							<div class="contact-info d-flex align-items-center">
								<?php
								$email_address = get_field('global_email', 'option');
								if ($email_address): ?>
									<span class="sh-email mr-4"><a class="cms_email d-flex align-items-center" href="mailto:<?php echo strtolower($email_address); ?>" title="Email Us" aria-label="Email Us"><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> <span><?php echo strtolower($email_address); ?></span></a></span>
								<?php endif ?>

								<?php
								$tel_number = get_field('global_phone_number', 'option');
								$unformatted_tel_number = preg_replace("/[^0-9]/", '', $tel_number); ?>
								<?php if ($tel_number): ?>
									<span class="sh-ph"><a class="cms_phone d-flex align-items-center" href="tel:<?php echo $unformatted_tel_number; ?>" aria-label="Call Us" title="Call Us"><i class="fa fa-phone mr-2" aria-hidden="true"></i> <span><?php echo $tel_number; ?></span></a></span>
								<?php endif ?>
							</div>
					</div>
				</div>
			</div>

		<div class="header-inner">
			<nav class="navbar navbar-expand-xl navbar-dark">
				<div class="container px-5">
					<!-- Your site title as branding in the menu -->
					<?php $logo = get_field('global_company_logo', 'option'); ?>
					<?php if (!$logo && ! has_custom_logo()) { ?>

						<?php if (is_front_page() && is_home()) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

						<?php endif; ?>


						<?php } else {

						if (!empty($logo)): ?>
							<a href="<?php bloginfo('url'); ?>" class="navbar-brand site-logo"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>"></a>
					<?php else:
							the_custom_logo();
						endif;
					} ?><!-- end custom logo -->


					<!-- The WordPress Menu goes here -->
					<a href="javascript:void(0)" class="site-nav-container-screen" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Overlay"><span>Overlay</span></a>
					<div class="site-nav-container collapse navbar-collapse" id="navbarNavDropdown">
						<div class="snc-header">
							<div class="header-topline-menu header-topline-mob-menu">
								<?php wp_nav_menu(
									array(
										'menu'			  => 'Top Nav Menu',
										'menu_class'      => 'navbar-nav m-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'top-line-menu',
										'depth'           => 3,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
							</div>

							<button class="navbar-toggler navbar-close-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Close', 'understrap'); ?>">
								<i class="fa fa-times" aria-hidden="true"></i>
							</button>
						</div>
						<?php if (has_nav_menu('primary')) : ?>
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'mobile-nav main-menu',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 0,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						<?php endif; ?>
					</div>

					<div class="utility-nav navbar-right">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
						<?php
						$tel_number = get_field('global_phone_number', 'option');
						$unformatted_tel_number = preg_replace("/[^0-9]/", '', $tel_number); ?>
						<?php if ($tel_number): ?>
							<span class="sh-ph d-md-none m-0"><a class="cms_phone" href="tel:<?php echo $unformatted_tel_number; ?>" aria-label="Phone Number" title="<?php echo $unformatted_tel_number; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span><?php echo $tel_number; ?></span></a></span>
						<?php endif ?>

						<?php
						$email_address = get_field('global_email', 'option');
						if ($email_address): ?>
							<span class="sh-email d-md-none m-0"><a class="cms_email" href="mailto:<?php echo strtolower($email_address); ?>" title="Email Us" aria-label="Email Us"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span><?php echo $email_address; ?></span></a></span>
						<?php endif ?>

						<span class="sh-search mx-md-3"><a href="#search" class="search-form-tigger" data-toggle="search-form" aria-label="Search"><i class="fa fa-search mr-2" aria-hidden="true"></i> <span>Search</span></a></span>
						<?php
						$link = get_field('contact_link', 'option');
						if ($link):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a class=" btn-alt2 btn d-none d-md-inline-block  " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
							<a class="btn btn-alt2 d-md-none m-0 sh-contact-mob-cta sh-contact-cta" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo $link_title; ?></a>
						<?php endif; ?>
						<?php
						$rfq_link = get_field('request_quote_link', 'option');
						if ($rfq_link):
							$rfq_link_url = $rfq_link['url'];
							$rfq_link_title = $rfq_link['title'];
							$rfq_link_target = $rfq_link['target'] ? $rfq_link['target'] : '_self';
						?>
							<a class="btn btn-alt2 btn-primary d-none d-md-inline-block m-0 sh-rfq-cta" href="<?php echo esc_url($rfq_link_url); ?>" target="<?php echo esc_attr($rfq_link_target); ?>"><?php echo esc_html($rfq_link_title); ?></a>
							<a class="btn btn-alt2 btn-primary d-md-none sh-rfq-mob-cta m-0 sh-rfq-cta" href="<?php echo esc_url($rfq_link_url); ?>" target="<?php echo esc_attr($rfq_link_target); ?>"><?php echo $rfq_link_title; ?></a>
						<?php endif; ?>
					</div>
					
				</div>
			</nav>
		</div>
	</header>
</div>