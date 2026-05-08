<?php
/**
 * Blog Grid of Image & Preview Text - blog g1 - Desktop.
 */

defined('ABSPATH') || exit;

$resources = array(
	array(
		'title'   => 'Revolutionizing Industries With Advanced Robotic Welding Solutions',
		'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper erat et nisi congue, porta vehicula tellus mollis...',
		'image'   => 'https://placehold.co/380x180',
		'url'     => '#',
	),
	array(
		'title'   => 'The Essential Guide to Robotic Welding Equipment',
		'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper erat et nisi congue, porta vehicula tellus mollis...',
		'image'   => 'https://placehold.co/380x180',
		'url'     => '#',
	),
	array(
		'title'   => 'Maximizing Productivity With State-Of-The-Art Robotic Welding Cells',
		'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper erat et nisi congue, porta vehicula tellus mollis...',
		'image'   => 'https://placehold.co/380x180',
		'url'     => '#',
	),
);
?>

<section class="pdf-resources" aria-labelledby="pdf-resources-title">
	<div class="pdf-resources__inner">
		<header class="pdf-section-heading pdf-section-heading--center">
			<h2 id="pdf-resources-title" class="pdf-section-heading__title">Resources</h2>
		</header>

		<div class="pdf-resource-grid">
			<?php foreach ($resources as $resource) : ?>
				<article class="pdf-resource-card">
					<a class="pdf-resource-card__image" href="<?php echo esc_url($resource['url']); ?>">
						<img src="<?php echo esc_url($resource['image']); ?>" alt="<?php echo esc_attr($resource['title']); ?>">
					</a>
					<div class="pdf-resource-card__body">
						<h3 class="pdf-resource-card__title">
							<a href="<?php echo esc_url($resource['url']); ?>"><?php echo esc_html($resource['title']); ?></a>
						</h3>
						<p class="pdf-resource-card__excerpt"><?php echo esc_html($resource['excerpt']); ?></p>
						<a class="pdf-text-link" href="<?php echo esc_url($resource['url']); ?>">Read More</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="pdf-resources__action">
			<a class="pdf-button pdf-button--large" href="<?php echo esc_url(home_url('/resources/')); ?>">View All Resources</a>
		</div>
	</div>
</section>
