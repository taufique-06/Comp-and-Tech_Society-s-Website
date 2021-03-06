<?php

  $error = "";
  $successMessage = ""; 

if ($_POST) {


  if(!$_POST["email"]) {

    $error .= "Email Address is required. <br>";
  }

  if (!$_POST["subject"]) {

        $error .= "Please Enter your name. <br>";
  }

  if (!$_POST["message"]) {

    $error .="Please tell us your message!";
  }

  if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false)
      {
           $error .= "An email address is invalid.";  
      }

  if ($error != "") {

      $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
  }

  else {

      $emailTo = "comptechsociety@gmail.com";
      $subject = $_POST["subject"];
      $body = $_POST["message"];
      $headers = "From: ".$_POST["email"];

      if (mail($emailTo, $subject, $body, $headers)) {

        $successMessage = '<div class="alert alert-success" role="alert">Your message has been sent, we will get back to you ASAP</div>';
      }else {
        $error = '<div class="alert alert-danger" role="alert">Your message could not be sent now, try again later</div>';
      }
  }

}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link rel="icon"  type = "images/png" href = "favicon.png" />

   <link rel="stylesheet" type="text/css" href="contact.css">
   <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <title>Contact us</title>
  </head>
    <body>

    <!-- NavBar -->

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="aboutUs.html">About Society</a></li>
            <li><a class="dropdown-item" href="committeMembers.html">Committe Members</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.html">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resources.html">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Designing Contact Form starts here-->

<div id="error" class="w-50 mx-auto px-5 mt-4"><? echo $error.$successMessage; ?></div>

<form method="post">

<div class="container contact">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        
        <h2>Contact Us</h2>
        <h4>We would love to hear from you !</h4>
      </div>

      <div class="social-sites">

      <a class="btn btn-success my-2" href="mailto: yoyo@yahoo.com" role="button">Email

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
        </svg>
      </a>
     
       <a class="btn btn-primary my-2" href="index.html" role="button">LinkedIn
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
      </svg>
      </a>
     
        <a class="btn btn-danger my-2" id="instragram" href="index.html" role="button">Instragram
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </svg>
      </a>
    

  </div>
    </div>
    
      
    <div class="col-md-9">
      <div class="contact-form">

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="subject">Subject:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="subject" placeholder="Enter First Name" name="subject">
          </div>
        </div>
      
        <div class="form-group">
          <label class="control-label col-sm-2" for="message">Message:</label>
          <div class="col-sm-10">
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
          </div>
        </div>
        <!-- <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10"> -->
          <button type="submit" id="submit" class="btn btn-default">Submit</button>
          <!-- </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
  </form>

<!-- Designing Contact Form ends here-->

<!-- Social Media accounts -->

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">

      $("form").submit(function (e) {
        var error = "";

        if ($("#email").val() == "") {
          error += "The email field is required. <br>"
        }
        if ($("#subject").val() == "") {
          error += "Please enter your name. <br>";
        }


        if ($("#message").val() == "") {
          error += "Please tell us your message!"

        }


        if (error != "") {

          $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');


          return false;
        }else {
          return true;
        }


      });
    </script>
  </body>
</html>

