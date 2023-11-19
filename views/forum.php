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
    $active = "diendan";
    include_once './includes/left-sidebar.php';
    ?>
    <!-- Main body -->
    <div class="flex flex-1 p-5 items-center flex-col">
      <div class="max-w-lg w-[100%]">
        <p class="text-[13px] font-semibold px-4 mb-2">HỌC TẬP</p>
        <div class="bg-white long-shadow rounded-lg">
          <div class="flex flex-row items-center">
            <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
            <div class="flex flex-col flex-1">
              <a href="#" class="text-[#319528] text-[12px] font-bold ">Trung học phổ thông</a>
              <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
            </div>
            <div class="flex flex-1 bg-[#E7FFE4]">
              <span class="text-[10px]">Mới nhất: </span>
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