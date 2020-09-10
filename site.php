<?php 

if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'home': 
        include 'home.php';
        break;

        case 'pictures':
        include 'pictures.php';
        break;

        case 'login':
        include 'login.php';
        break;
            
        case 'new':
        include 'new.php';
        break;
            
        case 'vids':
        include 'vids.php';
        break;

        default: include 'home.php';
        } 
    } else {
    include 'home.php';
}

?>