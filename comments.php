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
$user = 'root';
$password = '';
$db = 'comments';
$mysqli = new mysqli("localhost", $user, $password, $db);
$query = "SELECT * FROM table_name";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
