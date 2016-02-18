<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rente uitrekenen</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Rente Uitrekenen</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Terug</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Uitrekenen</h1>
            <p class="lead">

<?php
  $jaar = intval($_POST['jaren']);
  $start = intval($_POST['start']);
  $rente = floatval($_POST['rente'] / 100);
  $currentyear = floatval(date("Y"));

  echo("Jaren: $jaar <br> Begin geld: $start <br> Rente: " . $rente * 100 . "% <Br><ul>");
  $currentyear++;
  $x = 0;
  while ($x <= $jaar)
  {
    $totaal = number_format($start = $start + ($start * $rente), 2);
    echo("<li>$currentyear: EUR: $totaal</li>");
    $x++;
    $currentyear++;
  }

 ?>

             </p>
           </div>
         </div>
       </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
