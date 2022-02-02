<?php
$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){ //NULL == false in php
    $filtered_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href =\"index.php?id={$row['id']}\">{$filtered_title}</a></li>";
}

if(isset($_GET['id'])){
    //protecting from sql injection
    $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article = array(
        'title'=>htmlspecialchars($row['title']),
        'description'=>htmlspecialchars($row['description'])
    );
}else{
    $article = array(
        'title'=>'Welcome!',
        'description'=>'I am JEE'
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php_mysql_test</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <!--this is same as <?php echo $list; ?>--> 
        <?=$list?> 
    </ol>
    <a href="create.php">create</a>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
    
</body>
</html>