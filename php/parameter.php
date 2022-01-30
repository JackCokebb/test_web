<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- name is parameter that can be used on url -->
    <!-- ex) localhost/parameter.php?name=Jee -->
    hello Mr. <?php echo $_GET['name']; ?> </br>
    you are live in <?php echo $_GET['address'];?>
</body>
</html>