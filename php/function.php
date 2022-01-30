<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = " random string askdn kasjn kdjanskjdskjnd kajsnd 
    kjasndaksjdnakjwndkqjnk ndkj naskjdn kajsnd qwjdnkjandjnwdlandin qjwnd
     kjasn jankjdnjk ankj nskjdn kajwneqoiwrjtuhgfdjhfbkjsdn oiqjwdoiqjwdpoas
     jdklsnmcbnsnmdcisdhjoijqw";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <!-- new line to br tag -->
    <?php
    echo nl2br($str);
    ?>
    
</body>
</html>