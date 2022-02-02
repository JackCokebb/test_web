<?php
$conn = mysqli_connect('localhost', 'jee', '1234', 'php_mysql_db');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){ //NULL == false in php
    $list = $list."<li><a href =\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

if(isset($_GET['id'])){
    //protecting from sql injection
    $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article = array(
        'title'=>$row['title'],
        'description'=>$row['description']
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
    <form action="create_process.php" method="POST">
        <p>
            <input type="text" name="title" placeholder="title">
        </p>
        <p>
            <textarea name="description" placeholder="description">
            
            </textarea>
        </p>
        <p>
            <input type ="submit">
        </p>
    </form>
    
</body>
</html>