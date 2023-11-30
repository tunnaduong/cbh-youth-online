<!-- Right side bar -->
<div class="w-60 p-5 h-min sticky top-[48px]" id="right-sidebar">
    <?php
    if (isset($btn) && $btn == "ghiam") {
    ?>
        <button id="openModalBtn" onclick="modal.show()" class="mb-2 text-[11px] font-semibold bg-[#319527] flex items-center justify-center w-[100%] text-left leading-3 text-white rounded-lg p-1.5">
            <ion-icon name="mic" class="text-[16px] mr-1"></ion-icon>
            Đăng ghi âm mới
        </button>
    <?php
    } else {
    ?>
        <button id="openModalBtn" class="mb-2 text-[11px] font-semibold bg-[#319527] flex items-center justify-center w-[100%] text-left leading-3 text-white rounded-lg p-1.5">
            <ion-icon name="add-outline" class="text-[16px] mr-1"></ion-icon>
            Tạo bài viết mới
        </button>
    <?php
    }
    ?>
    <div class="bg-white text-[11px] p-2.5 mt-4 rounded-lg long-shadow">
        <span class="font-bold text-[#6B6B6B] block">Xếp hạng tháng</span>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K63</span>
            <span class="flex flex-1 ml-1.5 font-semibold">12 Nga</span>
            <span class="mr-1.5 text-[#C1C1C1]">-12 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K64</span>
            <span class="flex flex-1 ml-1.5 font-semibold">11 Toán</span>
            <span class="mr-1.5 text-[#C1C1C1]">-6 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K65</span>
            <span class="flex flex-1 ml-1.5 font-semibold">10 Sử</span>
            <span class="mr-1.5 text-[#C1C1C1]">-18 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K9</span>
            <span class="flex flex-1 ml-1.5 font-semibold">9A1</span>
            <span class="mr-1.5 text-[#C1C1C1]">-4 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K10</span>
            <span class="flex flex-1 ml-1.5 font-semibold">8A2</span>
            <span class="mr-1.5 text-[#C1C1C1]">-6 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K11</span>
            <span class="flex flex-1 ml-1.5 font-semibold">7A1</span>
            <span class="mr-1.5 text-[#C1C1C1]">-10 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <div class="flex flex-row items-center mt-2">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K12</span>
            <span class="flex flex-1 ml-1.5 font-semibold">6A2</span>
            <span class="mr-1.5 text-[#C1C1C1]">-14 điểm</span>
            <ion-icon name="trophy" class="text-[15px] text-yellow-400"></ion-icon>
        </div>
        <hr class="my-2" />
        <div class="flex flex-row items-center">
            <span class="w-6 h-6 text-[10px] text-white bg-gray-300 rounded-full flex items-center justify-center">K63</span>
            <span class="flex flex-1 ml-1.5 font-semibold">Lớp bạn</span>
            <span class="mr-1.5 text-[#C1C1C1]">-35 điểm</span>
            <span class="text-green-500 font-bold">#3</span>
        </div>
    </div>
    <div class="flex flex-row text-[10px] font-semibold p-3 text-[#BCBCBC]">
        <div class="flex flex-1 flex-col gap-y-0.5">
            <a href="#" class="w-fit">Hỗ trợ</a>
            <a href="#" class="w-fit">Liên hệ</a>
            <a href="#" class="w-fit">Blog</a>
            <a href="#" class="w-fit">Quảng cáo</a>
        </div>
        <div class="flex flex-1 flex-col ml-5 gap-y-0.5">
            <a href="#" class="w-fit">Giới thiệu</a>
            <a href="#" class="w-fit">Việc làm</a>
            <a href="#" class="w-fit">Điều khoản</a>
            <a href="#" class="w-fit">Quyền riêng tư</a>
        </div>
    </div>
    <p class="text-[8.5px] text-center text-[#BCBCBC]">
        Fatties Software © 2022
    </p>
</div>