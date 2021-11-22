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
        case "galerie":
            include_once "import/galerie.php";
            break;
            case "admin":
                include_once "import/admin.php";
                break;

        default:
            include_once "import/accueil.php";
    }
}