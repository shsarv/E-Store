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
                        <a class="navbar-brand glyphicon glyphicon-home" id="ts" style="font-size: 180%;" href="index.php">&nbsp;E-Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="ts" href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart" id="ts"></span> Cart </a></li>
                            <li><a id="ts" href = "settings.php"><span class = "glyphicon glyphicon-cog" id="ts"></span> Settings </a></li>
                            <li><a id="ts" href = "logout.php"><span class = "glyphicon glyphicon-log-out" id="ts"></span> Logout </a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>