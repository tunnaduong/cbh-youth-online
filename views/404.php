<!DOCTYPE html>
<html lang="en">
<?php
$rel = isset($_GET["rel"]) ? $_GET["rel"] : null;

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
    <div class="flex flex-1 items-center justify-center" style="display: block;position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
      <center>
        <img src="/static/img/404.svg" alt="404" class="w-[80px] h-[80px] mb-2">
        <h4 class="font-bold text-gray-500 text-[14px]">Bạn hiện không xem được nội dung này</h4>
        <p class="text-[12px] text-gray-500">Lỗi này thường do chủ sở hữu chỉ chia sẻ nội dung với một<br>nhóm nhỏ, thay đổi người được xem hoặc đã xóa nội dung.</p>
        <button onclick href='/' class="bg-[#319528] text-white text-[12px] font-semibold rounded-[5px] py-[5px] px-6 mt-3">Đi tới Bảng tin</button>
        <br>
        <a href="#" onclick="history.back()" class="text-[#319528] text-[12px] mt-2 inline-block font-semibold">Quay lại</a>
      </center>
    </div>
    <?php if ($rel != "page") {
      echo "</div>";
    } ?>
    <?php include_once("./includes/footer.php"); ?>