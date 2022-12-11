<?php

function loadView($page)
{
    include_once "./view/" . $page . ".php";
}

function loadComponent($fileName, $prefix = null)
{
    $filePath = "./view/components/" . $fileName . ".php";
    if (isset($prefix)) {
        $filePath = "./view/components/" . $prefix . "/" . $fileName . ".php";
    }
   include_once $filePath;
}

function loadFile($filePath){
   require_once $filePath.".php";
}
?>