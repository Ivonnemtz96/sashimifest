<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php
$title = 'Inicio';
include('includes/head.php');
?>

<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
<body class="stretched">

  <div id="wrapper">
    <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        include('includes/redes.php');
        ?>
  </div>
  <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>