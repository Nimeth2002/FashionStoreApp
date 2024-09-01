<!doctype html>
<?php
      if(isset($_POST['submit'])){ 
	    include('Connection.php');
				
		$search=$_POST['name'];
	
$sql = 'SELECT * FROM products WHERE pname = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		          
         <form name="form" method="POST" action="Update.php">
		   <p>Product name:
  <input type="text" name="pname" 
		value="<?php echo $row['pname']?>"/></p>
        <p>price:
  <input type="text" name="price" 
		value="<?php echo $row['']?>"/></p>
		           
        <input type="hidden" name="name" value="<?php echo $search; ?>" />
			              
	         <input type="submit" name="update" id="update" value="Update" />
		   </p>
         </form>
        <?php
		 	
		
	 }
    else{
		 echo " No results found "; 
	    }
	
    
  }
	else{
		header("Location: Update.html");
	}  
	  	 
?>




</body>

</html>
