<!DOCTYPE html>
<html lang="en">
<?php
$rel = isset($_GET["rel"]) ? $_GET["rel"] : null;

$active = "baocao";
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
            $active2 = "tapthelop";
            include_once './includes/left-sidebar.php';
            ?>
            <!-- Main body -->
            <div class="flex flex-1 p-5 items-center flex-col">
                <div class="max-w-lg w-[100%] long-shadow mb-4 rounded-md bg-white">
                    <div class="flex justify-center my-3 mt-5">
                        <div class="w-16 h-16 rounded-full bg-[#319527] flex items-center justify-center text-white text-[40px]"><ion-icon name="checkmark-outline"></ion-icon></div>
                    </div>
                    <h1 class="text-center font-semibold my-3">Gửi báo cáo thành công!</h1>
                    <div class="flex flex-row justify-center items-center mb-7">
                        <div class="flex flex-col items-center">
                            <div class="w-6 h-6 rounded-full bg-[#319527] flex items-center justify-center text-white">1</div>
                            <span class="text-[10px] mt-0.5 font-semibold text-center">Điền thông tin</span>
                        </div>
                        <div class="w-[84px] h-[0.7px] bg-gray-500 mb-4 -ml-3 "></div>
                        <div class="flex flex-col items-center">
                            <div class="w-6 h-6 rounded-full bg-[#319527] flex items-center justify-center text-white">2</div>
                            <span class="text-[10px] mt-0.5 font-semibold text-center">Xác nhận</span>
                        </div>
                        <div class="w-[84px] h-[0.7px] bg-gray-500 mb-4 -mr-1.5"></div>
                        <div class="flex flex-col items-center">
                            <div class="w-6 h-6 rounded-full bg-[#319527] flex items-center justify-center text-white">3</div>
                            <span class="text-[10px] mt-0.5 font-semibold text-center">Gửi báo cáo</span>
                        </div>
                    </div>
                    <center>
                        <button href="/report/class" class="text-[11px] font-semibold bg-black mb-5 text-white h-7 px-8 rounded-full">Quay lại</button>
                    </center>
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
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <?php include_once("./includes/footer.php"); ?>