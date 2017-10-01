<?php
	echo "<html>";
	echo "<head>";
	echo "<title>Confirmation</title>";
	echo "<link rel='stylesheet' type='text/css' href='style.css'>";
	echo "</head>";
	echo"<body>";
	$pufferValue = 20;
	$goldfishValue = 1;
	$angelfishValue = 5;
	$pufferCount =$_POST["pufferCount"];
	$goldfishCount = $_POST["goldfishCount"];
	$angelfishCount = $_POST["angelfishCount"];
	$shipping = $_POST["shipping"];
	$shippingName = "\0";
	if($shipping == 0)
		$shippingName = "Free 7 Day";
	else if($shipping == 5)
		$shippingName = "3 day";
	else
		$shippingName = "overnight";
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$total = $pufferCount*$pufferValue+$goldfishCount*$goldfishValue+$angelfishCount*$angelfishValue+$shipping;
	echo "<h1>Welcome ".$user." Password: ".$pass."</h1>";
	echo "<h3>Receipt</h3>";
	echo "<table>
	<tr>
	<th></th>
	<th>Quantity</th>
	<th>Cost</th>
	<th>Sub Total</th>
	</tr>
	<tr>
	<th>Pufferfish</th>
	<td>".$pufferCount."</td>
	<td>$".$pufferValue."</td>
	<td>$".($pufferValue*$pufferCount)."</td>
	</tr>
	<tr>
	<th>Goldfish</th>
	<td>".$goldfishCount."</td>
	<td>$".$goldfishValue."</td>
	<td>$".($goldfishValue*$goldfishCount)."</td>
	</tr>
	<tr>
	<th>Angelfish</th>
	<td>".$angelfishCount."</td>
	<td>$".$angelfishValue."</td>
	<td>$".($angelfishValue*$angelfishCount)."</td>
	</tr>
	<tr>
	<td></td>
	<th>Shipping</th>
	<td>".$shippingName."</td>
	<td>$".$shipping."</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<th>Total Cost</th>
	<td>$".$total."</td>
	</tr>
	</table>";
	echo "</body>";
	echo "</html>";
?>