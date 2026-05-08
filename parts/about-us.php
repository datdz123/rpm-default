<?php
/**
 * Content Value Propositions Stats - Content V1 - Desktop.
 */

defined('ABSPATH') || exit;

$stats = array(
	array(
		'value' => '1994',
		'label' => 'Founded',
	),
	array(
		'value' => '150',
		'label' => 'Employees',
	),
	array(
		'value' => '15+ countries',
		'label' => 'Global Reach',
	),
);
?>

<section class="pdf-about" aria-labelledby="pdf-about-title">
	<div class="pdf-about__inner">
		<div class="pdf-about__media">
			<img src="https://placehold.co/581x458" alt="PDF Inc. manufacturing team and facility">
		</div>

		<div class="pdf-about__content">
			<div class="pdf-about__stats" aria-label="Company statistics">
				<?php foreach ($stats as $stat) : ?>
					<div class="pdf-about-stat">
						<strong class="pdf-about-stat__value"><?php echo esc_html($stat['value']); ?></strong>
						<span class="pdf-about-stat__label"><?php echo esc_html($stat['label']); ?></span>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="pdf-section-heading">
				<h2 id="pdf-about-title" class="pdf-section-heading__title">About Us</h2>
				<p class="pdf-section-heading__eyebrow">Building partnerships, delivering excellence since 1994</p>
			</div>

			<div class="pdf-about__copy">
				<p>PDF, Inc. was incorporated in 1994 and is a privately owned company. We started in business with 7 individuals. Today we employ over 150 people.</p>
				<p>Whether you need a small piece of equipment for inspection purposes, a 900 foot assembly line, or even an entire plant design and layout, there is no project that is too small or too large for us to handle.</p>
			</div>

			<a class="pdf-button" href="<?php echo esc_url(home_url('/about-us/')); ?>">Learn More About Us</a>
		</div>
	</div>
</section>
