<?php
session_start();
ob_start();
include_once('__autoload.php');
/* date_default_timezone_set('Asia/Ho_Chi_Minh');
$dauTuan = date("Y-m-d", strtotime("monday this week"));
$cuoiTuan = date("Y-m-d", strtotime("sunday this week"));
$dauThang = date("Y-m-d", strtotime("first day of this month"));
$cuoiThang = date("Y-m-d", strtotime("last day of this month"));
$homNay =  date('Y/m/d');
$tue=date_create($dauTuan);
date_add($tue,date_interval_create_from_date_string("1 days"));
$thuBa =  date_format($tue,"d-m-Y");
echo $thuBa;
echo "<br/>";
$wed=date_create($dauTuan);
date_add($wed,date_interval_create_from_date_string("2 days"));
$thuTu = date_format($wed,"d-m-Y");
echo $thuTu;
echo "<br/>";
$thu=date_create($dauTuan);
date_add($thu,date_interval_create_from_date_string("3 days"));
$thuNam = date_format($thu,"d-m-Y");
echo $thuNam;
echo "<br/>";
$fri=date_create($dauTuan);
date_add($fri,date_interval_create_from_date_string("4 days"));
$thuSau = date_format($fri,"d-m-Y");
echo $thuSau;
echo "<br/>";
$sat=date_create($dauTuan);
date_add($sat,date_interval_create_from_date_string("5 days"));
$thuBay = date_format($sat,"d-m-Y");
echo $thuBay; */
echo $_SESSION['loaiTK'];
echo $_SESSION['userName'];
echo $_SESSION['passWord'];
echo $_SESSION['nhanVien'];
if ($_SESSION['loaiTK'] == 0) {
  echo "Admin";
}
else {
  echo "Nhan vien";
}
?>
