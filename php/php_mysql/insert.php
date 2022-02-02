<?php
$conn = mysqli_connect('localhost', 'jee', '1234','php_mysql_db');
$res = mysqli_query($conn,"
    INSERT INTO topic
        (title,description,created)
        VALUE(
            'MySQL',
            'Mysql test 123',
            NOW()
        )
")
?>