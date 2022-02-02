<?php
$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');
//1 row
$select_sql="
    SELECT * FROM topic WHERE id = 2; 
"; 
$result = mysqli_query($conn,$select_sql);
$row = mysqli_fetch_array($result);
print_r($row);

// all row
$select_sql="
    SELECT * FROM topic; 
"; 
$result = mysqli_query($conn,$select_sql);
while(($row = mysqli_fetch_array($result)) !==NULL){
    print_r($row);
    echo "<br>";
}
echo "done";


?>