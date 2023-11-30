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
                <div class="flex flex-col">
                    <span class="text-[11px] font-semibold ml-2">Hoàng Phát</span>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>