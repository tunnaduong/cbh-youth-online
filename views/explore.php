<!DOCTYPE html>
<html lang="en">
<?php
$rel = isset($_GET["rel"]) ? $_GET["rel"] : null;

$active = "khampha";
if ($rel != "page") {
  include_once './includes/head.php';
?>

  <body class="bg-[#F8F8F8] mt-12">
    <?php
    include_once './includes/navbar.php';
    ?>
    <div id="load">
    <?php
  }
    ?>
    <!-- Main body -->
    <div class="flex flex-row">
      <!-- Left side bar -->
      <?php
      $active2 = "tintucdoan";
      include_once './includes/left-sidebar.php';
      ?>
      <!-- Main body -->
      <div class="flex flex-1 p-5 items-center flex-col">

      </div>
      <!-- Right side bar -->
      <?php
      include_once './includes/right-sidebar.php';
      ?>
    </div>
    <?php if ($rel != "page") {
      echo "</div>";
    } ?>
    <?php include_once("./includes/footer.php"); ?>