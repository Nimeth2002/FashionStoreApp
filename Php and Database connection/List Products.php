<!doctype html>
<html >
<head>

<title>update products</title>
</head>

<body>
<?php 
include 'Connection.php';
	$results = mysqli_query($conn,"SELECT * FROM products");
	echo "<Table >
	<tr>
		<th>Product name</th>
		<th>Product desctiption</th>
		<th>Product image</th>
		<th>Price</th>
	
	</tr>";
while($row = mysqli_fetch_array($results))
{
	$Pname = $row ['pname'];
	$description = $row ['description'];
	$imgName = $row ['image']['name'];
	$price = $row ['price'];
	
	$imageDisplay = "<img width = '200' height = '200' src='uploads/$imgName'>";
	
	echo "<tr>";
	echo "<td>".$Pname."</td>";
	echo "<td>".$description."</td>";
	echo "<td>".$imageDisplay."</td>";
	echo "<td>".$price."</td>";
	echo "</tr>";
}
echo "</table>"	;
mysqli_close($conn);
	?>


</body>
</html>