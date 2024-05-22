<?php
include 'config.php';
session_start();

if (!isset($_SESSION['preloader_displayed'])) {
    $_SESSION['preloader_displayed'] = true;
    $display_preloader = true;
} else {
    $display_preloader = false;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---  <title>FreeDMR Network</title> --->
  <title><?php echo $config['DASHBOARD']['DASHTITLE']; ?></title>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta name="description" content="<?php echo $config['DASHBOARD']['DASHTITLE']; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/adminlte/css/adminlte.min.css">
  <style>
    @media (min-width: 768px) {
      .table-responsive {
        overflow-x: auto;
      }
    }

    @media (max-width: 767px) {
      .table-responsive {
        zoom: 0.5;
      }
    }
  </style>
</head>

<body class="hold-transition dark-mode layout-top-nav layout-navbar-fixed text-sm layout-footer-fixed" style="zoom: 85%;">
  <div class="wrapper">
    <?php if ($display_preloader): ?>
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="img/Logo_mini.png" alt="" height="60" width="60">
    </div>
    <?php endif; ?>
    <?php include 'include/navbar.php';?>
    <div class="content-wrapper"<?php if ($config['DASHBOARD']['BACKGROUND']) echo ' style="background-image: url(\'img/bk.jpg\'); background-attachment: fixed;"'; ?>>
      <div class="content-header">
        <div class="container">
          <div class="row mb-2 justify-content-center">
            <div class="col-sm-auto">
		<br>
		<center><img height="250px" width="1125px" src="img/banner.jpg" alt="" />
                <br>
                <br>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <?php
          $page = isset($_GET['p']) ? $_GET['p'] : 'home';
              include 'include/' . $page . '.php';
        ?>
        <div>
          <br>
        </div>
      </div>
    </div>
    <footer class="main-footer text-sm">
      <?php include 'include/footer.php';?>
    </footer>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="scripts/mode.js"></script>
  <script src="plugins/adminlte/js/adminlte.min.js"></script>
  <script src="scripts/monitor.js"></script>
</body>

</html>
