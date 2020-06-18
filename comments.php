<!DOCTYPE html>
<head>
</head><body>
<h1> HTML comment box using PHP and MYSQL</h1>
<form action="comment_post.php" name="comments" method="post" enctype="multipart/form-data">
name:
<br />
<input type="text" name="name">
<br />
comment: <br />
<textarea name="comment" rows="2" cols="50"></textarea>
<br />
<input type="submit" value="submit !">
</form>
<br /></body></html>
<?php
$user = '';
$password = '';
$db = 'comments';
$host = 'localhost';
$conn= mysqli_connect( $host, "", "", $db);
$sql = "SELECT * FROM comments" ;
$result=mysqli_query($conn,$sql);
    if (!$conn) {
        echo "Unable to connect to DB: " . mysqli_error();
        exit;
    }
    else
  {
      while($row = mysqli_fetch_assoc($result))
   {
    $name=$row['name'];
    $comment=$row['comment'];
    echo'<font size="4" color="purple"> <b> '.$name. ' </b>: '.$comment.' </font> <hr></div> ';
       
    }
   }