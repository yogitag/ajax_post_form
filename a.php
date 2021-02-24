<!doctype html>
<html>
<head>

<?php

 if(isset($_POST["name"])){
	// POST Data
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$message= $_POST['message'] ;
 echo $name;
 echo $email;
 echo $message;
	echo "successfully done";
	exit();
 }
 
?>
    <title>Look I'm AJAXing!</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- load bootstrap via CDN -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="ajax.js"></script>
   </head>
<body>
<div class="col-sm-6 col-sm-offset-3">

    <h1>Processing an AJAX Form</h1>

    <!-- OUR FORM -->
    <form id="contact_submit" action="#">

        <!-- NAME -->
        <div id="name-group" class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Henry Pym">
            <!-- errors will go here -->
        </div>

        <!-- EMAIL -->
        <div id="email-group" class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="rudd@avengers.com">
            <!-- errors will go here -->
        </div>

        <!-- SUPERHERO ALIAS -->
        <div id="message-group" class="form-group">
            <label for="message">message Alias</label>
            <input type="text" class="form-control" name="message" placeholder="Ant Man">
            <!-- errors will go here -->
        </div>
		<button type="submit" class="btn btn-success" name="submit" >Submit <span class="fa fa-arrow-right"></span></button>

    </form>
	<div id='response'></div>
</div>

</body>
</html>


