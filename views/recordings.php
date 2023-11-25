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
    $active = "loalon";
    include_once './includes/left-sidebar.php';
    ?>
    <!-- Main body -->
    <div class="flex flex-1 p-5 items-center flex-col">
      <!-- Section 1 -->
      <div class="max-w-lg w-[100%] mb-6 flex flex-row rounded-md bg-white">
        <div class="flex items-center justify-center mr-2">
          <img src="/static/img/soundwaves.png" alt="Soundwaves" class="w-14">
          <img class="absolute w-6" src="/static/img/play.png" alt="Play button">
        </div>
        <div class="flex flex-col flex-1">
          <div class="flex flex-row flex-1 items-center mt-[2px]">
            <h1 class="flex-1 text-[14.5px] font-semibold">Thông báo Đoàn ngày 29/03/2022</h1>
            <span class="text-[10px] mr-3 text-gray-500">03:22</span>
          </div>
          <div class="flex flex-1 items-center text-[10px] text-gray-500">
            <img src="/static/img/cbh.jpeg" alt="CBH" class="mr-1.5 w-5 h-5 rounded-full">
            <span>Đăng bởi <span class="font-semibold text-[#319527]">Đoàn Trường Biên Hòa</span></span>
            <span class="mb-2 mx-0.5 text-sm text-gray-500">.</span>
            <span>2 ngày trước</span>
            <div class="flex items-center flex-1 flex-row-reverse mr-2.5">
              <span>46</span>
              <ion-icon name="eye-outline"></ion-icon>
              <span>05+</span>
              <ion-icon name="chatbox-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right side bar -->
    <?php
    include_once './includes/right-sidebar.php';
    ?>
  </div>
  <script src="./static/js/script.js"></script>
</body>

</html>