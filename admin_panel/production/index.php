<?php

require_once '../inc/function.php';
include("interface/header.php");
if (isset($_SESSION['admin'])) {
    if (isset($_GET['page'])) :
        $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
    endif;
    if (isset($page)) {
        if (file_exists($page)) $page = "index";
        include("pages/" . $page . ".php");
    } else {
        include("pages/index.php");
    }
    include("interface/footer.php");
} else {
    header('Location : ../index.php');
    die();
}
