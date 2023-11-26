<!-- Left side bar -->
<div class="w-60 p-5 h-min sticky top-[48px]" id="left-sidebar">
    <p class="text-[10px] font-semibold text-[#6b6b6b] pb-2.5 ml-1.5">
        MENU
    </p>
    <?php
    if (isset($active) && $active == "congdong") {
    ?>
        <a href="/" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "bangtin" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "bangtin" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "bangtin" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "bangtin" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="home" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "bangtin" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Bảng tin</div>
        </a>
        <a href="/forum" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "diendan" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "diendan" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "diendan" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "diendan" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="chatbox-ellipses" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "diendan" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Diễn đàn</div>
        </a>
        <a href="/recordings" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "loalon" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "loalon" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "loalon" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "loalon" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="megaphone" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "loalon" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Loa lớn</div>
        </a>
        <a href="/youth-news" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "tintucdoan" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "tintucdoan" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "tintucdoan" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "tintucdoan" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="newspaper" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "tintucdoan" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Tin tức Đoàn</div>
        </a>
        <a href="/saved" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "daluu" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "daluu" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "daluu" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "daluu" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="bookmark" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "daluu" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Đã lưu</div>
        </a>
    <?php
    } else if (isset($active) && $active == "baocao") {
    ?>
        <a href="/report/class" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "tapthelop" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "tapthelop" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "tapthelop" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "tapthelop" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="people" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "tapthelop" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Báo cáo tập thể lớp</div>
        </a>
        <a href="/report/student" class="mb-2 text-[11px] font-semibold <?php echo $active2 == "hocsinh" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active2 == "hocsinh" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
            <div class="<?php echo $active2 == "hocsinh" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active2 == "hocsinh" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
                <ion-icon name="person" style="zoom: 0.9"></ion-icon>
            </div>
            <div class="<?php echo $active2 == "hocsinh" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Báo cáo học sinh</div>
        </a>

    <?php
    }
    ?>
</div>