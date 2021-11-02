<?php

  // Start session; this has to appear before any HTML tag
  session_start();
  
?>

<!DOCTYPE html>
<html lang=en>
<!--==================================================================
//
// Web site: Boushra's Jewelry
// Web page: products page
// Description:
//   It is a website to sell jewelry and accessories.
//   In this page, take the customer information and the order information and send them to the server.
// 
//=================================================================-->

<head>
	<!-- title, page information, author name and descreption -->
	
	<title>Order Confirmation, V4</title>
	<meta charset="UTF-8">
	<meta name="author" content="Boushr Abdulmohsen"/>
	<meta name="description" content="Boushra's Jewelry"/>
	<meta name="keywords" content="HTML, Jewelry, Accessories">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	
  
</head>

<body>
	<!-- navigation tab in the header of the body -->
	<nav class="navbar navbar-expand-sm justify-content-center">
		<a class="navbar-brand" href="logo.PNG">
			<img src="logo.PNG" alt="Logo" style="width:40px;">
		</a>
		<!-- Links -->
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="mainpage.html">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="productspage.html">Product</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="orderpage.html">Order</a>
		  </li>
		</ul>
	  
	</nav>

<?php

    // Show echo method
	echo "<table>";

	echo "<th>Order Detail</th>";

    echo '<tr>','<td>Name:</td>','<td>',$_POST["firstname"]," ", $_POST["lastname"],'</td>','</tr>';

    echo '<tr>','<td>Phone:</td>','<td>',$_POST["phonenumber"],'</td>','</tr>';

	echo '<tr>','<td>Email Address:</td>','<td>',$_POST["email"],'</td>','</tr>';

    echo '<tr>','<td>Product:</td>','<td>',$_POST["productlist"],'</td>','</tr>';

	echo '<tr>','<td>Quantity:</td>','<td>',$_POST["quantity"],'</td>','</tr>';

	echo '<tr>','<td>Delivery Method:</td>','<td>',$_POST["shipping"],'</td>','</tr>';

	echo '<tr>','<td>Shipping Address:</td>','<td>',$_POST["address"],'</td>','</tr>';

	echo "</table>";
	
	$data = $_POST["hiddenName"];
	$obj = json_decode($data, true);
	$file = "ProductsData.json";
	$fh = fopen($file,"w");
	fwrite($fh, json_encode($obj));
	fclose($fh);
  ?>
  

  
</body>

</html>