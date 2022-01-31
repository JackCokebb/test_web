<?php
require("lib/print.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    print_title()?>
    </title>
</head>
<body>
    <h1><a href="index1.php">WEB</a></h1>
    
    <ol>
        <?php
print_list();
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){
     ?>
    <a href="update.php?id=<?php echo $_GET['id'] ?>">update</a>
    <?php } ?>
    <form action="create_process.php" method ="post">
        <p><input type="text" name="title" placeholder = "title"></p>
        <p><textarea name="description" placeholder="description"></textarea></p>
        <p><input type="submit"></p>
        
    </form>

</body>
</html>