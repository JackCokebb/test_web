<?php
//modulize
function print_title(){
    if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);}
    else{
        echo "Welcome!";
    }
}

function print_description(){
    if(isset($_GET['id'])){
        $basename = basename($_GET['id']); //cannot reach to parent directory
        echo htmlspecialchars(file_get_contents("data/".$basename));
    }
    else{
        echo "i am JEE";
    }
}
function print_list(){
    
    $dir = "./data";
    $data_dir = scandir($dir);
    foreach($data_dir as &$title){
        $title_ = htmlspecialchars($title);
        if($title != "." && $title !=".."){
            echo "<li><a href=\"/index1.php?id=$title_\">$title_</a></li>\n";
        }
    }
    
}
?>