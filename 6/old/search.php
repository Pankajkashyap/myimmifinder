<?php
	include("config/services.php");
	$conn = new services();
	
	if(isset($_GET['source']) && !empty($_GET['source']) && isset($_GET['destination']) && !empty($_GET['destination'])){
		$source = $conn->getCountryDetail($_GET['source']);
		foreach($source as $key=>$val){
			if(empty($source->$key)){
				$source->$key =  "";
			}
		}
		
		$destination = $conn->getCountryDetail($_GET['destination']);
		foreach($destination as $key=>$val){
			if(empty($destination->$key)){
				$destination->$key =  "";
			}
		}

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
	
	<link rel="stylesheet" href="css/tablesaw.css">
	<!-- 
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/demohead.css">
	-->
	<!--[if lt IE 9]><script src="../dist/dependencies/respond.js"></script><![endif]-->
	<script src="js/jquery.js"></script>
	<script src="js/tablesaw.js"></script>
	<script src="js/loadfont.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:none;">
  
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">&nbsp;</div>
			<div class="col-md-4 col-xs-12" align="center">
				<a href="index.php"><img src="img/logo.png" width="40%" /></a>
			</div>
			<div class="col-md-4 col-xs-12">&nbsp;</div>
		</div>
		<br/>
		<?php if($_GET['action'] == 'all') { ?>		
			<div class="row row-height">
				<div class="col-md-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>		
		
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">Compare</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">Source Country (<?php echo @$sourcecountry->name ;?>)</div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">Destination Country (<?php echo @$descountry->name ;?>)</div>
			</div>
				
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 text-success"><strong>Continent</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->continent ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->continent ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Motto</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->motto ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->motto ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Primary Language</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->primary_language ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->primary_language ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Currency</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->currency ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->currency ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Capital City</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->capital_city ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->capital_city ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Largest City</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->largest_city ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->largest_city ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>National Anthem</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->national_anthem ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->national_anthem ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Most Popular cities</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->most_popular_cities ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->most_popular_cities ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Voting Age</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->voting_age ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->voting_age ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Age of Consent</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->age_of_consent ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->age_of_consent ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Drinking Age</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->drinking_age ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->drinking_age ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Government Type</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->givernment_type ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->givernment_type ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Chief Executive</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->chief_executive_first ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->chief_executive_first ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Second chief</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->chief_executive_second ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->chief_executive_second ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Legislature Size</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->legislature_size ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->legislature_size ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Last Legislative Election</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->last_legislative_election ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->last_legislative_election ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>GDP</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->gdp ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>GDP Growth Rate</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp_growth_rate ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->gdp_growth_rate ;?></div>
			</div>
			
			<div class="row row-height">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>GDP Per Capita Growth</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp_per_capita_growth ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp_per_capita_growth ;?></div>
			</div>
		
			<?php } ?>	
			
			<?php if($_GET['action'] == 'food') {			
				$source = $conn->getFood($_GET['source']);
				$destination = $conn->getFood($_GET['destination']);
				$getStatessource = $conn->getStates($_GET['source']);
				$getStatesdes = $conn->getStates($_GET['destination']);
			?>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
						<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
					</div>
				</div>
				<div style="border:1px solid #ccc;">
				
				<div>
					<select name="statesource" id="statesource">
						<option value="">Source</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Assam">Assam</option>
					</select>
					<select name="destinationsource" id="destinationsource">
						<option value="">Destination</option>
						<option value="Alabama">Alabama</option>
						<option value="Alaska">Alaska</option>
					</select>
				</div>
				
				<table id="mytable" class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-minimap data-tablesaw-sortable>
					<thead>
						<tr>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">State</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Meal</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">McMeal at McDonalds</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Domestic Beer</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Cappuccino (regular)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Coke/Pepsi (0.33 liter bottle)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Water (0.33 liter bottle)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Milk (regular), (1 liter)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Loaf of Fresh White Bread (500g)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Rice (white), (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Eggs (12)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Local Cheese (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Chicken Breasts (Boneless, Skinless), (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Apples (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Oranges (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Tomato (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Potato (1kg)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Lettuce (1 head)</th>
							<th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Water (1.5 liter bottle)</th>
						</tr>
					</thead>
					<tbody>
					
							<tr class="warning">
								<th><?php echo @$sourcecountry->name ;?></th>
							</tr>
							
							<tr class="ss">
								
							</tr>
							<?php
								foreach($getStatessource as $getstate){
							?>
							<tr class="sss">
								<td><strong><?php echo @$getstate->state ; ?></strong></td>
								<?php
								foreach($source as $s){
									if($s->state == $getstate->state){
								?>
										<td>$<?php echo @$s->price ; ?></td>
									<?php } else { 
										continue;
									} } ?>
							  </tr>
							<?php } ?>
							
							<tr class="warning">
								<th><?php echo @$descountry->name ;?></th>
							</tr>
							
							<tr class="dd">
								
							</tr>
							<?php
								foreach($getStatesdes as $des){
							?>
							  <tr class="ddd">
								<td><strong><?php echo @$des->state ; ?></strong></td>
								<?php
								foreach($destination as $d){
									if($d->state == $des->state){
								?>
										<td>$<?php echo @$d->price ; ?></td>
									<?php } else { 
										continue;
									} } ?>
							  </tr>
							<?php } ?>
					</tbody>
				</table>
				</div>
			<?php } ?>			
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(function(){
		
			$("#statesource").change(function(){
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajax.php",
					method:"POST",
					data:{sourceid:sourcestate, action:'source', source:<?php echo $_GET['source']; ?>, destination:<?php echo $_GET['destination']?>},
					success: function(res){
						$(".sss").css("display", "none");
						$(".ss").html(res);
					}
				});
				$('#mytable').table().data( "table" ).refresh();
			});
			$("#destinationsource").change(function(){
				var sourcedest = $("#destinationsource").val();
				$.ajax({
					url:"ajax.php",
					method:"POST",
					data:{sourceid:sourcedest, action:'destination'},
					success: function(res){
						$(".ddd").css("display", "none");
						$(".dd").html(res);
						
					}
				});
				$('#mytable').table().data( "table" ).refresh();
			});
			$('#mytable').table().data( "table" ).refresh();
		})
	</script>
  </body>
</html>