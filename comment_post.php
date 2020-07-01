<!DOCTYPE html> 
<<<<<<< HEAD
<head>
	<meta http-equiv="refresh" content="1; url=comments.php" /> 
	<title></title> 
</head> 
<body> 
<?php 
$name=$_POST['name'];
$comment=$_POST['comment']; 
$hostname="localhost";
=======
<head><meta http-equiv="refresh" content="1; url=index.php" /> <title></title> </head> <body> </body> </html> 
<?php $name=$_POST['name'];
$comment=$_POST['comment']; $hostname="localhost";
>>>>>>> cd847aff1045d80b967066ba60ba219aa76730af
$username="root";
$password="";
$db="comments";
$conn=mysqli_connect($hostname, "root", "", $db); 
$sql="INSERT INTO comments(name,comment) VALUES ('$name','$comment');";    //default password for mamp is "root" and for xampp is empty 
      $query=mysqli_query($conn,$sql); 
<<<<<<< HEAD
if(!$query) {
     echo "could not insert into database <br>";
=======
if(!$query) {     echo "could not insert into database <br>";
>>>>>>> cd847aff1045d80b967066ba60ba219aa76730af
}
else {
    echo " Sucessfully inserted inside database"; }
?>
</body> 
</html> 