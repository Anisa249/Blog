<!DOCTYPE html> 
<head><meta http-equiv="refresh" content="1; url=comments.php" /> <title></title> </head> <body> </body> </html> 
<?php $name=$_POST['name'];
$comment=$_POST['comment']; $hostname="localhost";
$username="";
$password="";
$db="comments";
$conn=mysqli_connect($hostname, "", "", $db); $sql="INSERT INTO comments(name,comment) VALUES ('$name','$comment') ";    //default password for mamp is "root" and for xampp is empty 
      $query=mysqli_query($conn,$sql); 
if(!query) {     echo "could not insert into database <br>";
}
else {
    echo " Sucessfully inserted inside database"; }
?>