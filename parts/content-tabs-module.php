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

<style>
/* ===== Content Tabs Module ===== */
.ctm-section {
	background: #fff;
	width: 100%;
	padding-bottom: 100px;
}

/* --- Tab Bar --- */
.ctm-tabs {
	display: flex;
	gap: 2px;
	width: 100%;
}

.ctm-tab {
	flex: 1 0 0;
	min-width: 0;
	height: 88px;
	background: #731219;
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 4px;
	padding: 28px 16px;
	border: none;
	cursor: pointer;
	position: relative;
	overflow: visible;
	color: #fff;
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 24px;
	line-height: 32px;
	white-space: nowrap;
	transition: background 0.25s ease;
	isolation: isolate;
}

.ctm-tab:hover {
	background: #8a1720;
}

.ctm-tab.is-active {
	overflow: visible;
}

/* Mũi tên tam giác dưới tab active */
.ctm-tab__arrow {
	display: none;
	position: absolute;
	bottom: -15px;
	left: 50%;
	transform: translateX(-50%) rotate(45deg);
	width: 30px;
	height: 30px;
	background: #731219;
	z-index: 2;
}

.ctm-tab.is-active .ctm-tab__arrow {
	display: block;
}

/* Icon trong tab */
.ctm-tab__icon {
	flex-shrink: 0;
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
}

.ctm-tab__icon svg {
	width: 28px;
	height: 28px;
	fill: #fff;
}

/* --- Tab Content --- */
.ctm-content {
	max-width: 1180px;
	margin: 100px auto 0;
	position: relative;
}

.ctm-panel {
	display: none;
	align-items: center;
	justify-content: space-between;
	gap: 40px;
	animation: ctmFadeIn 0.35s ease;
}

.ctm-panel.is-active {
	display: flex;
}

@keyframes ctmFadeIn {
	from { opacity: 0; transform: translateY(12px); }
	to { opacity: 1; transform: translateY(0); }
}

/* -- Cột trái: Thông tin -- */
.ctm-info {
	width: 498px;
	flex-shrink: 0;
	display: flex;
	flex-direction: column;
	gap: 24px;
}

.ctm-info__title {
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 36px;
	line-height: 48px;
	color: #000;
	text-transform: capitalize;
	margin: 0;
}

.ctm-info__desc {
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	font-size: 16px;
	line-height: 24px;
	color: #000;
	margin: 0;
}

.ctm-btn {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	gap: 4px;
	padding: 8px 12px;
	background: #a91c23;
	color: #fff;
	border-radius: 3px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 16px;
	line-height: 24px;
	text-decoration: none;
	border: none;
	cursor: pointer;
	transition: background 0.2s ease, transform 0.15s ease;
	align-self: flex-start;
}

.ctm-btn:hover {
	background: #8a161c;
	color: #fff;
	transform: translateY(-1px);
	text-decoration: none;
}

/* -- Cột phải: Visual (subcategory + image) -- */
.ctm-visual {
	width: 600px;
	height: 300px;
	flex-shrink: 0;
	position: relative;
}

/* Hình ảnh */
.ctm-image {
	position: absolute;
	top: 0;
	right: 0;
	width: 300px;
	height: 300px;
	border-radius: 3px;
	overflow: hidden;
}

.ctm-image img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	border-radius: 3px;
}

/* Danh sách Subcategory */
.ctm-subcats {
	position: absolute;
	left: 0;
	top: 35px;
	width: 300px;
	display: flex;
	flex-direction: column;
	gap: 8px;
}

/* Subcategory cha (active) */
.ctm-subcat-parent {
	display: flex;
	align-items: center;
	gap: 0;
	text-decoration: none;
}

.ctm-subcat-parent__text {
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 16px;
	line-height: 24px;
	color: #a91c23;
}

.ctm-subcat-parent__arrow {
	width: 24px;
	height: 24px;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-shrink: 0;
}

.ctm-subcat-parent__arrow svg {
	width: 9px;
	height: 16px;
	fill: #a91c23;
}

/* Đường kẻ phân cách */
.ctm-divider {
	width: 100%;
	height: 1px;
	background: #ccc;
}

/* Subcategory con */
.ctm-subcat-children {
	display: flex;
	flex-direction: column;
	gap: 8px;
	padding-left: 32px;
}

.ctm-subcat-child {
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 16px;
	line-height: 24px;
	color: #000;
	text-decoration: none;
	transition: color 0.2s ease;
}

.ctm-subcat-child:hover {
	color: #a91c23;
	text-decoration: none;
}

/* ===== Responsive ===== */
@media (max-width: 1200px) {
	.ctm-content {
		max-width: 100%;
		padding: 0 20px;
		margin-top: 60px;
	}
}

@media (max-width: 991px) {
	.ctm-panel {
		flex-direction: column;
		align-items: flex-start;
	}

	.ctm-info,
	.ctm-visual {
		width: 100%;
	}

	.ctm-visual {
		height: auto;
		min-height: 320px;
	}

	.ctm-tab {
		font-size: 18px;
		padding: 20px 10px;
		height: 72px;
	}

	.ctm-tab__icon {
		width: 36px;
		height: 36px;
	}

	.ctm-tab__icon svg {
		width: 22px;
		height: 22px;
	}
}

@media (max-width: 767px) {
	.ctm-tabs {
		flex-direction: column;
		gap: 1px;
	}

	.ctm-tab {
		height: 60px;
		font-size: 16px;
	}

	.ctm-tab__arrow {
		display: none !important;
	}

	.ctm-section {
		padding-bottom: 40px;
	}

	.ctm-content {
		margin-top: 30px;
	}

	.ctm-visual {
		position: static;
		display: flex;
		flex-direction: column-reverse;
		gap: 20px;
	}

	.ctm-image,
	.ctm-subcats {
		position: static;
		width: 100%;
	}

	.ctm-image {
		height: 220px;
	}
}
</style>

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

<script>
(function () {
	'use strict';

	var tabs = document.querySelectorAll('.ctm-tab');
	var panels = document.querySelectorAll('.ctm-panel');

	if (!tabs.length) return;

	tabs.forEach(function (tab) {
		tab.addEventListener('click', function () {
			var index = this.getAttribute('data-tab');

			/* Bỏ active tất cả tabs */
			tabs.forEach(function (t) {
				t.classList.remove('is-active');
				t.setAttribute('aria-selected', 'false');
			});

			/* Bỏ active tất cả panels */
			panels.forEach(function (p) {
				p.classList.remove('is-active');
			});

			/* Set active cho tab + panel được chọn */
			this.classList.add('is-active');
			this.setAttribute('aria-selected', 'true');

			var target = document.querySelector('.ctm-panel[data-panel="' + index + '"]');
			if (target) {
				target.classList.add('is-active');
			}
		});
	});
})();
</script>
