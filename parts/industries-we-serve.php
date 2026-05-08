<?php
/**
 * Industries We Serve masonry image grid.
 *
 * Exported from Figma block:
 * Content Mason Grid of Images w/ Subtitle (Description on Hover) - Content m1 - Desktop.
 */

defined('ABSPATH') || exit;

$industries = array(
	array(
		'title'       => 'Automotive',
		'description' => 'Custom equipment, tooling, automation, and process support for automotive manufacturing environments.',
		'image'       => 'https://placehold.co/580x340',
		'size'        => 'large',
	),
	array(
		'title'       => 'Transportation',
		'description' => 'Fabrication and process development support for transportation systems, assemblies, and production lines.',
		'image'       => 'https://placehold.co/580x340',
		'size'        => 'large',
	),
	array(
		'title'       => 'Agriculture',
		'description' => 'Durable production equipment and specialty fabrication for agricultural manufacturing needs.',
		'image'       => 'https://placehold.co/580x220',
		'size'        => 'small',
	),
	array(
		'title'       => 'Construction',
		'description' => 'Heavy-duty process equipment, fixtures, and fabricated systems for construction-related operations.',
		'image'       => 'https://placehold.co/580x220',
		'size'        => 'small',
	),
	array(
		'title'       => 'Outdoor Power Equipment',
		'description' => 'Manufacturing support for outdoor power equipment, from prototyping through production-ready systems.',
		'image'       => 'https://placehold.co/580x220',
		'size'        => 'small',
	),
);

?>
<section class="pdf-industries" aria-labelledby="pdf-industries-title">
	<div class="pdf-industries__inner">
		<header class="pdf-industries__header">
			<h2 id="pdf-industries-title" class="pdf-industries__title">Industries We Serve</h2>
		</header>

		<div class="pdf-industries__grid" data-industries-grid>
			<div class="pdf-industries__column">
				<?php foreach (array_slice($industries, 0, 2) as $industry) : ?>
					<article class="pdf-industry-card pdf-industry-card--<?php echo esc_attr($industry['size']); ?>" tabindex="0" style="--industry-image: url('<?php echo esc_url($industry['image']); ?>');">
						<div class="pdf-industry-card__content">
							<h3 class="pdf-industry-card__title"><?php echo esc_html($industry['title']); ?></h3>
							<p class="pdf-industry-card__description"><?php echo esc_html($industry['description']); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="pdf-industries__column">
				<?php foreach (array_slice($industries, 2) as $industry) : ?>
					<article class="pdf-industry-card pdf-industry-card--<?php echo esc_attr($industry['size']); ?>" tabindex="0" style="--industry-image: url('<?php echo esc_url($industry['image']); ?>');">
						<div class="pdf-industry-card__content">
							<h3 class="pdf-industry-card__title"><?php echo esc_html($industry['title']); ?></h3>
							<p class="pdf-industry-card__description"><?php echo esc_html($industry['description']); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>


