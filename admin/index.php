<?php
require "./controllers/app_controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/styles/core.css" />
  <link rel="stylesheet" href="./assets/styles/dashboard.css" />

  <!-- icon -->
  <link rel="stylesheet" href="./assets/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <title>
    <?php echo TITLE; ?>
  </title>
</head>

<body>
  <main class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
        <?php include_once "./view/components/admin-menu.php"; ?>
      </aside>

      <div class="layout-page">
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme">
          <?php include_once "./view/components/header/admin-navbar.php"; ?>
        </nav>
        <div class="content-wrapper">

          <div class="container-xxl flex-grow-1 container-p-y">
            <?php
            if (isset($pages)) {
              include_once "./view/" . $pages . ".php";
            } else {
              include_once "./view/components/admin-content.php";
            }
            ?>
          </div>

        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>