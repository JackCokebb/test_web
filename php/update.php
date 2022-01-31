<?php
function print_title(){
    if(isset($_GET['id'])){
    echo $_GET['id'];}
    else{
        echo "Welcome!";
    }
}

function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }
    else{
        echo "i am php";
    }
}
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
        $dir = "./data";
        $data_dir = scandir($dir);
        foreach($data_dir as &$title){
            if($title != "." && $title !=".."){
                echo "<li><a href=\"/index1.php?id=$title\">$title</a></li>\n";
            }
        }
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){
     ?>
    <a href="update.php?id=<?php echo $_GET['id'] ?>">update</a>
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
    print_description();
    ?>
    <form action="update_process.php" method ="post">
        <input type = "hidden" name= "old_title" value ="<?=$_GET['id']?>">
        <p><input type="text" name="title" placeholder = "title" value =<?php print_title(); ?>></p>
        <p><textarea name="description" placeholder="description"><?php print_description(); ?></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>