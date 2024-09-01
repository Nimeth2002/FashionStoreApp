<!doctype html>
<?php
session_start();
if ( count( $_POST ) > 0 ) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';

  $con = mysqli_connect( $dbhost, $dbuser, $dbpass,'elegant' )or die( 'Unable To connect' );
  $result = mysqli_query( $con, "SELECT * FROM login WHERE username=' $username ' and password = ' $password'" );
  $row = mysqli_fetch_array( $result );
  if ( is_array( $row ) ) {
    $_SESSION[ 'id' ] = 'id';

  } else {
    $message = "Invalid Username or Password!";
	header( "Location:Insert product.php" );
	 
  }
  if ( isset( $_SESSION[ "id" ] ) ) {
  header( "Location:Insert product.php" );
}
}

?>