<!DOCTYPE html>
<html lang="en">
<?php
$rel = isset($_GET["rel"]) ? $_GET["rel"] : null;

if ($rel != "page") {
  include_once './includes/head.php';
?>

  <body class="bg-[#F8F8F8] mt-12">
    <div id="load">
    <?php
  }
  $active = "congdong";
  include_once './includes/navbar.php';
    ?>
    <!-- Main body -->
    <div class="flex flex-row">
      <!-- Left side bar -->
      <?php
      $active2 = "diendan";
      include_once './includes/left-sidebar.php';
      ?>
      <!-- Main body -->
      <div class="flex flex-1 p-5 items-center flex-col">
        <!-- Section 1 -->
        <div class="max-w-lg w-[100%] mb-6">
          <p class="text-[13px] font-semibold px-4 mb-2">HỌC TẬP</p>
          <div class="bg-white long-shadow rounded-lg">
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Trung học phổ thông</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">Cách khoanh bừa mà vẫn trúng 100% uy tín</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Hoàng Phát</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Trung học cơ sở</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">14</span> Bình luận: <span class="text-black font-semibold">4</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">Cho em hỏi học toán như nào để giỏi hơn ạ?</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Nguyễn Đặng Hải</span>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Tiếng Anh</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">9</span> Bình luận: <span class="text-black font-semibold">2</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">[THÔNG BÁO] Tổ chức cuộc thi Tiếng Anh</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Admin</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Ebook - Giáo trình</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">47</span> Bình luận: <span class="text-black font-semibold">36</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">[CHIA SẺ] 100 ebook miễn phí dành cho học sinh, sinh viên</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Dương Tùng Anh</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="max-w-lg w-[100%]">
          <p class="text-[13px] font-semibold px-4 mb-2">GIẢI TRÍ - XÃ HỘI</p>
          <div class="bg-white long-shadow rounded-lg">
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Âm nhạc</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">List nhạc EDM cực xung</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Đức Duy N.</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Hình ảnh đẹp</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">100 hình ảnh từ cuộc sống</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Anh em ơi</span>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Thư giãn - Đố vui</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">Tuyển tập ảnh gái xinh</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">MOD4R</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
              </div>
            </div>
            <hr>
            <div class="flex flex-row items-center">
              <ion-icon name="chatbubbles" class="text-[#319528] text-[23px] p-4"></ion-icon>
              <div class="flex flex-col flex-1">
                <a href="#" class="text-[#319528] text-[12px] font-bold w-fit">Thế giới Game</a>
                <span class="text-[10px] text-gray-500">Bài viết: <span class="mr-1 font-semibold text-black">28</span> Bình luận: <span class="text-black font-semibold">10</span></span>
              </div>
              <div style="max-width: calc(42%);" class="flex-1 bg-[#E7FFE4] p-1 px-2 mr-2 rounded-md">
                <div class="leading-3 flex">
                  <span class="text-[10px] whitespace-nowrap mr-1">Mới nhất:</span>
                  <span class="text-[10px] text-[#319528] inline-block leading-3 text-ellipsis whitespace-nowrap overflow-hidden">[REVIEW] GTA V PC</span>
                </div>
                <div class="leading-3 flex items-center mt-1 text-[#319528]">
                  <span class="text-[10px]">Dương Tùng Anh</span>
                  <ion-icon name="checkmark-circle" class="text-[11px] leading-5 ml-0.5"></ion-icon>
                  <span class="text-[10px] text-black">, 1 ngày trước</span>
                </div>
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
    <?php if ($rel != "page") {
      echo "</div>";
    } ?>
    <?php include_once("./includes/footer.php"); ?>