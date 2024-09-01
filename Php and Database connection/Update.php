<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['update'])){ 
	    include('Connection.php');

		$Pname = $_POST['Pname'];
		$description = $_POST['description'];
		$imgName = $_FILES['image']['name'];
		$price = $_POST['price'];			

$sql="UPDATE products SET pname='$pname',description='$description',image,name =$imgName , price=$price , WHERE pname ='$pname'";
		
  	 $result=mysqli_query($conn,$sql);
   
// if successfully updated. 
	if($result){			     
    
         // echo $row['emp_address'];
	echo "Successfully updated";
	echo "<BR>";
	}
}
else {
echo "ERROR";
}
?>