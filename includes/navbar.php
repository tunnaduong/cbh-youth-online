<!-- Navbar -->
<nav class="px-4 py-2.5 fixed w-[100%] overflow-hidden top-0 bg-white shadow-md leading-[0] flex justify-between">
    <div class="flex flex-row">
        <!-- Logo -->
        <a id="logo" href="/" class="inline-block">
            <div class="flex gap-x-1 items-center">
                <img src="/static/img/logo.png" alt="CYO's Logo" class="w-7 h-7" />
                <div class="text-[11px] font-light text-[#319527] leading-3">
                    <h1>Thanh niên</h1>
                    <h1 class="font-bold">Chuyên Biên Hòa Online</h1>
                </div>
            </div>
        </a>
        <!-- Search box -->
        <div class="w-36 flex flex-row items-center bg-[#F7F7F7] rounded-lg pr-1 ml-6">
            <input type="text" placeholder="Tìm kiếm" class="w-full bg-[#F7F7F7] text-[10px] p-2 rounded-lg pr-1" />
            <div class="bg-white rounded-md min-w-[19px] h-[19px] border-[#F0F0F0] border-[1.5px] flex items-center justify-center cursor-pointer search-btn" style="zoom: 1.1">
                <ion-icon name="search" class="text-[11px] text-[#6B6B6B]"></ion-icon>
            </div>
        </div>
    </div>
    <div class="flex flex-row-reverse items-center gap-x-5">
        <div class="flex flex-row-reverse items-center gap-x-5 w-24">
            <div>
                <img src="/static/img/hoangphat.jpeg" alt="Account" class="w-6 h-6 rounded-full" />
            </div>
            <div>
                <ion-icon name="notifications-outline" class="text-[#6B6B6B]"></ion-icon>
                <div class="bg-red-500 w-[4.5px] h-[4.5px] rounded-full absolute translate-x-[8.5px] -translate-y-3.5"></div>
            </div>
            <div>
                <ion-icon name="chatbubble-outline" class="text-[#6B6B6B]"></ion-icon>
                <ion-icon name="flash" class="paw text-[#6B6B6B]"></ion-icon>
                <div class="bg-red-500 w-[4.5px] h-[4.5px] rounded-full absolute translate-x-[10.5px] -translate-y-3.5"></div>
            </div>
        </div>
        <!-- Main menu -->
        <div class="flex flex-row-reverse gap-x-3">
            <a href="/explore" class="menu-btn <?php echo isset($active) && $active == "khampha" ? "nav-active" : "" ?> mr-8">
                Khám phá
            </a>
            <a href="/lookup" class="menu-btn <?php echo isset($active) && $active == "tracuu" ? "nav-active" : "" ?> mr-3">
                Tra cứu
            </a>
            <a href="/report" class="menu-btn <?php echo isset($active) && $active == "baocao" ? "nav-active" : "" ?> mr-3">
                Báo cáo
            </a>
            <a href="/" class="menu-btn <?php echo isset($active) && $active == "congdong" ? "nav-active" : "" ?> mr-3">
                Cộng đồng
            </a>
        </div>
    </div>
    <!-- <div id="myModal" class="modal"></div> -->
</nav>