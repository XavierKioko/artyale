<?php
session_start();
?>
<html>
	<head>
		<title>Public Events and Exhibitions</title>
	
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="st.css">
		<script src="script.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">	
	</head>
	<body>
		<nav>
          <!--  <img href="index.html" src="images/yaleLogo.png" class="img" alt="logo"> -->
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="events.php">EVENTS</a></li>              
                <li><a href="news.html">NEWS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
        
		<!-- Slideshow container -->
		<div class="Slideshow-container">
	<!-- Full-width images with number and caption text -->
	<div class="mySlides fade">
	  <img src="images/paintnight.jpg" style="width:100%" height="600px">
	  <div class="text">
		  <p class="dates">30th June 2021</p>
		  <br>
		  Paint Night!
		</div>
</div>

	  <div class="mySlides fade">
	
	  <img src="images/colorfest.jpg" style="width:100%" height="600px">
	  <div class="text" style="color:white">
		<p class="dates">9th July 2021</p>
		<br>
		Color Festival!
	</div>
  </div>
	<div class="mySlides fade">
	  <img src="images/craft.jpg" style="width:100%" height="600px">
	  <div class="text">
		<p class="dates">7th November 2021</p>  
		<br>
		Craft Day!</div>
	</div>
	<div class="mySlides fade">
		<img src="images/kitefly.jpg" style="width:100%" height="600px">
		<div class="text" style="color:white">
			<p class="dates">20th August 2021</p>
			<br>
			Kite Flying Festival!</div>
	  </div>
	
  
	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
  </div>
  <div class="Secondary">
	  
	  <br>
	  <div class="moreevents">

		 <form action="eventsdetails.php">
			<button type="submit" class="btn btn-outline-primary">More Event Details</button>
		  </form>
		  
	  </div> 
	<hr>
	  <div class="exhibitions" >
		 <div class="evntspage_headers"  > 
			  <h1>Top 5 Exhibitions 2020</h1>
			</div>
			<hr>
	    <br>
		 <div class="exhibitionsimages">
			 <div class="exhibitionsimg">
				<a href="exhibition1.html"> <img src="images/img1.jpg" ></a>
				 <div id="image1des">Award winning</div>
			 </div>
			 <div class="exhibitionsimg"  >
			<a href="img2.html"><img src="images/img2.jpg" ></a>
				<div id="image2des">Exhibition 2</div>
			</div>
			<div class="exhibitionsimg">
			<a href="img3.html"><img src="images/img3.jpg" ></a>
				<div id="image3des">Exhibition 3</div>
			</div>
			<div class="exhibitionsimg">
				<a href="img4.html"><img src="images/img4.jpg"  ></a>
				<div id="image4des">Exhibition 4</div>
			</div>
			<div class="exhibitionsimg">
				<a href="img5.html"><img src="images/img5.jpg"  ></a>
				<div id="image4des">Exhibition 5</div>
			
			</div>
			
		 </div>
		 <hr>
	  </div>
	  
	  <br>
	  <div class="moreexhibitions">
		<button type="submit" class="btn btn-outline-primary">More Exhibitions</button>
	</div>
<hr>
	<br>
	
  </div>
  
  <div class="lowercontent">
	  <div  class="lowcont" style="text-align:center">
		 <div class="evntspage_headers" >
			  <h1 >Sponsors of Our Events</h1></div>
		<br><br>
		 <div id="divToShowHide" class="BeforeScroll" style="display:flex;margin-left:300px">
		 <div class="images" style="padding-left:70px">
            <img src="images/IBM.png"alt="ibm" style="height:160px;width:200px;border-radius:100%">
        </div>
        <div class="images" style="padding-left:70px">
            <img src="images/canon.png"alt="ibm" style="height:160px;width:200px;border-radius:100%">
        </div>
        <div class="images" style="padding-left:70px">
            <img src="images/crown.PNG"alt="ibm" style="height:160px;width:200px;border-radius:100%">
        </div>
        <div class="images" style="padding-left:70px">
            <img src="images/rockstar.jpg"alt="ibm" style="width:200px;border-radius:100%">
        </div>
        <div class="images" style="padding-left:70px">
            <img src="images/bbc.jpg"alt="ibm" style="height:160px;width:200px;border-radius:100%">
        </div>
</div>
</div>
</div>

<!-- javascript slideshow code-->
  <script>
	var slideIndex = 0;
	showSlides();
	
	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 1570); // Change image every 1.5 seconds
	}
	</script>

	</body>
</html>
