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
    <link href="css/alertify.css" rel="stylesheet">
    <script src="js/alertify.js"></script>
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
                  <li class="active"><a href="#">Home</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Rente Uitrekenen</h1>
            <p class="lead">
              <p>Alleen nummers invoeren</p>
              <form method="post" action="send.php">
                <p>
                  <label for="jaren" style="width:55px;">Jaren:</label>
                  <input class="textbox" pattern="[0-9]*" type="text" name="jaren" required style="color:black;"/>
                </p>

                <p>
                  <label for="start" style="width:55px;">Start: </label>
                  <input class="textbox" pattern="[0-9]*" type="text" name="start" required style="color:black;"/>
                </p>

                <p>
                  <label for="rente" style="width:55px;">Rente:</label>
                  <input class="textbox" pattern="[0-9]*" type="text" name="rente" required style="color:black;"/>
                </p>
                <p class="lead">
                  <button type="submit" name="submit" class="btn btn-lg btn-default">Reken Uit</button>
                </p>
              </form>

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
