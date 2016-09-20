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
										<h3>gfhfghjghj</h3>
										<h4>fdhgfhfghj</h4>
										<p>ghjgjjgflkfgjlgtruofdpgortoitjhjtgrfb</p>
									</div>
								</div>
								<div class="item">
									<div class="banner-slider" style="background-image: url('images/slider-2.png')"></div>
									<div class="slider-caption">
										<h3>gfhfghjghj</h3>
										<h4>fdhgfhfghj</h4>
										<p>ghjgjjgflkfgjlgtruofdpgortoitjhjtgrfb</p>
									</div>
								</div>
								<div class="item">
									<div class="banner-slider" style="background-image: url('images/slider-3.png')"></div>
									<div class="slider-caption">
										<h3>gfhfghjghj</h3>
										<h4>fdhgfhfghj</h4>
										<p>ghjgjjgflkfgjlgtruofdpgortoitjhjtgrfb</p>
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
		</div>

	</div>
</section>
    
<section>

	<div class="work-block">
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
  window.location.href="/thankyou.php";
</script>
<?php 
 }
?>

</body>
</html>