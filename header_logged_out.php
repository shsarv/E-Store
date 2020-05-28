<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
    #ts{
        color: white;
        font-weight: bolder;
    }
    #siz{
        font-size: x-large;
    }
    .button{
        font-size: larger;
    }
    
</style>
</head>
<body>
<div class="container-fluid" id="content">
            <div class="navbar navbar-default navbar-fixed-top" style="background-color: blue;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand glyphicon glyphicon-home" style="font-size: 180%;" href="index.php"  id="ts">&nbsp; E-Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right" >
                            <li><a id="ts" href = "signup.php"><span class = "glyphicon glyphicon-user" id="ts"></span> Sign Up </a></li>
                            <li><a id="ts" data-toggle="modal" data-target="#pz" ><span class = "glyphicon glyphicon-log-in" id="ts"></span> Login </a></li>
                            <li><a id="ts" href = "about_us.php"><span class = "glyphicon glyphicon-list" id="ts"></span> About Us </a></li>
                            <li><a id="ts" href = "contact_us.php"><span class = "glyphicon glyphicon-phone" id="ts"></span> Contact Us </a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>


<?php require 'login_modal.php'; ?>


</body>
</html>