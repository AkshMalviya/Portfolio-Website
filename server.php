<?php
$servername = "localhost";
$username = "id20246126_aksh";
$password = "Aksh@123456789";
$dbname = "id20246126_details";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email =  $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$msg =  $_REQUEST['message'];
$sql = "INSERT INTO details VALUES ('$email','$subject','$msg')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
$newmsg = "
This meassage is from ".$email."
and message is : 
".$msg."
";
$newmsg = wordwrap($newmsg,200);
mail("malviyaaksh@gmail.com",$subject,$newmsg);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="this is developed by Aksh Malviya" name="AKSH MALVIYA">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="/static/images/apple-icon-180x180.png">
  <link href="./static/images/alien.png" rel="icon">

  <title>Contact me</title>  

<link href="./static/main.3f6952e4.css" rel="stylesheet"></head>

<body class="body" style= "">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ">
          <li><a href="./index.html" title="">01 : Home</a></li>
          <li><a href="./works.html" title="">02 : Works</a></li>
          <li><a href="./about.html" title="">03 : About me</a></li>
          <li><a href="./contact.html" title="">04 : Contact</a></li>
        </ul>


      </div> 
    </div>
  </nav>
</header>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">04 : Contact me</h1>
          </div>
          <div class="alert alert-primary" role="alert">
            Message sent.
            </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="server.php" method="post" class="reveal-content">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Enter your message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default btn-lg">Send</button>
                    </div>
                    <div class="col-md-5 address-container">
                      <ul class="list-unstyled">
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-phone" aria-hidden="true" style="font-size:18px;"></i>
                          </span>
                          <b>+91 (895) 994-1069</b>
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-at" aria-hidden="true" style="font-size:18px;"></i>
                          </span>
                          <b>malviyaaksh@gmail.com</b>
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa fa-map-marker" aria-hidden="true" style="font-size:18px;"></i>
                          </span>
                          <b>235/2, Adarsh Meghdoot nagar,
                             &emsp; Indore 452010 (M.P) India </b>
                        </li>
                      </ul>
                      <h3>Follow me on social networks</h3>
                      <a href="https://www.instagram.com/a_k_s_h97/" title="Instagram" class="fa-icon" target="_blank" style="font-size:32px;color:red" >
                        <i class="fa fa-instagram"></i>
                      </a>
                      <a href="https://github.com/aksh978" title="Github" class="fa-icon" target="_blank" style="font-size:32px;">
                        <i class="fa fa-github"></i>
                      </a>
                      <a href="https://www.linkedin.com/in/aksh-malviya-a31886206" title="Linkedin" class="fa-icon" target="_blank" style="font-size:32px; color:blue;">
                        <i class="fa fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </form>
            </div>

          </div>
         
       </div>
      </div>
    </div>
  </div>


<footer class="footer-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © AKSH MALVIYA</p>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>
 <script type="text/javascript" src="./static/main.70a66962.js"></script>
    <script src="script.js"></script>
</body>
</html>
