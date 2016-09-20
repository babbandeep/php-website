<div class="green-background-top">
	<div class="container">
		<div class="desk-right">
			<div class="headphone-icon"><img src="images/headphone-icon.png"></div>
			<div class="phone-number">9876954321</div>
			<div class="book-button"><a href="booking.php" class="white-button"> Book Now</a></div>
		</div>
	</div>
</div>
<header class="navbar navbar-default" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header_inner">
					<div class="navbar-brand">
						<a href="#">
							<img alt="#" class="img-responsive center-block" src="images/logo.png"/>
						</a>
					</div>
					<div class="navbar-header">
						<div class="row navigation-bg tap-menu">
								<a data-target="#top_menu" data-toggle="collapse" class="pull-left navbar-toggle ">TAP FOR MENU</a>
								<button data-target="#top_menu" data-toggle="collapse" type="button" class="navbar-toggle">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						</div>
					</div>
					<!--navbar-header-->
					<nav id="top_menu" role="navigation" class="row collapse navbar-collapse clearfix">
						<ul class="nav navbar-nav">
							<?php
							$full_name = $_SERVER['PHP_SELF'];
							$name_array = explode('/',$full_name);
							$count = count($name_array);
							$page_name = $name_array[$count-1];
							?>
                            
                            <li>
								<a href="index.php" class="<?php echo ($page_name=='index.php')?'active':'';?>">Home</a>
							</li>
                            <li>
								<a href="about.php" class="<?php echo ($page_name=='about.php')?'active':'';?>">About</a>
							</li>
							
							<li>
								<a href="contact.php" class="<?php echo ($page_name=='contact.php')?'active':'';?>">Contact</a>
							</li>
                        </ul>
					</nav>
					<!--top_menu-->
				</div>
				<!--col-12-->

			</div>
		</div>

		<!--row-->
	</div>
	<!--container-->
</header>