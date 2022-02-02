<?php
$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');

$sql = "SELECT * FROM topic";
        $result = mysqli_query($conn, $sql);
        $list = '';
        while($row = mysqli_fetch_array($result)){ //NULL == false in php
            $list = $list."<li><a href =\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
        }

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>php_mysql_test</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <?=$list?> <!--this is same as <?php echo $list; ?>--> 
    </ol>
    <a href="create.php">create</a>
    <h2>welcome</h2>
    i am JEE
    
</body>
</html>