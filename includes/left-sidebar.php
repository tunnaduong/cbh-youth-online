<!-- Left side bar -->
<div class="w-60 p-5 h-min sticky top-[48px]" id="left-sidebar">
    <p class="text-[10px] font-semibold text-[#6b6b6b] pb-2.5 ml-1.5">
        MENU
    </p>
    <button onclick="location.href='/'" class="mb-2 text-[11px] font-semibold <?php echo $active == "bangtin" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active == "bangtin" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
        <div class="<?php echo $active == "bangtin" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active == "bangtin" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
            <ion-icon name="home" style="zoom: 0.9"></ion-icon>
        </div>
        <div class="<?php echo $active == "bangtin" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Bảng tin</div>
    </button>
    <button onclick="location.href='/forum'" class="mb-2 text-[11px] font-semibold <?php echo $active == "diendan" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active == "diendan" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
        <div class="<?php echo $active == "diendan" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active == "diendan" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
            <ion-icon name="chatbox-ellipses" style="zoom: 0.9"></ion-icon>
        </div>
        <div class="<?php echo $active == "diendan" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Diễn đàn</div>
    </button>
    <button onclick="location.href='/recordings'" class="mb-2 text-[11px] font-semibold <?php echo $active == "loalon" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active == "loalon" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
        <div class="<?php echo $active == "loalon" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active == "loalon" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
            <ion-icon name="megaphone" style="zoom: 0.9"></ion-icon>
        </div>
        <div class="<?php echo $active == "loalon" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Loa lớn</div>
    </button>
    <button onclick="location.href='/youth-news'" class="mb-2 text-[11px] font-semibold <?php echo $active == "tintucdoan" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active == "tintucdoan" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
        <div class="<?php echo $active == "tintucdoan" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active == "tintucdoan" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
            <ion-icon name="newspaper" style="zoom: 0.9"></ion-icon>
        </div>
        <div class="<?php echo $active == "tintucdoan" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Tin tức Đoàn</div>
    </button>
    <button onclick="location.href='/saved'" class="mb-2 text-[11px] font-semibold <?php echo $active == "daluu" ? "bg-[#E4EEE3]" : "" ?> flex items-center w-[100%] text-left <?php echo $active == "daluu" ? "text-[#319527]" : "text-[#CACACA]" ?> rounded-lg p-1.5">
        <div class="<?php echo $active == "daluu" ? "bg-[#CDEBCA]" : "" ?> rounded-md w-[19px] h-[19px] mr-2 <?php echo $active == "daluu" ? "border-[#BFE5BB]" : "border-[#ECECEC]" ?> border-[1.5px] flex items-center justify-center" style="zoom: 1.2">
            <ion-icon name="bookmark" style="zoom: 0.9"></ion-icon>
        </div>
        <div class="<?php echo $active == "daluu" ? "text-[#319527]" : "text-[#6B6B6B]" ?>">Đã lưu</div>
    </button>
</div>