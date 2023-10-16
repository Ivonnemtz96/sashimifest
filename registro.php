<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php
$title = 'Inicio';
$inicio = 'current-menu-item';
include('includes/head.php');
?>

<body class="stretched">

  <div id="wrapper">
    <?php
        include('includes/header.php');
        include('modules/registro.php');
        include('includes/footer.php');
        ?>
  </div>
  <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>