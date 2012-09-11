<?php

	//send contact form by email
	if (isset($_GET['action']) == "send") { //message formatting
		$message = "
		<html>
		<head>
			<title>Contact Form Email</title>
		</head>
			<body>
				<ul>
					<li>Name: ".$_POST['name']."</li>
					<li>Email: ".$_POST['email']."</li>
					<li>Phone: ".$_POST['phone']."</li>
					<li>Where did you hear about us?:".$_POST['source']."</li>
					<li>Message: ".$_POST['message']."</li>
				</ul>
			</body>
		</html>";
		
	//end message formatting
	//set headers
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if (mail("info@eventswithamore.com", "Contact Form Email", $message, $headers)==1){
			$show = true;
			$modal = "<script>$('#confirmation').modal('show')</script>";
			//"Mail has been sent";
		} else {
			echo "Mail did not send";	
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Events With Amore | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Events With Amore, Inc. Event Planning, Upstate South Carolina, Greenville, Weddings, Graduations, Birthdays, Etc.">
    <meta name="author" content="ERF Marketing, Inc.">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/jquery.neosmart.fb.wall.css" rel="stylesheet">
    <link href="../css/base.css" media="all" rel="stylesheet">
    <link href="../css/mobile.css" media="screen and handheld and (max-width: 900px)" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/amore.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/amore.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/amore.png">
    <link rel="apple-touch-icon-precomposed" href="img/amore.png"> 
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>
    <script src="js/bootstrap-button.js"></script>
	<script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/jquery.neosmart.fb.wall.js"></script>
    
    <!--Place any additional meta tags here and also google analytics -->
    
  </head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389492967764617";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="container-fluid">
		<div class="row-fluid">
        	   <a href="../index.html"><img class="span3 pull-left" id="logo" src="../img/logo.png" /></a>
                    	<div class="fb hidden-phone span3" id="fb"></div>
        <script type="text/javascript">
		$(function(){
			$('#fb').fbWall({ id:'187330508038338',accessToken:'389492967764617|f17df5409317be734caabfbd0acbe298',showGuestEntries:true,showComments:true,max:1,timeConversion:12});
		});
	</script>
                <div class="span6 header-comments hidden-phone">
                    
                        <h3 class="comments-header">People Are Talking</h3>
                        <blockquote>
                        <script type="text/javascript" src="../js/rand.js"></script>
                        </blockquote>
                    
                </div>   
                    <div class="span2 pull-right fblike">
    	<div class="fb-like" data-href="http://www.eventswithamore.com" data-send="false" data-width="350" data-show-faces="false"></div>
    </div> 
		</div>

        <div class="navbar">
          <div class="navbar-inner">
   
 			 <span class="visible-desktop">
            <ul class="nav">
            <li><a href="../"> Home</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../about"> About</a></li>
              <li class="divider-vertical"></li>
              <li class="active"><a href="../contact"> Contact</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../packages"> Packages</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../social"> Social Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../corporate"> Corporate Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../weddings"> Weddings</a></li>
              <li class="divider-vertical"></li>
              <li><a href="http://www.eventswithamorestore.com">Event Accessories</a></li>
            </ul>
            </span>
            <span class="visible-tablet">
            <ul class="nav">
            <li><a href="../"> Home</a></li>
              <li class="divider-horizontal"></li>
              <li><a href="../about"> About</a></li>
              <li class="divider-horizontal"></li>
              <li class="active"><a href="../contact"> Contact</a></li>
              <li class="divider-horizontal"></li>
              <li><a href="../packages"> Packages</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../social"> Social Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../corporate"> Corporate Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../weddings"> Weddings</a></li>
              <li class="divider-vertical"></li>
              <li><a href="http://www.eventswithamorestore.com">Event Accessories</a></li>
            </ul>
            </span>
            <span class="visible-phone">
            <ul class="nav">
            <li><a href="../"> Home</a></li>
              <li class="divider-horizontal"></li>
              <li><a href="../about"> About</a></li>
              <li class="divider-horizontal"></li>
              <li class="active"><a href="../contact"> Contact</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../packages"> Packages</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../social"> Social Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../corporate"> Corporate Events</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../weddings"> Weddings</a></li>
              <li class="divider-vertical"></li>
              <li><a href="http://www.eventswithamorestore.com">Event Accessories</a></li>
            </ul>
            </span>
        </div>
      </div>
    </div>
    <div class="modal hide fade" id="confirmation">
    	<div class="modal-header">
        	<button class="close" data-dismiss="modal">x</button>
            <h3>Thank you</h3>
        </div>
        <div class="modal-body">
        	<p class="confirmation">
            	Thank you for contacting us we will reply shortly.
            </p>
        </div>
       	<div class="modal-footer">
        	<a href="#" class="btn btn-primary" data-dismiss="modal" id="confirmation_close">Close</a>
        </div>
    </div>    
	<div class="container-fluid">
 		<div class="row-fluid">
  			<div class="page-header">
    			<h1 class="about-header">Contact Us<br /><!--<small class="small-header">Email. Phone. In Person.</small>--></h1>
  			</div>
        </div>
		<div class="row-fluid">
        	<div class="span2">&nbsp;</div>
  			<div class="span3 contact-form">
                <p class="form_info">
                
                </p>
                <p class="form_info">
                
                </p>
                <div class="my_contact">
                <form id="contact_form" class="form-verical" method="post" action="index.php?action=send"> 
                    <fieldset>
                        <legend class="about-header" id="contact_form_para">Contact Us <br />
                        <small class="small-text" id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="source">Where did you hear about us?:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="source" id="source" />
                        </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea type="text" class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
                </div>
         
            <div class="span4 contact-block" id="contact-page-block">
            <h2 class="about-header">Contacting<br /> Events with Amore</h2><br />
                <!--<p>Feel free to use the form on the left, give us a call, or talk to us at any of our events! We would love to chat!</p>-->
                <ul class="contact-ul">
                	<li>Fill out the Form</li>
                    <li>Give us a call</li>
                    <li>Send us an e-mail</li>
                    <li>Message us on Facebook</li>
                    <br />
                    <li>We can't wait to help you plan a memorable event.</li>
                </ul>
                <ul class="contact-ul">
                    <li>(864) 434-9006</li><br />
                    <li><a class="btn btn-primary" href="mailto:info@eventswithamore.com">Email Us</a></li>
                </ul>
			</div>
		</div>


  <footer class="footer">
   
   <p>Phone: (864)434-9006 - Email: <a class="footer-link" href="mailto:info@eventswithamore.com">info@eventswithamore.com</a></p>
   <p>&copy; 2012 Events With Amore - <a class="footer-link" href="http://www.erfmarketing.com">ERF</a></p>
  </footer>

    </div> <!-- /container -->
  </body>
</html>