
<!-- Google Tag Manager -->
<noscript>
	<iframe src="//www.googletagmanager.com/ns.html?id=#"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(), event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
		    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'//www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-M9PRZT');</script>
<!-- End Google Tag Manager -->

<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=#" width="100%" height="355" frameborder="0" style="border:0"></iframe>
</div>
<footer>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright">
						<div class="desk-left">

							&copy; <?php echo date('Y'); ?> php demo. All rights reserved.

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<!--footer_bottom-->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});

		$('.scrollup').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
</script>

<!-- Match Height -->
<script type="text/javascript" src="js/jquery.matchHeight.js"></script>
<script type="text/javascript">
	(function () {
		/* matchHeight example */
		$(function () {
			// apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)
			// get test settings
			var byRow = $('body').hasClass('test-rows');
			// apply matchHeight to each item container's items
			$('.items-container').each(function () {
				$(this).children('.item').matchHeight({
					byRow: byRow
				});
			});
		});
	})();
</script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
<script>
	$('#myCarousel').carousel({
		interval: 4000
	});
</script>
<script>
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$(e.target).addClass('active'); // activated tab
		$('.servicesicon-block').find('.active').not($(e.target)).removeClass('active');
		$('.bookingsicon-block').find('.active').not($(e.target)).removeClass('active');
	});
</script>