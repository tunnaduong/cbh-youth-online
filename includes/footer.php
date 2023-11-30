<?php
$type = isset($type) ? $type : null;
?>
<div id="myModal" class="modal">
    <div class="modal-content">
        <div>
            <div class="flex flex-row justify-center items-center p-[12px]">
                <h1 class="text-[14px] font-bold text-center"><?php echo $type != "ghiam" ? "Tạo bài viết" : "Đăng ghi âm" ?></h1>
            </div>
            <div class="relative">
                <span class="close w-6 h-6 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center absolute right-[10px] -top-[33px]"><ion-icon name="close-outline"></ion-icon></span>
            </div>
            <hr>
            <div class="p-[12px] flex flex-row items-center">
                <img src="/static/img/hoangphat.jpeg" alt="hoangphat's avatar" class="w-7 h-7 rounded-full">
                <div class="flex flex-col ml-2">
                    <span class="text-[11px] font-semibold mb-0.5">Hoàng Phát</span>
                    <button class="flex items-center bg-gray-200 rounded-md px-1.5 py-0.5 cursor-pointer">
                        <ion-icon name="earth" class="text-[10px] mt-[1px] mr-0.5"></ion-icon>
                        <span class="text-[10px] font-semibold">Công khai</span>
                        <ion-icon name="caret-down-outline" class="text-[9px] mt-[1px] ml-0.5"></ion-icon>
                    </button>
                </div>
            </div>
            <textarea name="status" id="status" placeholder="Phát ơi, bạn đang nghĩ gì thế?" class="flex flex-1 box-border w-[100%] px-[12px] pb-[12px] resize-none" rows="2"></textarea>
            <div class="px-[12px] pb-[12px]">
                <button disabled class="bg-[#e4e6eb] w-[100%] p-1 text-[#bdc1c5] text-[11px] font-semibold rounded-md">Đăng</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>