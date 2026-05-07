<?php
/**
 * Template Part: Content Tabs với Subcategory List & Images
 *
 * Module hiển thị tabs sản phẩm/dịch vụ với danh sách subcategory và hình ảnh.
 *
 * @package RPM_Default
 */

defined( 'ABSPATH' ) || exit;
?>



<section class="ctm-section" id="content-tabs-module">

	<!-- ===== Tab Bar ===== -->
	<div class="ctm-tabs" role="tablist">

		<!-- Tab 1: Custom Metal Parts -->
		<button class="ctm-tab is-active" role="tab" aria-selected="true" data-tab="0" id="ctm-tab-0" aria-controls="ctm-panel-0">
			<span class="ctm-tab__icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.14 12.94a7.07 7.07 0 0 0 .06-.94c0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.49.49 0 0 0-.59-.22l-2.39.96a7.04 7.04 0 0 0-1.62-.94l-.36-2.54a.48.48 0 0 0-.48-.41h-3.84a.48.48 0 0 0-.48.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96a.49.49 0 0 0-.59.22L2.74 8.87a.48.48 0 0 0 .12.61l2.03 1.58c-.05.3-.07.62-.07.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.26.41.48.41h3.84c.24 0 .44-.17.48-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32a.49.49 0 0 0-.12-.61l-2.03-1.58zM12 15.6A3.6 3.6 0 1 1 12 8.4a3.6 3.6 0 0 1 0 7.2z"/></svg>
			</span>
			Custom Metal Parts
			<span class="ctm-tab__arrow"></span>
		</button>

		<!-- Tab 2: Fabrication -->
		<button class="ctm-tab" role="tab" aria-selected="false" data-tab="1" id="ctm-tab-1" aria-controls="ctm-panel-1">
			<span class="ctm-tab__icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 9V7h-2V5a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zM18 19H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"/></svg>
			</span>
			Fabrication
			<span class="ctm-tab__arrow"></span>
		</button>

		<!-- Tab 3: Value Added -->
		<button class="ctm-tab" role="tab" aria-selected="false" data-tab="2" id="ctm-tab-2" aria-controls="ctm-panel-2">
			<span class="ctm-tab__icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
			</span>
			Value Added
			<span class="ctm-tab__arrow"></span>
		</button>

	</div>

	<!-- ===== Tab Content Panels ===== -->
	<div class="ctm-content">

		<!-- Panel 1: Custom Metal Parts -->
		<div class="ctm-panel is-active" role="tabpanel" id="ctm-panel-0" aria-labelledby="ctm-tab-0" data-panel="0">
			<div class="ctm-info">
				<div>
					<h2 class="ctm-info__title">Custom Metal Parts</h2>
					<p class="ctm-info__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis diam est, sed fermentum purus porta sed. Nullam erat ante, commodo sit amet rutrum quis, lacinia quis lorem.</p>
				</div>
				<a href="#" class="ctm-btn">Learn More</a>
			</div>
			<div class="ctm-visual">
				<div class="ctm-image">
					<img src="https://placehold.co/300x300/e8e8e8/999?text=Metal+Parts" alt="Custom Metal Parts">
				</div>
				<div class="ctm-subcats">
					<a href="#" class="ctm-subcat-parent">
						<span class="ctm-subcat-parent__text">Custom Metal Parts</span>
						<span class="ctm-subcat-parent__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14"><path d="M1 1l6 6-6 6"/></svg>
						</span>
					</a>
					<div class="ctm-divider"></div>
					<div class="ctm-subcat-children">
						<a href="#" class="ctm-subcat-child">Agricultural Machinery Parts</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Metal Forming</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Assembly Services</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Powder Coating</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Machine Shop Services</a>
						<div class="ctm-divider"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 2: Fabrication -->
		<div class="ctm-panel" role="tabpanel" id="ctm-panel-1" aria-labelledby="ctm-tab-1" data-panel="1">
			<div class="ctm-info">
				<div>
					<h2 class="ctm-info__title">Fabrication</h2>
					<p class="ctm-info__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis diam est, sed fermentum purus porta sed. Nullam erat ante, commodo sit amet rutrum quis, lacinia quis lorem.</p>
				</div>
				<a href="#" class="ctm-btn">Learn More</a>
			</div>
			<div class="ctm-visual">
				<div class="ctm-image">
					<img src="https://placehold.co/300x300/e8e8e8/999?text=Fabrication" alt="Fabrication">
				</div>
				<div class="ctm-subcats">
					<a href="#" class="ctm-subcat-parent">
						<span class="ctm-subcat-parent__text">Fabrication</span>
						<span class="ctm-subcat-parent__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14"><path d="M1 1l6 6-6 6"/></svg>
						</span>
					</a>
					<div class="ctm-divider"></div>
					<div class="ctm-subcat-children">
						<a href="#" class="ctm-subcat-child">Welding Services</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Laser Cutting</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">CNC Machining</a>
						<div class="ctm-divider"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 3: Value Added -->
		<div class="ctm-panel" role="tabpanel" id="ctm-panel-2" aria-labelledby="ctm-tab-2" data-panel="2">
			<div class="ctm-info">
				<div>
					<h2 class="ctm-info__title">Value Added</h2>
					<p class="ctm-info__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis diam est, sed fermentum purus porta sed. Nullam erat ante, commodo sit amet rutrum quis, lacinia quis lorem.</p>
				</div>
				<a href="#" class="ctm-btn">Learn More</a>
			</div>
			<div class="ctm-visual">
				<div class="ctm-image">
					<img src="https://placehold.co/300x300/e8e8e8/999?text=Value+Added" alt="Value Added">
				</div>
				<div class="ctm-subcats">
					<a href="#" class="ctm-subcat-parent">
						<span class="ctm-subcat-parent__text">Value Added</span>
						<span class="ctm-subcat-parent__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14"><path d="M1 1l6 6-6 6"/></svg>
						</span>
					</a>
					<div class="ctm-divider"></div>
					<div class="ctm-subcat-children">
						<a href="#" class="ctm-subcat-child">Quality Inspection</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Surface Treatment</a>
						<div class="ctm-divider"></div>
						<a href="#" class="ctm-subcat-child">Packaging & Logistics</a>
						<div class="ctm-divider"></div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- .ctm-content -->

</section>

