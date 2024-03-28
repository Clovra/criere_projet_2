<?php
require ("view/header.php");
require('controler/controler.php');

if (isset($_GET["uc"])){
    $action = $_GET["uc"];
   
}
else{
    $action = "home";
}

// les differentes pages et les fonctions qu'elles declenchent

    switch ($action) {
        case "select":
            routeur1();
            break;
        case "equarissage":
            routeur2();
            break;
        case "home":
            routeur3();
            break;
        case "association":
            routeur4();
            break;
        case "bloquer":
            routeur5();
            break;
        case "deblock":
            routeur6();
            break;
        case "mail":
            routeur7();
            break;
        case "xml":
            routeur8();
            break;
        case "graph":
            routeur9();
            break;
        case "espece":
            routeur10();
            break;
        case "batal":
            routeur11();
            break;
        case "ajoutasso":
            routeur12();
            break;
        case "ajoutacheteur":
            routeur13();
            break;
        case "listelot":
            routeur14();
            break;
    }


?>