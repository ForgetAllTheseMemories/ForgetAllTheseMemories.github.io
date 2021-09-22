<section class="u-align-center-xs u-clearfix u-valign-middle-sm u-white u-section-1" id="carousel_2a9d">
	<div class="u-clearfix u-layout-wrap u-layout-wrap-1">
		<div class="u-layout">
			<div class="u-layout-row">
				<?php foreach ($event as $e) : ?>
					<div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
						<div class="u-container-layout u-container-layout-1">
							<h3 class="u-text u-text-body-color u-text-default u-text-1"><?= $e->event ?></h3>
							<h1 class="u-text u-text-black u-text-default u-text-2"><?= $e->diskon ?>%<br>
							</h1>
							<h2 class="u-text u-text-body-color u-text-default u-text-3">off all</h2>
							<p class="u-text u-text-body-color u-text-default u-text-4"><?= $e->deskripsi ?></p>
							<a href="<?= site_url('pages/view_event_product/').$e->id ?>" class="u-active-none u-border-10 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-color u-btn-1">Lihat Produk</a>
						</div>
					</div>

					<div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
						<div class="u-container-layout u-container-layout-2">
							<div class="u-carousel u-carousel-duration-500 u-expanded-width-xs u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-f035" data-interval="5000" data-u-ride="carousel">
								<div class="u-carousel-inner u-gallery-inner" role="listbox">
									<div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
										<div class="u-back-slide" data-image-width="1080" data-image-height="1080">
											<img class="u-back-image u-expanded" src="<?php echo base_url('upload/event/') ?><?= $e->image ?>">
										</div>
										<div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
											<h3 class="u-gallery-heading"></h3>
											<p class="u-gallery-text"></p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<section class="u-clearfix u-section-2" id="sec-edeb">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-custom-font u-font-oswald u-text u-text-default u-text-1">COMINGSOON</h3>
		<div class="u-list u-list-1">
			<div class="u-repeater u-repeater-1">
				<?php foreach ($comingsoon as $c) : ?>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="150" data-image-height="150" src="<?php echo base_url('upload/event/').$c->image ?>">
							<h3 class="u-text u-text-default u-text-2"><?= $c->event ?></h3>
							<p class="u-text u-text-3"><?= $c->deskripsi ?>.</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<section class="u-align-center u-clearfix u-palette-2-base u-section-3" id="carousel_4a18">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="u-text u-text-1">Cek terus media sosal kami untuk mendapat udate sale terbaru !</h2>
		<div class="u-social-icons u-spacing-20 u-social-icons-1">
			<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1">
					<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
						<use xlink:href="#svg-f107"></use>
					</svg>
					<svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f107" class="u-svg-content">
						<path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
					</svg>
				</span>
			</a>
			<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2">
					<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
						<use xlink:href="#svg-e140"></use>
					</svg>
					<svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-e140" class="u-svg-content">
						<path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
					</svg>
				</span>
			</a>
			<a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3">
					<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
						<use xlink:href="#svg-4718"></use>
					</svg>
					<svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4718" class="u-svg-content">
						<path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
						<path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
						<path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
					</svg>
				</span>
			</a>
			<a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4">
					<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
						<use xlink:href="#svg-438b"></use>
					</svg>
					<svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-438b" class="u-svg-content">
						<path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path>
					</svg>
				</span>
			</a>
			<a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-5">
					<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
						<use xlink:href="#svg-3428"></use>
					</svg>
					<svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-3428" class="u-svg-content">
						<path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path>
					</svg>
				</span>
			</a>
		</div>
		<div class="u-border-10 u-border-white u-line u-line-horizontal u-line-1"></div>
	</div>
</section>
<section class="u-clearfix u-image u-section-4" id="carousel_e89a">
	<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
		<div class="u-clearfix u-gutter-50 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
			<div class="u-gutter-0 u-layout">
				<div class="u-layout-row">
					<div class="u-align-center-md u-align-center-xs u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
						<div class="u-border-11 u-border-white u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-middle-xs u-valign-top-md u-valign-top-sm u-container-layout-1">
							<img class="u-image u-image-contain u-image-1" src="<?php echo base_url('assets') ?>/images/red-block.png" data-image-width="850" data-image-height="545">
							<h1 class="u-align-center-lg u-align-center-sm u-align-center-xl u-text u-text-body-alt-color u-text-1">Sale<br><b>50%</b>
							</h1>
						</div>
					</div>
					<div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
						<div class="u-container-layout u-valign-middle u-container-layout-2">
							<h1 class="u-text u-text-palette-2-base u-text-2">man outlet</h1>
							<p class="u-text u-text-body-alt-color u-text-3">Grab a style steal with our 50% off everything deal. With discounts &amp; offers on fashion, accessories &amp; shoes, shop PLT this season to bag the ultimate fit.</p>
							<a href="https://nicepage.com/k/infographic-html-templates" class="u-border-10 u-border-white u-btn u-btn-rectangle u-button-style u-none u-btn-1">click now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<style class="u-overlap-style">
	.u-overlap:not(.u-sticky-scroll) .u-header {
		background-color: #ffffff !important
	}
</style>
