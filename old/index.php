<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include 'script-api.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/all.css">
	
    <!-- Fav and touch icons -->
	<link rel="shortcut icon" href="/assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/favicon.png">
	<title>Prepare your departure</title>
</head>

<body>
    <div class="bg-main">
    	<div id="header">
    		<div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-lg-10 picture-1">
    					<img src="/assets/images/logo-new.png" alt="">
    				</div>
                    <div class="col-lg-2 picture-2">
    					<p></p>
                        <p></p>
    				</div>
    			</div>
    		</div>
    		<div class="header-bg">
    			<img src="/assets/images/header-banner.png">
    		</div>
    	</div>
    	<div class="d-flex flex-column justify-content-between main-container">
        	<div class="container">
           		<div id="root"></div>
    		</div>
    	</div>
	</div>
	<div id="root-body">
        <section class="order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 order-text">
                        <img src="/assets/images/logo-new-blue-.png" style="height: 100px; margin: 60px 0 30px 0;" alt="">
                        <h2>AUSTRALIA - PREPARE YOUR TRIP</h2>
                    </div>
                </div>
            </div>
        </section>
		<section class="steps" style="display: none">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div id="widget-holder"></div>
						<script data-affilid="devgotest01" data-transport-types="FLIGHT" src="https://widgets.kiwi.com/scripts/widget-search-iframe.js"></script>
					</div>
				</div>
			</div>
		</section>
    </div>
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<div class="picture-1">
						<img src="assets/images/logo-new.png" alt="">
					</div>
				</div>
				<div class="col-md-12">
					<ul>
						<li><button type="button" onClick="$('#modal-1').modal('show');">PRIVACY POLICY</button></li>
						<li><button type="button" onClick="$('#modal-2').modal('show');">LEGAL NOTICES</button></li>
						<li><button type="button" onClick="$('#modal-3').modal('show');">TERMS & CONDITIONS</button></li>
						<li><button type="button" onClick="$('#modal-4').modal('show');">CONTACT US</button></li>
					</ul>
				</div>
				<div class="col-md-12 copyright">
					© Copyright 2022 | All rights reserved.
				</div>
			</div>
		</div>
	</footer>
	
	<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 900px!important;">
			<div class="modal-content">
				<div class="modal-header" style="border: none; background: #f9f9f9;">
					<h5 class="modal-title" id="ModalLabel1">&nbsp;</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 9;"></button>
				</div>
				<div class="modal-body" style="background: #f9f9f9; margin-top: -40px;">
				    <div class="logo-header" style="text-align: center; margin: 0 0 30px"></div>
					<div id="page-1" data-page="page-1"></div>
				</div>
				<div class="modal-footer" style="border: none; background: #f9f9f9;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 900px!important;">
			<div class="modal-content">
				<div class="modal-header" style="border: none; background: #ffffff;">
					<h5 class="modal-title" id="ModalLabel2">&nbsp;</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 9;"></button>
				</div>
				<div class="modal-body" style="background: #ffffff; margin-top: -40px;">
				    <div class="logo-header" style="text-align: center; margin: 0 0 30px"></div>
					<div id="page-2" data-page="page-2"></div>
				</div>
				<div class="modal-footer" style="border: none; background: #ffffff;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="ModalLabe3" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 900px!important;">
			<div class="modal-content">
				<div class="modal-header" style="border: none; background: #f9f9f9;">
					<h5 class="modal-title" id="ModalLabe3">&nbsp;</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 9;"></button>
				</div>
				<div class="modal-body" style="background: #f9f9f9; margin-top: -40px;">
				    <div class="logo-header" style="text-align: center; margin: 0 0 30px"></div>
					<div id="page-3" data-page="page-3"></div>
				</div>
				<div class="modal-footer" style="border: none; background: #f9f9f9;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-4" tabindex="-1" aria-labelledby="ModalLabe4" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 900px!important;">
			<div class="modal-content">
				<div class="modal-header" style="border: none; background: #f9f9f9;">
					<h5 class="modal-title" id="ModalLabe4">&nbsp;</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 9;"></button>
				</div>
				<div class="modal-body" style="background: #f9f9f9; margin-top: -40px;">
				    <div class="logo-header" style="text-align: center; margin: 0 0 30px"></div>
					<div class="page-contact">
						<p class="fisrt-text">CONTACT</p>
						<P class="second-text">OUR TEAM IS AT YOUR DISPOSAL 7 DAYS A WEEK TO ANSWER ALL YOUR QUESTIONS AND <span class="separation-contact"></span></P>
						<div class="row page-contact">
						    <div class="col-md-12 contact-form">
						        <h2>For all information requests, please fill out the the form below</h2>
								<form method="post" id="form-contact">
            						<div class="form-group">
            							<input type="text" class="form-control" name="name" placeholder="Name" required="">
            						</div>
            						<div class="form-group">
            							<input type="email" class="form-control" name="email" placeholder="E-mail address (example@example.com)" required="">
            						</div>
            						<div class="form-group">
            							<input type="text" class="form-control" name="sujet" placeholder="Subject" required="">
            						</div>
            						<div class="form-group">
            							<textarea rows="5" name="message" class="form-control" placeholder="Your message" required=""></textarea>
            						</div>
            						<div class="form-group">
            							<button type="submit">SEND</button>
                                	</div>
            					</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer" style="border: none; background: #f9f9f9;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-5" tabindex="-1" aria-labelledby="ModalLabe5" aria-hidden="true">
		<div class="modal-dialog" style="max-width: 900px!important;">
			<div class="modal-content">
				<div class="modal-header" style="border: none; background: #f9f9f9;">
					<h5 class="modal-title" id="ModalLabe3">&nbsp;</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 9;"></button>
				</div>
				<div class="modal-body" style="background: #f9f9f9; margin-top: -40px;">
					<p class="send-mail-contact">Your message has been sent successfully,<br>our team will contact you as soon as possible</p>
				</div>
				<div class="modal-footer" style="border: none; background: #f9f9f9;">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/script.js"></script>
</body>
</html>
