<?php
	include("config/services.php");
	$conn = new services();
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
			<form class="form-signin" action="search.php">
				<div class="col-xs-12 col-md-12">
					<label for="source">Source</label>
					<select name="source" class="form-control" name="source" id="source" required autofocus>
					<?php foreach($countries as $country){ ?>
						<option value="<?php  echo $country->cid; ?>"><?php  echo $country->name; ?></option>
					<?php } ?>	
					</select>
				</div>	
				<div class="col-xs-12 col-md-12">
					<label for="destination">Destination</label>
					<select name="destination" class="form-control" name="destination" id="destination" required>
					<?php foreach($countries as $country){ ?>
						<option value="<?php  echo $country->cid; ?>"><?php  echo $country->name; ?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-xs-12 col-md-12">&nbsp;
				</div>
				<div class="col-xs-12 col-md-12">
					<button class="btn btn-primary btn-block submit" type="submit" value="all" name="action">All in One</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="all" name="action">Discusson Board</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="all" name="action">Climate and Weather</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="food" name="action">Food</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="attire" name="action">Attire</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="all" name="action">Saftey and Security</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="transport" name="action">Transportation</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="all" name="action">Medical Support</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="data" name="action">Data Plan & Tariff</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="fitness" name="action">Fitness Club</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="game" name="action">Game</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="entertainment" name="action">Entertainment</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="rent" name="action">Residence on rent</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="salary" name="action">Salary</button>
					<button class="btn btn-primary btn-block submit" type="submit" value="tobacco" name="action">Tobacc</button>
				</div>
			</form>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$(".submit").click(function(){
				var source = $("#source").val();
				var destination = $("#destination").val();
				
				if(source == destination){
					alert("Source and Destination should not be same.");
					return false;
				}
			});	
		});
	</script>
  </body>
</html>