<?php
/**
 * Content Carousel of Images w/ Subtitle (Description on Hover) - Content c1.
 */

defined('ABSPATH') || exit;

$updates = array(
	array(
		'title'       => 'PDF, Inc. Celebrates 30 Years of Manufacturing Excellence',
		'description' => 'A milestone year recognizing decades of engineering, fabrication, and manufacturing support.',
		'image'       => 'https://placehold.co/280x382',
		'url'         => '#',
	),
	array(
		'title'       => 'New Fiber Optic Laser Expands Our Cutting Capabilities',
		'description' => 'Expanded equipment capacity helps support precise, efficient fabrication work.',
		'image'       => 'https://placehold.co/280x382',
		'url'         => '#',
	),
	array(
		'title'       => 'Expanded Robotic Welding Capabilities Now Available',
		'description' => 'New robotic welding support brings additional consistency and throughput to production needs.',
		'image'       => 'https://placehold.co/280x382',
		'url'         => '#',
	),
	array(
		'title'       => 'Manufacturing Support for Complex Assembly Lines',
		'description' => 'PDF, Inc. continues to support custom process development from concept through installation.',
		'image'       => 'https://placehold.co/280x382',
		'url'         => '#',
	),
);
?>

<section class="pdf-news" aria-labelledby="pdf-news-title">
	<div class="pdf-news__inner">
		<div class="pdf-news__intro">
			<div class="pdf-section-heading">
				<h2 id="pdf-news-title" class="pdf-section-heading__title">News &amp; Events</h2>
				<p class="pdf-section-heading__text pdf-section-heading__text--strong">Stay up to date with the latest announcements from PDF, Inc.</p>
			</div>
			<a class="pdf-button" href="<?php echo esc_url(home_url('/news-events/')); ?>">See All Updates</a>
		</div>

		<div class="pdf-news-carousel" data-pdf-carousel>
			<div class="pdf-news-carousel__track">
				<?php foreach ($updates as $update) : ?>
					<a class="pdf-news-card" href="<?php echo esc_url($update['url']); ?>" style="--news-image: url('<?php echo esc_url($update['image']); ?>');">
						<div class="pdf-news-card__content">
							<h3 class="pdf-news-card__title"><?php echo esc_html($update['title']); ?></h3>
							<p class="pdf-news-card__description"><?php echo esc_html($update['description']); ?></p>
						</div>
					</a>
				<?php endforeach; ?>
			</div>

			<div class="pdf-news-carousel__controls" aria-label="News carousel controls">
				<button class="pdf-slider-button" type="button" data-pdf-carousel-next aria-label="Next update"></button>
				<button class="pdf-slider-button pdf-slider-button--prev" type="button" data-pdf-carousel-prev aria-label="Previous update"></button>
			</div>
		</div>
	</div>
</section>


