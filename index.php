<?php
//error_reporting(0);
if (isset($_POST['getQuote'])) {
//escape();
	extract($_POST);
	require_once 'PHPMailer/PHPMailerAutoload.php';
	$enquiry = new PHPMailer();
	$enquiry->SetFrom('info@gmail.com', 'demo');
	$enquiry->AddAddress('info@gmail.com', 'demo');
	$enquiry->AddBcc($email, $fullname);
	$enquiry->addReplyTo($email, $fullname);
	$enquiry->Subject = 'demo Contact Form - ' . $fullname;
	$message = '<html>
            <head>
            <title>Contact Form - ' . $fullname . '</title>

            </head>
            <body>
             <hr />
             <strong>Name : </strong>' . $fullname . ' | <strong>Email : </strong>' . $email . '
            <hr />
            <table border="1" cellspacing="1" cellpadding="1">
            <tr>
              <td><strong>Comments: </strong></td>
              <td>' . $comments . '</td>
            </tr>
            </table>
            </body>
            </html>';
	$enquiry->MsgHTML($message);
	if ($enquiry->Send()) {
                     echo "<script>window.location.href='http://www.google.com';</script>";
		$emailSent = '<div class="alert alert-success">The message is sent successfully.</div>';

	} else {
		$emailSent = '<div class="alert alert-error">The message can\'t be delivered ! Please try later !</div>';
	}

}
?>
<?php
$title = "title";
require_once('include/html-header.php');
?>
<body>
<!--Navigation Bar Starts-->
<?php require_once('include/navigation.php'); ?>
<!--Navigation Bar Ends-->
<div class="clearfix"></div>
<section class="green-background-slider">
	<!-- carousel slider starts -->    <!-- Banner -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="banner-slider" style="background-image: url('images/slider-1.png')"></div>
									<div class="slider-caption">
										<h3>FROM AS LITTLE AS $80</h3>
										<h4>cheaper than you think</h4>
										<p>
											If you're in need of Rubbish Removal in Sydney, Anytime Rubbish can help! Call us for General Rubbish Removal, Junk Removal, Garden Waste Removal, Builders Waste Removal and many more removal services!</p>
									</div>
								</div>
								<div class="item">
									<div class="banner-slider" style="background-image: url('images/slider-2.png')"></div>
									<div class="slider-caption">
										<h3>NO JOB IS TOO BIG OR TOO SMALL</h3>
										<h4>we’re just happy to help you</h4>
										<p>
											We will come to your residential or commercial property, no matter where in Sydney you're located, and will take care of the loading, disposal and clean-up of the garbage at your site.</p>
									</div>
								</div>
								<div class="item">
									<div class="banner-slider" style="background-image: url('images/slider-3.png')"></div>
									<div class="slider-caption">
										<h3>BEST RUBBISH REMOVALS</h3>
										<h4>and collectors in Sydney</h4>
										<p>
											Punctuality and best job done in time is our plus points amongst all.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon icon-prev" aria-hidden="true"><i class="fa fa-caret-left"></i></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon icon-next" aria-hidden="true"><i class="fa fa-caret-right"></i></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="callus-box">
					<div class="callus-title">
						<div class="newh1">Call Us at 0424-594-403</div>
					</div>
					<div class="callus-form">
						<div class="call-back">Or fill up the form and we'll call you back</div>
						<form method="post" id="getQuote">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Full Name">
									</div>
								</div>
								<div class="col-md-6 paddingforformleft">
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-6 paddingforformright">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone No.">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" rows="3" placeholder="Comments"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="green-button pull-right">Get a quote</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<div class="responding-time">
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="images/timer-icon.png" alt="...">
								</a>
							</div>
							<div class="media-body">
								<p>We will respond in 60 minutes or less from 8am to 6pm on weekdays, from 8am to 3pm on Saturdays (AEST/AEDT).</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<section>
	<!-- carousel slider ends -->
	<div class="welcome-block">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<!---<div class="wel-text">Welcome to cheap Sydney Rubbish Removal</div>--->
					<h1>Welcome to cheap Sydney Rubbish Removal Domestic / Commercial Rubbish Removals</h1>
					<p style="text-align:left !important; margin-bottom: 10px !important;">We aim at keeping your premises organized and clutter-free through our professional rubbish removal services. When you call us for household or commercial rubbish removal in Sydney, rest assured that your concerns will be addressed at the earliest.</p>

<p style="text-align:left !important; margin-bottom: 10px !important;">We provide rubbish removal services across the Sydney area and its adjoining suburbs. We have access to various areas nearby and in close vicinity of Sydney: Mosman, Bankstown, Rockdale, Parramatta, Sutherland Shire, Paddington, Bondi, Surry Hills, Western Suburbs, Sydney North Shore and Inner West. It's not possible to mention every area on our website that we cater to; therefore, you can always get in touch with us over phone or leave us a message to enquire about your location.</p>
					
				<!--	<iframe width="100%" height="420" src="https://www.youtube.com/embed/BeNvOzm6YTM" frameborder="0" allowfullscreen></iframe>-->
                    <iframe class="embed-responsive-item"id="ytplayer" type="text/html" width="100%" height="420" src="https://www.youtube.com/embed/BeNvOzm6YTM?&autoplay=1&loop=1&rel=0&showinfo=0&iv_load_policy=3&playlist=BeNvOzm6YTM"
      frameborder="0" allowfullscreen></iframe>
      
					<!--<a href="#" class="youtube-button" data-toggle="modal" data-target="#myModal">
						<div class="youtube-icon"><img src="images/youtube-button-icon.png"></div>
						Watch Us in Action
					</a>-->
				</div>
			</div>
		</div>
	</div>
	
	
	
	

	<div class="whyus-block">
		<div class="container">
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<div class="col-md-12">
						<div class="why">why choose us?</div>
					</div>
					<div class="col-md-4">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="eco-friendly">
								<div class="envi">
									<div class="styled-select">
										Environmental <i><img src="images/select-arrowdown.png" alt="" /></i>
									</div>
								</div>
								<p>All rubbish is carefully disposed of at approved waste recycling centres. </p>
							</div>
							<div role="tabpanel" class="tab-pane" id="affordable">
								
								<p>We provide Rubbish Removal services at affordable prices throughout Sydney. We believe in providing a quality service at an affordable price. We are Cheapest Rubbish Removal in Sydney.</p>
							</div>
							<div role="tabpanel" class="tab-pane" id="fastservice">
								
								<p>Sane day Rubbish Removal Service provides Sydney with a fast and efficient way of removing rubbish.</p>
							</div>
							<div role="tabpanel" class="tab-pane" id="24x7service">
								
								<p>We have been in the business for over 10 years, making us the credible choice for Rubbish Collection and Removals in Sydney across all suburbs. We are available 24/7 for any kind of service &amp; support you may need. </p>
							</div>
						</div>

					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="servicesicon-block">
								<div class="col-md-3 col-xs-6">
									<div class="service-icon">
										<a href="#eco-friendly" data-toggle="tab" aria-expanded="false" class="active">
											<div class="eco-friendly center-block"></div>
											<p>Environment-Friendly</p>
										</a>
									</div>
								</div>
								<div class="col-md-3 col-xs-6">
									<div class="service-icon">
										<a href="#affordable" data-toggle="tab" aria-expanded="false">
											<div class="affordable center-block"></div>
											<p>Affordable</p>
										</a>
									</div>
								</div>
								<div class="col-md-3 col-xs-6">
									<div class="service-icon">
										<a href="#fastservice" data-toggle="tab" aria-expanded="false">
											<div class="fast-service center-block"></div>
											<p>Same Day Service</p>
										</a>
									</div>
								</div>
								<div class="col-md-3 col-xs-6">
									<div class="service-icon">
										<a href="#24x7service" data-toggle="tab" aria-expanded="false">
											<div class="twenteyfourseven center-block"></div>
											<p>Convenient &amp; Trusted</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="girl-image">
									<img src="images/girl-background.png" class="img-responsive">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="work-block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<img src="images/green-dustbin.png" alt="" class="img-responsive center-block" />
						</div>
						<div class="col-md-8">
							<div class="work">our work includes...</div>
							<div class="row">
								<div class="wrapper-red">
									<div class="container">
										<div class="scroller-block">
											<div class="scroller text" id="mini">
												<div class="col-md-8 col-md-offset-4">
													<div class="works-desc right">
														<h2>Household Rubbish Removal</h2>
														<p align="justify">
															Household waste including fridges and other white goods, ovens, microwaves, lounges, washing machines, beds, garage clean-outs, old furniture and appliances, excess rubbish when moving, deceased estates rubbish removal, carpet and kitchen strip outs, and any other waste.
														</p>
													</div>
												</div>
												<div class="col-md-8">
													<div class="works-desc left">
														<h2>Construction Rubbish Removal</h2>
													<p align="justify">
															Renovation and Builders Waste and rubbish including tiles, concrete, porcelain, old kitchen and bathroom waste, roof tiles, guttering, wood, metal and plaster board, carpet, blinds and internal fittings, window frames and glass, bricks, old timber waste, and any other building materials no longer required.
														</p>
													</div>
												</div>
												<div class="col-md-8 col-md-offset-4">
													<div class="works-desc right">
														<h2>Green/Garden Rubbish Removal</h2>
													<p align="justify">
															Green/Garden Waste such as clippings, paving, bricks, rocks, trees, shrubs, weeds, decking materials, gazebos, sheds, wood, metal, soil,sand, gravel, tree removal etc.
														</p>
													</div>
												</div>
												<div class="col-md-8">
													<div class="works-desc left">
														<h2>Business, Commercial and Industrial Rubbish Removal</h2>
													<p align="justify">
															Business, Commericial and Industrial Rubbish Removed including office strip outs, warehouse and factory clean-outs, small demolition work, rental property clean ups, concrete, gravel, sand, bricks, wood, mesh, plastic, pipes, wiring and cables, metal, steel copper, aluminium, small machinery, paper, cardboard, packing materials, computers, printers and faxes, phones, photocopyers, desks, chairs and other office furniture, partitions, notice boards, shelving, filing cabinets and any other unwatnted waste.
														</p>
													</div>
												</div>
												<div class="col-md-8 col-md-offset-4">
													<div class="works-desc right">
														<h2>Demolition &amp; Construction Rubbish Removal</h2>
														<p>
															We can assist with demolition and removal of timber decks, vergolas, bathrooms and bathroom stripouts, kitchens and other small demolition jobs.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once('include/service-areas.php'); ?>
	</div>
</section>
<!--FOOTER starts-->
<?php require_once('include/footer.php'); ?>
<script src="js/miniscroll.js"></script>
<script>
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$(e.target).addClass('active'); // activated tab
		$('.servicesicon-block').find('.active').not($(e.target)).removeClass('active');
		$('.bookingsicon-block').find('.active').not($(e.target)).removeClass('active');
	});
	var mini = new Miniscroll("#mini", {
		axis: "y",
		size: 10,
		sizethumb: "auto"
	});
</script>
<!-- Validation -->
<?php
 if(isset($_POST['email']))
{?>

<script type="text/javascript">
  window.location.href="http://www.anytimerubbish.com.au/thankyou.php";
</script>
<?php 
 }
?>

</body>
</html>