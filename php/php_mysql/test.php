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