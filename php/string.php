<!doctype html>
<html>
    <body>
        <h1>string test</h1>
    <?php
    echo 'hello world!';
    echo '</br>';
    echo "hello world!";
    ?>   
    <h2>concatenation operator</h2>
    <?php
    echo "hello "."world!";
    ?>
    <h2>string length function</h2>
    <?php
    $str = 'abc def g';
    echo $str." = length => ".strlen($str);
    //echo " = length => ";
    //echo strlen($str);
    //echo ""
    ?>
    </body>

</html>