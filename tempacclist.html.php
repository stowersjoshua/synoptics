﻿
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Account Name - Accounts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template --><!-- Remember, we've got a limit of 30 CSS sheets =P -->
    <link href="css/theme.css" rel="stylesheet">


  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Account Name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accounts</a></li>
            <li><a href="#about">Settings</a></li>
            <li><a href="#contact">How-to</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <!--Start progress bar to show remaining HDD space-->



<!--This calculates the amount of space in Bytes on:
    The disk
    Free
    percent used
    percent free
    -->
<?php
$ds = disk_total_space("/");
$df = disk_free_space("/");
$per =  ($df / $ds) * 100;
$perrem = 100 - $per;

$dsGig = ($ds/1073741824);
$dfGig = ($df/1073741824);


$dsGigSimp = (float)number_format($dsGig, 2, '.', '');
$dfGigSimp = (float)number_format($dfGig, 2, '.', '');
?>



    <div class="row">
      <div class="col-md-6 col-md-offset-3"><h4>Space remaining: <?php
      echo $dfGigSimp . ' Gb' ?> of <?php echo $dsGigSimp . ' Gb' ?></h4></div>
      </div>
      <div class="row">

      <div class="col-md-6 col-md-offset-3" style="">
        <div class="progress progress-striped">
          <div class="progress-bar progress-bar-success tip"
        data-toggle="tooltip" data-placement="bottom" title="Used
        - <?php echo intval($perrem) ?>%" role="progressbar"
        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
        style="width: <?php echo $perrem ?>%">
            <span class="sr-only">Complete (success)</span>
          </div>
        </div>
    </div>
    </div>

    <hr />

    <!--End progress bar-->
    <div style="background-color:darkolivegreen; border-radius:10px; padding:30px;" class="container"">
    <div class="row">

        <div style="min-width:300px;" class="col-xs-6 col-sm-4 hoverimage">
            <a href="#"><img src="img/tempsynopticsicon.jpg" style="margin-bottom:30px; border-radius:10px; width:100%; padding:0px; position:relative;" /></a>
            <h4 style="clear:both; position:absolute; top:5px; left:5px; width:100%; padding-left:18px;">Account Type</h4>
            <h4 style="clear:both; position:absolute; top:30px; left:5px; width:100%; padding-left:18px;">Account Name</h4>
            <span style="clear:both; position:absolute; top:15px; right:10%;" class="glyphicon glyphicon-cog"></span>
        </div>  
        <div style="min-width:300px;" class="col-xs-6 col-sm-4 hoverimage">
            <a href="#"><img src="img/tempsynopticsicon.jpg" style="margin-bottom:30px; border-radius:10px; width:100%; padding:0px; position:relative;" /></a>
            <h4 style="clear:both; position:absolute; top:5px; left:5px; width:100%; padding-left:18px;">Account Type</h4>
            <h4 style="clear:both; position:absolute; top:30px; left:5px; width:100%; padding-left:18px;">Account Name</h4>
            <span style="clear:both; position:absolute; top:15px; right:10%;" class="glyphicon glyphicon-cog"></span>
        </div>  
        <div style="min-width:300px;" class="col-xs-6 col-sm-4 hoverimage">
            <a href="#"><img src="img/tempsynopticsicon.jpg" style="margin-bottom:30px; border-radius:10px; width:100%; padding:0px; position:relative;" /></a>
            <h4 style="clear:both; position:absolute; top:5px; left:5px; width:100%; padding-left:18px;">Account Type</h4>
            <h4 style="clear:both; position:absolute; top:30px; left:5px; width:100%; padding-left:18px;">Account Name</h4>
            <span style="clear:both; position:absolute; top:15px; right:10%;" class="glyphicon glyphicon-cog"></span>
        </div>  
        <div style="min-width:300px;" class="col-xs-6 col-sm-4 hoverimage">
            <a href="#"><img src="img/tempsynopticsicon.jpg" style="margin-bottom:30px; border-radius:10px; width:100%; padding:0px; position:relative;" /></a>
            <h4 style="clear:both; position:absolute; top:5px; left:5px; width:100%; padding-left:18px;">Account Type</h4>
            <h4 style="clear:both; position:absolute; top:30px; left:5px; width:100%; padding-left:18px;">Account Name</h4>
            <span style="clear:both; position:absolute; top:15px; right:10%;" class="glyphicon glyphicon-cog"></span>
        </div>  
        <div style="min-width:300px;" class="col-xs-6 col-sm-4 hoverimage">
            <a href="#"><img src="img/tempsynopticsicon.jpg" style="margin-bottom:30px; border-radius:10px; width:100%; padding:0px; position:relative;" /></a>
            <h4 style="clear:both; position:absolute; top:5px; left:5px; width:100%; padding-left:18px;">New</h4>
        </div>  

    

    </div>
</div><!--/.container-->


      <hr>

      <footer>
        <p>&copy; SquareSuits 2013</p>
      </footer>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!--jQuery from Google-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script><!--jQuery UI from Google-->

    <script src="bootstrap/js/bootstrap.js"></script><!--Bootstrap-->
    <script src="js/theme.js"></script><!--Bootstrap-->
    <!--<script src="js/colorfade.js"></script>--><!--If it works, this should fade images FROM grayscale using HTML5-->

    <script type="text/jscript">//This fades images that are also links - I wrote it. =]
        $(document).ready(function () {
            $('.hoverimage').animate({
                opacity: .7
            });
            $('.hoverimage').hover(function () {
                $(this).stop().animate({ opacity: 1 }, 'fast');
            }, function () {
                $(this).stop().animate({ opacity: .7 }, 'slow');
            });
        });
</script>



    <script type="text/jscript">//This makes tooltips!
        $(document).ready(function () {
            $(function () {
                $(".tip").tooltip();
            });
        });
</script>




  </body>
</html>


