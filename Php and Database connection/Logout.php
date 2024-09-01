<!doctype html>
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:Loginform(html).php"); // Redirecting To Home Page
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>