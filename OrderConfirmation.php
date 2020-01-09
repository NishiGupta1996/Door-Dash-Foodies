
<!--==================================================================
//
// Web site:   Food Delivery System Web site (Door Dash Foodies)
// Web page:   Order Confirmation page
// Course:     CSC 5750
// Homework:   1
// Author:     Nishi Gupta
// Date:       9 Dec 2019
// Description:
//       Door Dash Foodies is a web site contains information 
// about the resturant which delivers the food. Their are 3 pages -
// Main page contains general information about the website/resturants. 
// Resturant page shows the information about their own food. 
// Order Page take the order from the customer. Order Confirmation Pge // give the confirmaton about the order
//
//=================================================================-->

<html>
<head>
<title>Door Crash Foodies Order Confirmation Page, v4</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Nishi Gupta"/>
    <meta name="description" content="Door Crash Foodies"/>
    <meta http-equiv="Expires" content="-1">
	
	<!-- External CSS link -->
	<link rel="stylesheet" type="text/css" 
    href="Door Crash Foodies-ExternalStyles.css">
	<?php
	//Read and decode file into array
	$contents = file_get_contents('FoodData.json');
	$data = json_decode($contents, true);
	
	//After form submit, find the quanity order by user
	for ($r = 0; $r <count($data); $r++) 
	{
	 $food = substr($_GET["FoodItems"], 0, strpos($_Get["FoodItems"], "$"));
		if ($data[$i][Restaurant] == $_Get["rbTimeSlot"] && $data[$i][food_item] == $food)
		{
			$quantity = $_POST ["item"];
			$data[$i][quantity] = $data[$i][quantity] +$quantity;
		}
	}
	$data1 = json_encode($data);
	file_put_contents("FoodData.json", $data1);
	echo ("<script> console.log(" . $data1 . "); </script>");
    ?>	
</head>
<body>
	<!--header -->
	<div style="height:200px; background-image:linear-gradient(lightblue, white)"><br>
	<h1>Door Crash Foodies Order Confirmation Page</h1>
	</div>
	<hr>
  
	<!-- Menu-->
    <h2>
	<a href="DCF-Main.html">Main</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="DCF-Restaurant.html">About Restaurant</a>&nbsp;&nbsp;&nbsp;
	<a href="DCF-Order.html">Order Now</a>
	</h2>
	<hr>
	
<!-- comment -->

	
<p>Thank you for Ordering from Door Dash Foodies! 

<p>We have successfully received it. 

<p>Below is a summary of the order<br><br>  
<?php

	echo 'First Name: ' . $_POST ["FirstName"] .'<br>';
	echo 'Last Name: ' . $_POST ["LastName"] . '<br>';
	echo 'Address: ' . $_POST ["Address"] . '<br>';
	echo 'Telephone ' . $_POST ["inpTelephone"]. '<br>';
	echo 'Restaurant: ' . $_POST ["rbTimeSlot"] . '<br>';
	echo 'FoodItems: ' . $_POST ["FoodItems"] . '<br>';
	echo 'quantity: ' . $_POST ["item"] . '<br>';
	echo 'Cost: ' . $_POST ["cost"] . '<br>';
	echo 'Total: ' . $_POST ["total"] . '<br>';
?>
<!--Footer-->
	<footer>
	<h4>
    <i><font color="white">Door Crash Foodies! Enjoy your delicious food! </i>&nbsp;&nbsp;<br>
    <a class="emailStyle" href="mailto:somebody@doorcrashfoodies.com">E-mail</a>&nbsp;&nbsp;
     313-717-8034&nbsp;&nbsp;<br>
    Copyright&nbsp;&copy;&nbsp;2019 Door Crash Foodies All rights reserved.
	</font>
	</h4>
	</footer>
	<hr>
	
</body>
</html>
