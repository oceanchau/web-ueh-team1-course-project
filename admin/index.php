<?php
require "./utils/query_parrams.php";
require "./configs/connect.php";
require "./utils/get_hyper_link.php";
require "./utils/load_file.php";
require "./helpers/const.php";

session_start();

if (!isset($_SESSION['user'])) {
  require_once("view/layout/authenLayout.php");
  require_once('view/pages/login.php');

} else {

  $pages = getPages();
  $controllerName = "";

  $controllerName = $pages == null ? "app_controller" : $pages . "_controller";

  include "./controllers/" . $controllerName . ".php";
  require_once("view/layout/mainLayout.php");
}
?>