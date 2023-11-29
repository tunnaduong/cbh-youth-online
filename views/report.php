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
        <!-- Main form -->
        <div class="max-w-lg w-[100%] long-shadow mb-4 rounded-md bg-white">
          <h1 class="text-center font-semibold my-3">Báo cáo vi phạm tập thể lớp</h1>
          <div class="flex flex-row justify-center items-center mb-7">
            <div class="flex flex-col items-center">
              <div class="w-6 h-6 rounded-full bg-[#319527] flex items-center justify-center text-white">1</div>
              <span class="text-[10px] mt-0.5 font-semibold">Điền thông tin</span>
            </div>
            <div class="w-[84px] h-[0.7px] bg-gray-500 mb-4 -ml-3 "></div>
            <div class="flex flex-col items-center">
              <div class="w-6 h-6 rounded-full bg-gray-400 flex items-center justify-center text-white">2</div>
              <span class="text-[10px] mt-0.5 text-gray-400">Xác nhận</span>
            </div>
            <div class="w-[84px] h-[0.7px] bg-gray-500 mb-4 -mr-1.5"></div>
            <div class="flex flex-col items-center">
              <div class="w-6 h-6 rounded-full bg-gray-400 flex items-center justify-center text-white">3</div>
              <span class="text-[10px] mt-0.5 text-gray-400">Gửi báo cáo</span>
            </div>
          </div>
          <form action="/api/v1.0/report/class" class="px-5 pb-5">
            <div class="flex flex-col mb-2.5">
              <label for="class" class="flex items-center text-[11px]"><ion-icon name="location" class="mr-0.5"></ion-icon> Tên lớp</label>
              <select name="class" id="class" class="mt-1 text-[10.5px] text-gray-500 rounded-md p-1 bg-gray-100">
                <optgroup label="Khối 12">
                  <option value="12A1">12 Toán</option>
                </optgroup>
              </select>
            </div>
            <div class="flex flex-col mb-2.5">
              <label for="time" class="flex items-center text-[11px]"><ion-icon name="time" class="mr-0.5"></ion-icon> Thời gian báo cáo</label>
              <input disabled name="time" id="time" class="text-gray-500 mt-1 text-[10.5px] rounded-md p-1 bg-gray-300" value="<?php echo rebuild_date('H:i l, d/m/Y') ?>"></input>
            </div>
            <div class="flex flex-row gap-x-4">
              <div class="flex flex-col flex-1 mb-2.5">
                <label for="missing" class="flex items-center text-[11px]"><ion-icon name="remove-circle" class="mr-0.5"></ion-icon> Vắng</label>
                <input min="0" max="35" type="number" placeholder="Để trống nếu đủ" name="missing" id="missing" class="text-gray-500 mt-1 text-[10.5px] rounded-md p-1 bg-gray-100"></input>
              </div>
              <div class="flex flex-col flex-1 mb-2.5">
                <label for="cleanliness" class="flex items-center text-[11px]"><ion-icon name="sparkles" class="mr-0.5"></ion-icon> Vệ sinh</label>
                <select name="cleanliness" id="cleanliness" class="text-gray-500 mt-1 text-[10.5px] rounded-md p-1 bg-gray-100">
                  <option value="sach">Sạch</option>
                  <option value="ban">Bẩn</option>
                </select>
              </div>
            </div>
            <div class="flex flex-row gap-x-4">
              <div class="flex flex-col flex-1 mb-2.5">
                <label for="uniform" class="flex items-center text-[11px]"><ion-icon name="shirt" class="mr-0.5"></ion-icon>Đồng phục</label>
                <select name="uniform" id="uniform" class="text-gray-500 mt-1 text-[10.5px] rounded-md p-1 bg-gray-100">
                  <option value="sach">Đủ</option>
                  <option value="ban">Thiếu</option>
                </select>
              </div>
              <div class="flex flex-col flex-1 mb-2.5">
                <label for="fault" class="flex items-center text-[11px]"><ion-icon name="alert-circle" class="mr-0.5"></ion-icon>Lỗi vi phạm</label>
                <input placeholder="Nhập một lỗi vi phạm..." name="fault" id="fault" class="text-gray-500 mt-1 text-[10.5px] rounded-md p-1 bg-gray-100"></input>
              </div>
            </div>
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
    <?php include_once("./includes/footer.php"); ?>