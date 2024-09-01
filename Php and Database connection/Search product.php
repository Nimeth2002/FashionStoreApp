<!doctype html>
<?php
      if(isset($_POST['submit'])){ 
	    include('Connection.php');	  	  
	  	
			$search=$_POST['pname'];//search field 
			
			//var_dump($search);
			
			echo("<br/>");
			$sql = 'SELECT * FROM products WHERE pname = "'.$search.'"'; 
			
		$result = mysqli_query($conn,$sql) or 
		die("Couldn't execute query. ". mysqli_error($conn));
		
			
  		  if(mysqli_num_rows($result) > 0){ 	  
	 	 	
			$row=mysqli_fetch_array($result);	 
         $Pname = $_POST['Pname'];
		$description = $_POST['description'];
		$imgName = $_FILES['image']['name'];
		$price = $_POST['price'];
	  //-display the result of the array 
	    	echo "<ul>\n"; 
	 	 echo "<li>" . $pname."</li>\n"; 
		 echo "<li>" .$description."</li>\n"; 
		 echo "<li>" . $imgName."</li>\n"; 
		 echo "<li>" .$price."</li>\n";
	 	 echo "</ul>";
  		
	 }
    else{
		 echo " No results found ";//rows equal to 0
		  
	    }
	}
      
	else{
		header("Location: Search.html");// if form not submitted
		}  
	  	 
?>




</body>

</html>
