<?php
	include("config/services.php");
	$conn = new services();
	$countries = $conn->getCountries();
	
	/* $source = $conn->getFood($_GET['source']);
	$destination = $conn->getFood($_GET['destination']);
	$getStatessource = $conn->getStates($_GET['source']);
	$getStatesdes = $conn->getStates($_GET['destination']); */
	
	if($_POST['action']=='source' && $_POST['sourceid'] == 'Andhra Pradesh'){
	
	echo json_encode(array("data"=>"andhra"));
		/* echo '<td class="tablesaw-cell-persist"><strong>Andhra Pradesh</strong></td>
				<td>$1.18</td>
					<td>$3.93</td>
					<td>$1.92</td>
					<td>$1.39</td>
					<td>$0.52</td>
					<td>$0.23</td>
					<td>$0.89</td>
					<td>$0.47</td>
					<td>$0.84</td>
					<td>$0.94</td>
					<td class="tablesaw-cell-hidden">$6.88</td>
					<td class="tablesaw-cell-hidden">$4.18</td>
					<td class="tablesaw-cell-hidden">$1.57</td>
					<td class="tablesaw-cell-hidden">$1.47</td>
					<td class="tablesaw-cell-hidden">$0.52</td>
					<td class="tablesaw-cell-hidden">$0.53</td>
					<td class="tablesaw-cell-hidden">$0.69</td>
					<td class="tablesaw-cell-hidden">$0.48</td>'; */
	} else if($_POST['action']=='source' && $_POST['sourceid'] == 'Assam'){
	echo json_encode(array("data"=>"assam"));
		/* echo '<td class="tablesaw-cell-persist"><strong>Assam</strong></td>
													<td>$2.18</td>
														<td>$3.86</td>
														<td>$1.54</td>
														<td>$1.45</td>
														<td>$0.51</td>
														<td>$0.21</td>
														<td>$0.88</td>
														<td>$0.59</td>
														<td>$0.7</td>
														<td>$1.19</td>
														<td class="tablesaw-cell-hidden">$6.46</td>
														<td class="tablesaw-cell-hidden">$3.4</td>
														<td class="tablesaw-cell-hidden">$2.91</td>
														<td class="tablesaw-cell-hidden">$1.35</td>
														<td class="tablesaw-cell-hidden">$0.71</td>
														<td class="tablesaw-cell-hidden">$0.35</td>
														<td class="tablesaw-cell-hidden">$0.64</td>
														<td class="tablesaw-cell-hidden">$0.56</td>'; */
	} 
	
	else if($_POST['action']=='destination' && $_POST['sourceid'] == 'Alabama'){
		echo '<td class="tablesaw-cell-persist"><strong>Alabama</strong></td>
				<td>$14.97</td>
					<td>$8.11</td>
					<td>$3.43</td>
					<td>$4.1</td>
					<td>$1.71</td>
					<td>$1.32</td>
					<td>$1.33</td>
					<td>$2.51</td>
					<td>$2.38</td>
					<td>$3.4</td>
					<td class="tablesaw-cell-hidden">$11.14</td>
					<td class="tablesaw-cell-hidden">$11.31</td>
					<td class="tablesaw-cell-hidden">$3.51</td>
					<td class="tablesaw-cell-hidden">$4.15</td>
					<td class="tablesaw-cell-hidden">$3.78</td>
					<td class="tablesaw-cell-hidden">$3.04</td>
					<td class="tablesaw-cell-hidden">$1.83</td>
					<td class="tablesaw-cell-hidden">$1.9</td>';
	} else if($_POST['action']=='destination' && $_POST['sourceid'] == 'Alaska'){
		echo '<td class="tablesaw-cell-persist"><strong>Alaska</strong></td>
				<td>$14.97</td>
					<td>$9.98</td>
					<td>$6.24</td>
					<td>$4.91</td>
					<td>$2.52</td>
					<td>$2.1</td>
					<td>$1.25</td>
					<td>$4.18</td>
					<td>$6.83</td>
					<td>$4.03</td>
					<td class="tablesaw-cell-hidden">$11.87</td>
					<td class="tablesaw-cell-hidden">$10.4</td>
					<td class="tablesaw-cell-hidden">$7.92</td>
					<td class="tablesaw-cell-hidden">$7.03</td>
					<td class="tablesaw-cell-hidden">$8.51</td>
					<td class="tablesaw-cell-hidden">$3.25</td>
					<td class="tablesaw-cell-hidden">$2.78</td>
					<td class="tablesaw-cell-hidden">$2.71</td>';
	}
	
	
?>