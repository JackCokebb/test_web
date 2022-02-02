<?php
var_dump($_POST);
$sql="
    INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW()
        )
";

$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');

$res = mysqli_query($conn, $sql);
if(!$res){
    echo "error occured. please contact to admin";
    //error log will be written in apache dir
    error_log(mysqli_error($conn));
}
else{
    echo "success <a href='index.php'>go back to main</a>";

}
?>