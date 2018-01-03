<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<title>vickey - UI UX Design & Developer</title>
	<link href="image/vickey logo.png" rel="icon" type="image/png">
	<meta name="author" content="citt">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" >
	<meta name="keybord" content="citt,it traning">
	  <link href="js/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
</head>
<body>

	<header>
		<div class="bars">
		<div class="logo">
		<a href="index.html"><img src="image/vickey logo.png"></a>
		</div>
		<div class="bar">
		<i class="fa fa-bars nav"></i>
		</div>
		<div class="clear"></div>
		</div>

		<nav>
		    <a class="close">X</a>
			<a href="index.html">Home</a>
			<a href="page1.html">portfolia</a>
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
		</nav>

	</header>
	<div class="wrap-contact">
	<div class="contact">
		<h3>Contact Us</h3>
	</div>
	<form id="contact">	<div class="form">
		<div class="left">
			<div class="form1">
			<h3>Name</h3>
			<input type="text" name="name" id="form_name" placeholder="Enter the name">
				
			</div>
			<div class="form1">
			<h3>Website</h3>
			<input type="text" name="name" placeholder="Enter the website">
				
			</div>
			<div class="form1">
			<h3>Timeline</h3>
			<input type="text" name="name" placeholder="Enter the Timeline">
				
			</div>
		</div>
		<div class="border"></div>
		<div class="left right">
			<div class="form1">
			<h3>Email</h3>
			<input type="text" name="name" id="form_email" placeholder="Email ID">
				
			</div>
			<div class="form1">
			<h3>Budget</h3>
			<input type="number" name="name" placeholder="Enter the amount">
				
			</div>
			<div class="form1">
			<h3>*1+2=</h3>
			<input type="number" name="name">
				
			</div>
		</div>
			<div class="clear"></div>
			<div class="form2">
			<h3>Tell me a little about your project:</h3>
			<input type="text" name="project" id="msg_text">
				
			</div>

			<div class="submit">
             <button  id="submit" class="button" name="submit" type="submit" value="Send">Submit Your Info</button>
			</div>
</form>


<div class="clear"></div>
	</div>
	<div class="anime">
	<img src="image/school21.gif" class="gilf">
	<img src="image/footer.png" class="foot">
	</div>
	</div>
	<footer>

		<div class="me">
			<p><img src="image/vickey logo.png">Show and tell for designers</p>
			<p></p>
			<p>What are you working on?is a community of designers sharing screenshots of their work, process, and projects.</p>
		</div>
		<div class="me">
			<ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="">Portfolia</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="">Terms</a></li>
          <li><a href="">Guidelines</a></li>
          <li><a href="">Privacy</a></li>
          <li><a href="">Shop</a></li>
          <li><a href="">Testimonials</a></li>
          <li><a href="">Brand</a></li>
          <li><a href="">Advertise</a></li>
          <li><a href="">API</a></li>
          <li><a href="">Integrations</a></li>
        </ul>
		</div>
		<div class="me">
			<p><img src="image/op.png"></p>
			<p>
          Vignesh’s official podcast goes behind the shots of your favorite designers.
</p>
			
		</div>
		<div class="clear"></div>
		<div class="copy">
		
		<p><a href=""><i class="fa fa-instagram"></i></a><a href="https://www.facebook.com/vickey.makes"><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-pinterest"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href="http://gmail.com/vigneshvickey0@gmail.com"><i class="fa fa-envelope-o"></i></a></p>
		<p>Copyright © 2009–2017 Vignesh Holdings Ltd. All screenshots © their respective owners.</p>
		</div>

	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
	 	 $(".nav").click(function(){
			$("nav").show();
			 $(".bar").hide();
		});
	 	 $(".close").click(function(){
			$("nav").hide();
			$(".bar").show();
		});
	 	  $(".logo").click(function(){
  var body = $("html, body");
body.stop().animate({scrollTop:0}, '10', 'linear', function() { 
   
});
  });

});
	 
	</script>
	<script type="text/javascript">
		$(function() {
    $("#contact .button").click(function() {
        var name = $("#form_name").val();
        var email = $("#form_email").val();
        var text = $("#msg_text").val();
        var dataString = 'name='+ name + '&email=' + email + '&text=' + text;

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: dataString,
            success: function(){
            $('.success').fadeIn(1000);
            }
        });

        return false;
    });
});
	</script>

</body>
</html>