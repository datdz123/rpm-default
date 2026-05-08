<?php
/**
 * Content Icon List - Content i2 - Desktop.
 */

defined('ABSPATH') || exit;

$capabilities = array(
	array(
		'icon'        => 'fa-cogs',
		'title'       => 'Engineering',
		'description' => 'Expert guidance on mechanical and electrical engineering problems, including troubleshooting.',
	),
	array(
		'icon'        => 'fa-wrench',
		'title'       => 'Specialty Services',
		'description' => 'Prototyping, CAD/CAM design assistance, and product design consultation.',
	),
	array(
		'icon'        => 'fa-check-circle',
		'title'       => 'Quality Assurance',
		'description' => 'ISO 9001-2015 Certified, Duns - 82-487-3954, NAICS - 332999.',
	),
);
?>

<section class="pdf-capabilities" aria-labelledby="pdf-capabilities-title">
	<div class="pdf-capabilities__media">
		<img src="https://placehold.co/720x636" alt="PDF fabrication and process development equipment">
	</div>

	<div class="pdf-capabilities__content">
		<div class="pdf-section-heading pdf-section-heading--light pdf-section-heading--split">
			<h2 id="pdf-capabilities-title" class="pdf-section-heading__title">Our Capabilities</h2>
			<a class="pdf-button pdf-button--light" href="<?php echo esc_url(home_url('/capabilities/')); ?>">View All</a>
		</div>

		<div class="pdf-capabilities__rule" aria-hidden="true"></div>

		<div class="pdf-capabilities__list">
			<?php foreach ($capabilities as $capability) : ?>
				<article class="pdf-capability-item">
					<div class="pdf-capability-item__icon" aria-hidden="true">
						<i class="fa <?php echo esc_attr($capability['icon']); ?>"></i>
					</div>
					<div class="pdf-capability-item__body">
						<h3 class="pdf-capability-item__title"><?php echo esc_html($capability['title']); ?></h3>
						<p class="pdf-capability-item__description"><?php echo esc_html($capability['description']); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
