<!DOCTYPE html>
<head>
</head><body>
<form action="comment_post.php" name="comments" method="post" enctype="multipart/form-data">
Name:
<br />
<input type="text" name="name">
<br />
Comment: <br />
<textarea name="comment" rows="2" cols="50"></textarea>
<br />
<input type="submit" value="Submit">
</form>
<br /></body></html>
<?php

$mysqli = new mysqli("localhost", "root", "", "comments");
// $a = ;
$result = $mysqli->query("SELECT * FROM comments")) 

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Name"];
        $field2name = $row["Comment"];
        
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();

?>
