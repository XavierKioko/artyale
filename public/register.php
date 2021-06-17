<?php
session_start();
?>
<html>
    <head>
        <title>Register</title>
        <!--Bootstrap css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <!--Bootstrap js and Jquery-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

   <script src="script.js"></script>
   <meta name="viewport" content="width=device-width" initial-scale="1.0">
<style>
    #regnav li{
    list-style-type:none;
    display:inline-block;
}
#regnav a{
    padding:200px;
    text-decoration:none;
}
    </style>
    </head>
    <body>
        <div style="padding-top:40px">
            <nav id="regnav">
                <ul>
           <li> <a href="index.html">Home</a></li>
           <li><a href="events.php">Events</a></li>
            <li><a href="eventsdetails.php">Event Details</a></li>
</ul>
</nav>
        </div>
        <br>
        <hr>
		<div class="form-container" style="margin-left:300px;margin-top:70px">
            <h1 id="registerheader">Register for Event</h1>
            <br>
            <form  action="" method="POST" enctype="multipart/form-data">
                <div class="form-group col-sm-7">
                    <label for="fname">Fullname :</label>
                    <input type="text" id="fname" style="width:500px" name="fullname" class="form-control" placeholder="type your fullname"  required >
                </div>
            
               <div class="form-group col-sm-7"> 
                   <label for="email">Email :</label>
                   <input type="email" id="email" style="width:500px" name="email" class="form-control" placeholder="type your email"  required>
               </div>
            
               <div class="form-group col-sm-7">
               <button type="submit" class="btn btn-outline-success" onclick="myFunction()">Register</button>
               </div>
              
            </form>
            </div>
    </body>
	  
</html>