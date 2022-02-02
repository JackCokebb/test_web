<?php
$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');
$filtered_arr = array(
    'title'=>mysqli_real_escape_string($conn,$_POST['title']),
    'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);

$sql="
    INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$filtered_arr['title']}',
            '{$filtered_arr['description']}',
            NOW()
        )
";

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