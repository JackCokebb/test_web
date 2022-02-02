<?php
$conn = mysqli_connect('localhost', 'jee', '1234','php_mysql_db');
$sql = "
INSERT INTO topic
    (title,description,created)
    VALUE(
        'MySQL',
        'Mysql test 123',
        NOW()
    )";
$res = mysqli_query($conn,$sql);
if(!$res){
    printf("Error message: %s\n", mysqli_error($conn)); //recommand to save this log in file because of security issue
}

?>