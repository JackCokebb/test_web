<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <h2>basic</h2>
    <?php
    function basic(){
        print("basic function<br>");
    }
    basic();
    basic();
    ?>
    <h2>parameter &amp; arguments </h2>
    <?php
    function sum($left, $right){
        print($left+$right);
        echo "<br>";
    }

    echo "<h3>sum(2,4)</h3>";
    sum(2,4);
    ?>
    <h2>return</h2>
    <?php
    function sum2($left, $right){
        return $left+$right;
    }
    echo "print(sum2(2,4))<br>";
    print(sum2(2,4));
    ?>

</body>
</html>