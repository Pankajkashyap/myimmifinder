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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	  <script>
		  $(window).load(function() {
			  $('#loader').hide();
		  },$('#loader').show());

		  $(document).ajaxStart(function() {
			  $('#loader').show();
		  });
		  $(document).ajaxSuccess(function() {
			  $('#loader').hide();
		  });
	  </script>
  </head>
  <body style="background:none;">
  <div style="display:none" id="loader"><img src="img/spinner.gif"></div>
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
			<br/><br/>
			<div class="row row-height first">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Compare</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Source Country (<?php echo @$sourcecountry->name ;?>)</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Destination Country (<?php echo @$descountry->name ;?>)</strong></div>
			</div>
				
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Continent</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->continent ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->continent ;?></div>
			</div>
			
			<div class="row row-height second">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Motto</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->motto ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->motto ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Primary Language</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->primary_language ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->primary_language ;?></div>
			</div>
			
			<div class="row row-height third">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Currency</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->currency ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->currency ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Capital City</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->capital_city ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->capital_city ;?></div>
			</div>
			
			<div class="row row-height fourth">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Largest City</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->largest_city ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->largest_city ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>National Anthem</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->national_anthem ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->national_anthem ;?></div>
			</div>
			
			<div class="row row-height fifth">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Most Popular cities</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->most_popular_cities ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->most_popular_cities ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Voting Age</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->voting_age ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->voting_age ;?></div>
			</div>
			
			<div class="row row-height first">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Age of Consent</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->age_of_consent ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->age_of_consent ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Drinking Age</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->drinking_age ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->drinking_age ;?></div>
			</div>
			
			<div class="row row-height second">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Government Type</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->givernment_type ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->givernment_type ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Chief Executive</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->chief_executive_first ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->chief_executive_first ;?></div>
			</div>
			
			<div class="row row-height third">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Second chief</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->chief_executive_second ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->chief_executive_second ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Legislature Size</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->legislature_size ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->legislature_size ;?></div>
			</div>
			
			<div class="row row-height fourth">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>Last Legislative Election</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->last_legislative_election ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo $source->last_legislative_election ;?></div>
			</div>
			
			<div class="row row-height six">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>GDP</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->gdp ;?></div>
			</div>
			
			<div class="row row-height fifth">
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><strong>GDP Growth Rate</strong></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$source->gdp_growth_rate ;?></div>
				<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><?php echo @$destination->gdp_growth_rate ;?></div>
			</div>
			
			<div class="row row-height six">
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
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajax.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", count:count, classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajax.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', count:count, classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col">Meal</th>
						<th scope="col">McMeal at McDonalds</th>
						<th scope="col">Domestic Beer</th>
						<th scope="col">Cappuccino (regular)</th>
						<th scope="col">Coke/Pepsi (0.33 liter bottle)</th>
						<th scope="col">Water (0.33 liter bottle)</th>
						<th scope="col">Milk (regular), (1 liter)</th>
						<th scope="col">Loaf of Fresh White Bread (500g)</th>
						<th scope="col">Rice (white), (1kg)</th>
						<th scope="col">Eggs (12)</th>
						<th scope="col">Local Cheese (1kg)</th>
						<th scope="col">Chicken Breasts (Boneless, Skinless), (1kg)</th>
						<th scope="col">Apples (1kg)</th>
						<th scope="col">Oranges (1kg)</th>
						<th scope="col">Tomato (1kg)</th>
						<th scope="col">Potato (1kg)</th>
						<th scope="col">Lettuce (1 head)</th>
						<th scope="col">Water (1.5 liter bottle)</th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getStatessource = array_slice($getStatessource, 0, 1);
							foreach($getStatessource as $getstate){
						?>
						<tr class="sss">
							<td><strong><?php echo @$conn->getStateName($getstate->state) ; ?></strong></td>
							<?php
							$sliced_array = array_slice($source, 0, 18);								
							foreach($sliced_array as $s){
							?>
								<td>$<?php echo @$s->price ; ?></td>
							<?php } ?>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getStatesdes = array_slice($getStatesdes, 0, 1);
							foreach($getStatesdes as $des){
						?>
						  <tr class="ddd">
							<td><strong><?php echo @$conn->getStateName($des->state) ; ?></strong></td>
							<?php
							$destination = array_slice($destination, 0, 18);
							foreach($destination as $d){
							?>
								<td>$<?php echo @$d->price ; ?></td>
							<?php } ?>
						  </tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>			
		
		<?php if($_GET['action'] == 'data') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'tariff_and_mobile', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'tariff_and_mobile', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class="">Internet (6 Mbps, Unlimited Data, Cable/ADSL)</th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getDataSources = $conn->getData($_GET['source']);
							$getDataSources = array_slice($getDataSources, 0, 1);
							foreach($getDataSources as $getDataSource){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getDataSource->statename ; ?></strong></td>
							<td>$<?php echo @$getDataSource->name ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getDataSources = $conn->getData($_GET['destination']);
							$getDataSources = array_slice($getDataSources, 0, 1);
							foreach($getDataSources as $getDataSource){
						?>
						  <tr class="ddd">
							<td><strong><?php echo @$getDataSource->statename ; ?></strong></td>
							<td>$<?php echo @$getDataSource->name ; ?></td>
						  </tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>			

		
		<?php if($_GET['action'] == 'fitness') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'fitness_and_tennis', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'fitness_and_tennis', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Fitness Club, Monthly Fee for 1 Adult </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getFitSources = $conn->getFitness($_GET['source']);
							$getFitSources = array_slice($getFitSources, 0, 1);
							foreach($getFitSources as $getFitSource){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getFitSource->statename ; ?></strong></td>
							<td>$<?php echo @$getFitSource->name ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getFitSources = $conn->getFitness($_GET['destination']);
							$getFitSources = array_slice($getFitSources, 0, 1);
							foreach($getFitSources as $getFitSource){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getFitSource->statename ; ?></strong></td>
							<td>$<?php echo @$getFitSource->name ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	
		
		<?php if($_GET['action'] == 'game') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'game', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'game', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Tennis Court Rent (1 Hour on Weekend) </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getgetGameSources = $conn->getGame($_GET['source']);
							$getgetGameSources = array_slice($getgetGameSources, 0, 1);
							foreach($getgetGameSources as $getgetGameSource){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getgetGameSource->statename ; ?></strong></td>
							<td>$<?php echo @$getgetGameSource->name ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getgetGameSources = $conn->getGame($_GET['destination']);
							$getgetGameSources = array_slice($getgetGameSources, 0, 1);
							foreach($getgetGameSources as $getgetGameSource){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getgetGameSource->statename ; ?></strong></td>
							<td>$<?php echo @$getgetGameSource->name ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	
		
		<?php if($_GET['action'] == 'entertainment') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'entertainment', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'entertainment', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Cinema, International Release, 1 Seat </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getEntertainments = $conn->getEntertainment($_GET['source']);
							$getEntertainments = array_slice($getEntertainments, 0, 1);
							foreach($getEntertainments as $getEntertainment){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getEntertainment->statename ; ?></strong></td>
							<td>$<?php echo @$getEntertainment->name ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getEntertainments = $conn->getEntertainment($_GET['destination']);
							$getEntertainments = array_slice($getEntertainments, 0, 1);
							foreach($getEntertainments as $getEntertainment){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getEntertainment->statename ; ?></strong></td>
							<td>$<?php echo @$getEntertainment->name ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	
		
		<?php if($_GET['action'] == 'rent') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'residencerent', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'residencerent', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Apartment (1 bedroom) in City Centre </th>
						<th scope="col" class=""> Apartment (1 bedroom) Outside of Centre </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getResidenceRents = $conn->getResidenceRent($_GET['source']);
							$getResidenceRents = array_slice($getResidenceRents, 0, 1);
							foreach($getResidenceRents as $getResidenceRent){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getResidenceRent->statename ; ?></strong></td>
							<td>$<?php echo @$getResidenceRent->rent_inside ; ?></td>
							<td>$<?php echo @$getResidenceRent->rent_outside ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getResidenceRents = $conn->getResidenceRent($_GET['destination']);
							$getResidenceRents = array_slice($getResidenceRents, 0, 1);
							foreach($getResidenceRents as $getResidenceRent){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getResidenceRent->statename ; ?></strong></td>
							<td>$<?php echo @$getResidenceRent->rent_inside ; ?></td>
							<td>$<?php echo @$getResidenceRent->rent_outside ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	
		
		<?php if($_GET['action'] == 'salary') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'salary', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'salary', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Monthly Salary </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getSalaries = $conn->getSalary($_GET['source']);
							$getSalaries = array_slice($getSalaries, 0, 1);
							foreach($getSalaries as $getSalarie){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getSalarie->statename ; ?></strong></td>
							<td>$<?php echo @$getSalarie->salaryrange ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getSalaries = $conn->getSalary($_GET['destination']);
							$getSalaries = array_slice($getSalaries, 0, 1);
							foreach($getSalaries as $getSalarie){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getSalarie->statename ; ?></strong></td>
							<td>$<?php echo @$getSalarie->salaryrange ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	
		
		<?php if($_GET['action'] == 'attire') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'attire', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'attire', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Clothing male </th>
						<th scope="col" class=""> clothing women/girls </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getAttires = $conn->getAttire($_GET['source']);
							$getAttires = array_slice($getAttires, 0, 1);
							foreach($getAttires as $getAttire){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getAttire->statename ; ?></strong></td>
							<td><?php echo @$getAttire->clothing_male ; ?></td>
							<td><?php echo @$getAttire->clothing_female ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getAttires = $conn->getAttire($_GET['destination']);
							$getAttires = array_slice($getAttires, 0, 1);
							foreach($getAttires as $getAttire){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getAttire->statename ; ?></strong></td>
							<td><?php echo @$getAttire->clothing_male ; ?></td>
							<td><?php echo @$getAttire->clothing_female ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
		
		<?php if($_GET['action'] == 'tobacco') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'tobacco', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"ajaxsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'tobacco', classarray:arr},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Pack of Cigarettes (Marlboro) </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getgetTobaccos = $conn->getTobacco($_GET['source']);
							$getgetTobaccos = array_slice($getgetTobaccos, 0, 1);
							foreach($getgetTobaccos as $getgetTobacco){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getgetTobacco->statename ; ?></strong></td>
							<td>$<?php echo @$getgetTobacco->name ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getgetTobaccos = $conn->getTobacco($_GET['destination']);
							$getgetTobaccos = array_slice($getgetTobaccos, 0, 1);
							foreach($getgetTobaccos as $getgetTobacco){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getgetTobacco->statename ; ?></strong></td>
							<td>$<?php echo @$getgetTobacco->name ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
		
		<?php if($_GET['action'] == 'hospital') {
			$source = $conn->getData($_GET['source']);
			$destination = $conn->getData($_GET['destination']);
			$getStatessource = $conn->getStates($_GET['source']);
			$getStatesdes = $conn->getStates($_GET['destination']);
		?>
		<script>
		$(function(){
			$("#statesource").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				
				var sourcestate = $("#statesource").val();
				$.ajax({
					url:"hospitalsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcestate, action:"source", t:'hospital', classarray:arr, uses:'<?php echo $_GET['action']; ?>'},
					success: function(res){
						if(res.status  == true){
							$(".sss").css("display", "none");
							$("#mytable").find("tbody .ss").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
			$("#statedestination").change(function(){
				var arr = [];
				var count = $("#mytable thead .tablesaw-cell-hidden").length;
					$( "#mytable thead tr th" ).each(function( index ) {
					arr[index] = $( this ).attr('class');
				});
				var sourcedest = $("#statedestination").val();
				$.ajax({
					url:"hospitalsearch.php",
					method:"POST",
					dataType:"json",
					data:{sourceid:sourcedest, action:'destination', t:'hospital', classarray:arr, uses:'<?php echo $_GET['action']; ?>'},
					success: function(res){
						if(res.status  == true){
							$(".ddd").css("display", "none");
							$("#mytable").find("tbody .dd").html(res.food);
							$("#mytable").table().data("table").refresh();
						}
					}
				});
			});
		});
		</script>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
					<h1>Comparison Between <?php echo @$sourcecountry->name ;?> and <?php echo @$descountry->name ;?> </h1>
				</div>
			</div>
			
			<div class="row">
				<?php
					$sourcestates = $conn->getstatesbycountry($_GET['source']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statesource" id="statesource" class="form-control">
						<option value="">Source (<?php echo @$sourcecountry->name ;?>)</option>
						<?php foreach($sourcestates as $sourcestate){?>
							<option value="<?php echo $sourcestate->sid; ?>"><?php echo $sourcestate->name; ?></option>
						<?php } ?>
					</select>
				</div>
				<?php
					$statedestinations = $conn->getstatesbycountry($_GET['destination']);
				?>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 text-center">
					<select name="statedestination" id="statedestination" class="form-control">
						<option value="">Destination (<?php echo @$descountry->name ;?>)</option>
						<?php foreach($statedestinations as $statedestination){?>
							<option value="<?php echo $statedestination->sid; ?>"><?php echo $statedestination->name; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<table class="tablesaw table table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-minimap id="mytable">
				<thead>
					<tr>
						<th scope="col" data-tablesaw-priority="persist">State</th>
						<th scope="col" class=""> Hospital Name </th>
						<th scope="col" class=""> Address1 </th>
						<th scope="col" class=""> Address2 </th>
						<th scope="col" class=""> Webaddress </th>
						<th scope="col" class=""> Phone </th>
					</tr>
				</thead>
				<tbody>
				
						<tr class="warning">
							<th><?php echo @$sourcecountry->name ;?></th>
						</tr>
						<tr class="ss">
							
						</tr>
						<?php
							$getHospitals = $conn->getHospital($_GET['source']);
							$getHospitals = array_slice($getHospitals, 0, 1);
							foreach($getHospitals as $getHospital){
						?>
						<tr class="sss">
							<td><strong><?php echo @$getHospital->statename ; ?></strong></td>
							<td><?php echo @$getHospital->hname ; ?></td>
							<td><?php echo @$getHospital->address1 ; ?></td>
							<td><?php echo @$getHospital->address2 ; ?></td>
							<td><?php echo @$getHospital->webaddress ; ?></td>
							<td><?php echo @$getHospital->phone ; ?></td>
						</tr>
						<?php } ?>
						
						<tr class="warning">
							<th><?php echo @$descountry->name ;?></th>
						</tr>
						
						<tr class="dd">
							
						</tr>
						<?php
							$getHospitals = $conn->getTransportation($_GET['destination']);
							$getHospitals = array_slice($getHospitals, 0, 1);
							foreach($getHospitals as $getHospital){
						?>
						<tr class="ddd">
							<td><strong><?php echo @$getHospital->statename ; ?></strong></td>
							<td><?php echo @$getHospital->hname ; ?></td>
							<td><?php echo @$getHospital->address1 ; ?></td>
							<td><?php echo @$getHospital->address2 ; ?></td>
							<td><?php echo @$getHospital->webaddress ; ?></td>
							<td><?php echo @$getHospital->phone ; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		<?php } ?>
		
    </div>
  </body>
</html>