<?php

require_once "config.php";
if (!isset($_GET['pages'])) {
    include_once "import/accueil.php";
} else {
    switch ($_GET['pages']) {
        case "cv":
            include_once "import/curiculum.php";
            break;
        case "tuto":
            include_once "import/tutoriel.php";
            break;
        case "liens":
            include_once "import/liens.php";
            break;
        case "contact":
            include_once "import/contact.php";
            break;
        case "galeries":
            include_once "import/galeries.php";
            break;

        default:
            include_once "import/accueil.php";
    }
}