<?php

function redirection($page){
    $pages = array();
    $root = '/projet/';
    $pages['accueil'] = 'index.html';
    $pages['liste'] = 'pages/listelivre.php';
    header("location: $root$pages[$page]");
}

?>