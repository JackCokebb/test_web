<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index1.php">WEB</a></h1>
    <ol>
        <li><a href = "index1.php?id=HTML">HTML</a></li>
        <li><a href = "index1.php?id=CSS">CSS</a></li>
        <li><a href = "index1.php?id=JavaScript">Javascript</a></li>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])){
        echo $_GET['id'];}
        else{
           echo "Welcome!";
        }
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
    }
    else{
        echo "i am php";
    }
    ?>

</body>
</html>