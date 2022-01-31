<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>array</h1>
    <?php
    echo "<h2>\$num = array(\"1\",2,3,\"4\",\"5\");</h2>";
    
    $num = array("1",2,3,"4","5");
    array_push($num, 6,7); //push new element in the back 
    print_r($num);
    echo "<br>";
    $i = 0 ;
    while($i<count($num)){
        echo var_dump($num[$i])."<br>";
        $i++;
    }
    ?>
</body>
</html>