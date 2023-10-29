<?php
$tennhomsp = $_REQUEST["t1"];
$trangthai =1;
if(isset($_REQUEST["rTrangthai"]))
    $trangthai = $_REQUEST["rTrangthai"];
$ketqua = $Nhomsanpham->ThemNhomSanpham($tennhomsp, $trangthai);
if($ketqua==FALSE)
    $thongbao="Something wrong happened";
else
    $thongbao ="Added data completed";
    require("ViewsAdmin/vKetqua.php");;
?>