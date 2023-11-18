<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php
include('includes/metricas.php');
$title = 'Registro';
$inicio = 'current-menu-item';
include('includes/head.php');
?>

<body class="stretched">
<?php 
    include('includes/body-metricas.php');
    ?>
  <div id="wrapper">
    <?php
        include('includes/header.php');
        include('modules/registro.php');
        include('includes/footer.php');
        include('includes/redes.php');
        ?>
  </div>
  <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>