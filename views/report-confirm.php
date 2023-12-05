<!DOCTYPE html>
<html lang="en">
<?php
function rebuild_date($format, $time = 0)
{
    if (!$time) $time = time();

    $lang = array();
    $lang['sun'] = 'CN';
    $lang['mon'] = 'T2';
    $lang['tue'] = 'T3';
    $lang['wed'] = 'T4';
    $lang['thu'] = 'T5';
    $lang['fri'] = 'T6';
    $lang['sat'] = 'T7';
    $lang['sunday'] = 'Chủ nhật';
    $lang['monday'] = 'Thứ hai';
    $lang['tuesday'] = 'Thứ ba';
    $lang['wednesday'] = 'Thứ tư';
    $lang['thursday'] = 'Thứ năm';
    $lang['friday'] = 'Thứ sáu';
    $lang['saturday'] = 'Thứ bảy';
    $lang['january'] = 'Tháng Một';
    $lang['february'] = 'Tháng Hai';
    $lang['march'] = 'Tháng Ba';
    $lang['april'] = 'Tháng Tư';
    $lang['may'] = 'Tháng Năm';
    $lang['june'] = 'Tháng Sáu';
    $lang['july'] = 'Tháng Bảy';
    $lang['august'] = 'Tháng Tám';
    $lang['september'] = 'Tháng Chín';
    $lang['october'] = 'Tháng Mười';
    $lang['november'] = 'Tháng M. một';
    $lang['december'] = 'Tháng M. hai';
    $lang['jan'] = 'T01';
    $lang['feb'] = 'T02';
    $lang['mar'] = 'T03';
    $lang['apr'] = 'T04';
    $lang['may2'] = 'T05';
    $lang['jun'] = 'T06';
    $lang['jul'] = 'T07';
    $lang['aug'] = 'T08';
    $lang['sep'] = 'T09';
    $lang['oct'] = 'T10';
    $lang['nov'] = 'T11';
    $lang['dec'] = 'T12';

    $format = str_replace("r", "D, d M Y H:i:s O", $format);
    $format = str_replace(array("D", "M"), array("[D]", "[M]"), $format);
    $return = date($format, $time);

    $replaces = array(
        '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
        '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
        '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
        '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
        '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
        '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
        '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
        '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
        '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
        '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
        '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
        '/\[May\](\W|$)/' => $lang['may2'] . "$1",
        '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
        '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
        '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
        '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
        '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
        '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
        '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
        '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
        '/Monday(\W|$)/' => $lang['monday'] . "$1",
        '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
        '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
        '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
        '/Friday(\W|$)/' => $lang['friday'] . "$1",
        '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
        '/January(\W|$)/' => $lang['january'] . "$1",
        '/February(\W|$)/' => $lang['february'] . "$1",
        '/March(\W|$)/' => $lang['march'] . "$1",
        '/April(\W|$)/' => $lang['april'] . "$1",
        '/May(\W|$)/' => $lang['may'] . "$1",
        '/June(\W|$)/' => $lang['june'] . "$1",
        '/July(\W|$)/' => $lang['july'] . "$1",
        '/August(\W|$)/' => $lang['august'] . "$1",
        '/September(\W|$)/' => $lang['september'] . "$1",
        '/October(\W|$)/' => $lang['october'] . "$1",
        '/November(\W|$)/' => $lang['november'] . "$1",
        '/December(\W|$)/' => $lang['december'] . "$1"
    );

    return preg_replace(array_keys($replaces), array_values($replaces), $return);
}

date_default_timezone_set('Asia/Ho_Chi_Minh');

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
                    <h1 class="text-center font-semibold my-3">Vui lòng xác nhận báo cáo</h1>
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
                            <div class="w-6 h-6 rounded-full bg-gray-400 flex items-center justify-center text-white">3</div>
                            <span class="text-[10px] mt-0.5 text-gray-400 text-center">Gửi báo cáo</span>
                        </div>
                    </div>
                    <form action="/report/class/success" method="post" class="px-5 pb-4">
                        <div class="flex flex-col mb-2.5">
                            <label for="class-name" class="flex items-center text-[11px]">Tên lớp</label>
                            <input type="text" disabled class="text-gray-500" name="class-name" id="class-name" value="<?php echo isset($_POST['classText']) ? $_POST['classText'] : "" ?>">
                            <input type="hidden" name="class" value="<?php echo isset($_POST['class']) ? $_POST['class'] : "" ?>">
                        </div>
                        <div class="flex flex-col mb-2.5">
                            <label for="time" class="flex items-center text-[11px]">Thời gian báo cáo</label>
                            <input type="text" disabled class="text-gray-500" name="time" id="time" value="<?php echo rebuild_date('H:i l, d/m/Y') ?>">
                        </div>
                        <div class="flex flex-row gap-x-4">
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="missing" class="flex items-center text-[11px]">Vắng</label>
                                <input type="text" readonly class="text-gray-500" name="missing" id="missing" value="<?php echo isset($_POST['missing']) ? $_POST['missing'] : "" ?>">
                            </div>
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="cleanliness2" class="flex items-center text-[11px]">Vệ sinh</label>
                                <input type="text" disabled class="text-gray-500" name="cleanliness2" id="cleanliness2" value="<?php echo isset($_POST['cleanliness']) ? ($_POST['cleanliness'] == "clean" ? "Sạch" : "Bẩn") : "" ?>">
                                <input type="hidden" name="cleanliness" value="<?php echo isset($_POST['cleanliness']) ? $_POST['cleanliness'] : "" ?>">
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-4">
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="uniform2" class="flex items-center text-[11px]">Đồng phục</label>
                                <input type="text" disabled class="text-gray-500" name="uniform2" id="uniform2" value="<?php echo isset($_POST['uniform']) ? ($_POST['uniform'] == "full" ? "Đủ" : "Thiếu") : "" ?>">
                                <input type="hidden" name="uniform" value="<?php echo isset($_POST['uniform']) ? $_POST['uniform'] : "" ?>">
                            </div>
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="fault2" class="flex items-center text-[11px]">Lỗi vi phạm</label>
                                <input type="text" disabled class="text-gray-500" name="mistake" id="mistake" value="<?php echo isset($_POST['mistake']) ? ($_POST['mistake'] == "" ? "Không có" : $_POST['mistake']) : "Không có" ?>">
                                <input type="hidden" name="mistake-code" value="4">
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-4">
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="reporter" class="flex items-center text-[11px]">Xung kích báo cáo</label>
                                <input type="text" readonly class="text-gray-500" name="reporter" id="reporter" value="hoangphatdzai">
                            </div>
                            <div class="flex flex-col flex-1 mb-2.5">
                                <label for="minus-point" class="flex items-center text-[11px]">Điểm trừ</label>
                                <input type="text" disabled class="text-gray-500" name="minus-point" id="minus-point" value="2">
                            </div>
                        </div>
                        <div class="flex flex-col mb-3.5">
                            <label for="additional" class="flex items-center text-[11px]">Ghi chú thêm</label>
                            <textarea type="text" readonly class="text-gray-500 resize-none" name="additional" id="additional"><?php echo isset($_POST['additional']) ? ($_POST['additional'] == "" ? "Không có" : $_POST['additional']) : "Không có" ?></textarea>
                        </div>

                        <center>
                            <button class="text-[11px] font-semibold bg-[#319527] text-white h-7 px-8 rounded-full">Gửi báo cáo</button>
                        </center>
                    </form>
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