<?PHP
include('../core/functions.php');
include('../core/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nathan Hand's personal webspace.">
    <meta name="author" content="Nathan Hand">

    <title>Nathan Hand's personal webpage.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
		<?PHP
		Navigation($home);
		?>
		
		<div class="row featurette">
			<div class="col-md-12">
				  <h2 class="featurette-heading">Trouble in Terrorist Town Stats</h2>
				  <h3><span class="text-muted">Stat tracking for TTT</span> </h3>
				  <p class="lead">An open source TTT statistics tracking software.</p>
				  <p class="lead"><a href="http://www.thehiddennation.com/ttt_stats" class="btn btn-lg btn-default">Website Link</a></p>
			</div>
		</div>

 <hr class="featurette-divider">
 
		<div class="row featurette">
			<div class="col-md-12">
				  <h2 class="featurette-heading">Aberystwyth Community of Gamers</h2>
				  <h3><span class="text-muted">Society website.</span> </h3>
				  <p class="lead">ACOG's personal website showing them off as a society, as well as providing help pages.</p>
				   <p class="lead"><a href="http://www.abercog.co.uk" class="btn btn-lg btn-default">Website Link</a></p>
			</div>
		</div>
		
<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-12">
				  <h2 class="featurette-heading">Coin Collector</h2>
				  <h3><span class="text-muted">A HTML5 based game</span> </h3>
				  <p class="lead">My HTML5 assignment to make a simple game using canvas.</p>
				   <p class="lead"><a href="http://users.aber.ac.uk/nah14/iwp/coin/" class="btn btn-lg btn-default">Website Link</a></p>
			</div>
		</div>
		
<hr class="featurette-divider">

		<?PHP
		footer();
		?>


        </div>
		

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
  </body>
</html>
