<!DOCTYPE html>
<html lang="en">
<?php
include_once './includes/head.php';
?>

<body class="bg-[#F8F8F8] mt-12">
  <?php
  $active = "congdong";
  include_once './includes/navbar.php';
  ?>
  <!-- Main body -->
  <div class="flex flex-row">
    <!-- Left side bar -->
    <?php
    $active = "daluu";
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
  <script src="./static/js/script.js"></script>
</body>

</html>