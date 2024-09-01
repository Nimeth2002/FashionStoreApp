<!doctype html>
<html >
<head>
<title>update products</title>
	<link href="Styling.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
	if (isset($_POST['submit']))
	{
		
		include "Connection.php";
		$Pname = $_POST['Pname'];
		$description = $_POST['description'];
		$imgName = $_FILES['image']['name'];
		$price = $_POST['price'];
	
	
	$target = "uploads/".basename($imgName);
	
	$sql = "INSERT INTO products (pname,description,imgName,price)
	VALUES ('$Pname','$description','$imgName','$price')";
	
		$results = mysqli_query($conn,$sql);
	
	if(!$results){ 
		die (	'Could not enter data : '.mysqli_error($conn));
	}
	else{
		echo "Enterd data successfully";
	}
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	{
		 echo "Image uploaded successfully";
	}
	else
	{ 
		echo "failed to upload image";
	}
		}
	?>
<form action ="" method="post" enctype=	"multipart/form-data" name = "form1" id = "form1">
	<table width="200" border="1">
  <tbody>
    <tr>
      <th>Product name </th> 
      <td><label for="Pname2"></label><input type="text" name="Pname" id = "Pname2"></td>
    </tr>
    <tr>
      <th>description </th>
      <td><label for ="des"></label><textarea name = "description" id="des" cols = "45" rows = "5"></textarea>
		</td>
    </tr>
	  <tr>
      <th>Image</th>
      <td><p><label for="img"></label>
		  	<label for="imgName"></label>	
			<label for="img2"></label>
		  	<input type="hidden" name ="size" value="1000000">
		  	<input type="file" name="image" id="img2"></td>
		  </p>
	  <tr>
	  <tr>
	<tr>
      <th>Price </th>
      <td><label for="Price>"></label> <input type="text" name = "price" id="price"></td>
    </tr>
      <th><input type="submit" name="submit" id="submit" value="submit"> </th>
      <th><input type="button" value="Reset"> </th>
    </tr>
  </tbody>
</table> 
    
</form>
    <form  method="post" action="Search product.php"  id="Searchform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
    </form> 
  </body>           
         	   
      <form method="post" action="updateform.php"  id="Updateform"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Update"> 
    </form> 
       
  </body> 
</body>
</html>
