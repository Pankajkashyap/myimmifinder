<?php
	include("config/config.php");
	$conn = new connection();
	
	$countries = $conn->getCountries();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMI FINDER</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<div class="container">
		<div class="row">
			<form class="form-signin">
				<div class="col-xs-12 col-md-12">
					<label for="source">Source</label>
					<select name="source" class="form-control" name="source" id="source" required autofocus>
					<?php foreach($countries as $country){ ?>
						<option id="<?php  echo $country->cid; ?>"><?php  echo $country->name; ?></option>
					<?php } ?>	
					</select>
				</div>	
				<div class="col-xs-12 col-md-12">
					<label for="destination">Destination</label>
					<select name="destination" class="form-control" name="destination" id="destination" required>
					<?php foreach($countries as $country){ ?>
						<option id="<?php  echo $country->cid; ?>"><?php  echo $country->name; ?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-xs-12 col-md-12">&nbsp;
				</div>
				<div class="col-xs-12 col-md-12">
					<button class="btn btn-primary btn-block" type="button">All in One</button>
					<button class="btn btn-primary btn-block" type="button">Discusson Board</button>
					<button class="btn btn-primary btn-block" type="button">Climate and Weather</button>
					<button class="btn btn-primary btn-block" type="button">Food</button>
					<button class="btn btn-primary btn-block" type="button">Attire</button>
					<button class="btn btn-primary btn-block" type="button">Saftey and Security</button>
					<button class="btn btn-primary btn-block" type="button">Transportation</button>
					<button class="btn btn-primary btn-block" type="button">Medical Support</button>
				</div>
			</form>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>