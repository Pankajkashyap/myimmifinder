<?php
	include("config/config.php");
	$conn = new connection();
	if(isset($_GET['source']) && !empty($_GET['source']) && isset($_GET['destination']) && !empty($_GET['destination'])){
		$source = $conn->getCountryDetail($_GET['source']);
		$destination = $conn->getCountryDetail($_GET['destination']);
		
		$sourcecountry = $conn->getCountry($_GET['source']);
		$descountry = $conn->getCountry($_GET['destination']);
		
	}
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
			<div class="col-xs-12 col-md-4">
				<a href="index.php"><img src="img/logo.png" width="40%" /></a>
			</div>
		</div>
		<br/>
			<div class="table-responsive">          
				<table class="table table-hover">
					<thead>
					  <tr>
						<th colspan="3" style="text-align:center;"><h1>Comparison between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1></th>
					  </tr>
					  <tr>
						<th>Compare</th>
						<th>Source Country (<?php echo @$sourcecountry->name ;?>)</th>
						<th>Destination Country (<?php echo @$descountry->name ;?>)</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><strong>Continent</strong></td>
						<td><?php echo @$source->continent ;?></td>
						<td><?php echo @$destination->continent ;?></td>
					  </tr>
					  <tr>
						<td><strong>Motto</strong></td>
						<td><?php echo @$source->motto ;?></td>
						<td><?php echo @$destination->motto ;?></td>
					  </tr>
					  <tr>
						<td><strong>Primary Language</strong></td>
						<td><?php echo @$source->primary_language ;?></td>
						<td><?php echo @$destination->primary_language ;?></td>
					  </tr>
					  <tr>
						<td><strong>Currency</strong></td>
						<td><?php echo @$source->currency ;?></td>
						<td><?php echo @$destination->currency ;?></td>
					  </tr>
					  <tr>
						<td><strong>Capital City</strong></td>
						<td><?php echo @$source->capital_city ;?></td>
						<td><?php echo @$destination->capital_city ;?></td>
					  </tr>
					  <tr>
						<td><strong>Largest City</strong></td>
						<td><?php echo @$source->largest_city ;?></td>
						<td><?php echo @$destination->largest_city ;?></td>
					  </tr>
					  <tr>
						<td><strong>National Anthem</strong></td>
						<td><?php echo @$source->national_anthem ;?></td>
						<td><?php echo @$destination->national_anthem ;?></td>
					  </tr>
					  <tr>
						<td><strong>Most Popular cities</strong></td>
						<td><?php echo @$source->most_popular_cities ;?></td>
						<td><?php echo @$destination->most_popular_cities ;?></td>
					  </tr>
					  <tr>
						<td><strong>Voting Age</strong></td>
						<td><?php echo @$source->voting_age ;?></td>
						<td><?php echo @$destination->voting_age ;?></td>
					  </tr>
					  <tr>
						<td><strong>Age of Consent</strong></td>
						<td><?php echo $source->age_of_consent ;?></td>
						<td><?php echo $source->age_of_consent ;?></td>
					  </tr>
					  <tr>
						<td><strong>Drinking Age</strong></td>
						<td><?php echo $source->drinking_age ;?></td>
						<td><?php echo $source->drinking_age ;?></td>
					  </tr>
					  <tr>
						<td><strong>Government Type</strong></td>
						<td><?php echo @$source->givernment_type ;?></td>
						<td><?php echo @$destination->givernment_type ;?></td>
					  </tr>
					  <tr>
						<td><strong>Chief Executive</strong></td>
						<td><?php echo @$source->chief_executive_first ;?></td>
						<td><?php echo @$destination->chief_executive_first ;?></td>
					  </tr>
					  <tr>
						<td><strong>Second chief</strong></td>
						<td><?php echo @$source->chief_executive_second ;?></td>
						<td><?php echo @$destination->chief_executive_second ;?></td>
					  </tr>
					  <tr>
						<td><strong>Legislature Size</strong></td>
						<td><?php echo @$source->legislature_size ;?></td>
						<td><?php echo @$destination->legislature_size ;?></td>
					  </tr>
					  <tr>
						<td><strong>Last Legislative Election</strong></td>
						<td><?php echo $source->last_legislative_election ;?></td>
						<td><?php echo $source->last_legislative_election ;?></td>
					  </tr>
					  <tr>
						<td><strong>GDP</strong></td>
						<td><?php echo @$source->gdp ;?></td>
						<td><?php echo @$destination->gdp ;?></td>
					  </tr>
					  <tr>
						<td><strong>GDP Growth Rate</strong></td>
						<td><?php echo @$source->gdp_growth_rate ;?></td>
						<td><?php echo @$destination->gdp_growth_rate ;?></td>
					  </tr>
					  <tr>
						<td><strong>GDP Per Capita Growth</strong></td>
						<td><?php echo @$source->gdp_per_capita_growth ;?></td>
						<td><?php echo @$source->gdp_per_capita_growth ;?></td>
					  </tr>
					</tbody>
				  </table>
				</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>