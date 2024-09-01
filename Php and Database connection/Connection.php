<!doctype html>
<html>
<head>
<title>Selecting MySQL Database</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect( $dbhost, $dbuser, $dbpass );
if ( !$conn ) {

  die( 'Could not connect: ' . mysqli_error( $conn ) );
}
echo 'Connected successfully';

echo "<br>";
$db = mysqli_select_db( $conn, 'elegant' );

if ( !$db ) {

  echo 'Select the database first ';

} else
  echo 'Database selected  ';


//mysqli_close($conn); ?>
</body>
</html>