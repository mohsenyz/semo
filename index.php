<?php
include 'base/includes/core.php';
if(!empty($_GET['page'])){
    $page = $_GET['page'];
    if($_GET['page']==='admin'){
        if(!isset($_GET['tab'])){
            $tab = 'home';
        }else {
            $tab = $_GET['tab'];
        }
        include 'base/pages/admin/admin_page_' . $tab . '.php';
    }elseif ($_GET['page']==='ptd') {
        if(!empty($_GET['tab'])){
            $tab = $_GET['tab'];
            include 'base/pages/page_ptd.php';
        }  else {
            header('Location: ' . $addres);
        }
    } else {
        if (file_exists('base/pages/page_' . $page . '.php')) {
            include 'base/pages/page_' . $page . '.php';
        }  else {
            $page = 'home';
            include 'base/pages/page_' . $page . '.php';
        }
    }
}  else {
    $page = 'home';
    include 'base/pages/page_' . $page . '.php';
}