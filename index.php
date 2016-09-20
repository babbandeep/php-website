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

<div class="work-block">
    <?php require_once('include/service-areas.php'); ?>
</div>
    
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