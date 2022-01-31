<?php
unlink("data/".basename($_POST['id'])); //restricting riddable files to files in data folder by using basename
header('Location: /index1.php'); //redirection to Location
?>
