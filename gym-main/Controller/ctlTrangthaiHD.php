<?php
$ttht = $_REQUEST["ttht"];
$ttmoi = $_REQUEST["ttmoi"];
$chophep = "";
if($ttht==0||
    ($ttht==1&&($ttmoi==2||$ttmoi==3)) ||
    ($ttht==3&&($ttmoi==1||$ttmoi==2)))
{
    $chophep="OK";
}
if($chophep=="OK")
{
    $ketqua = $hoadon->DoiTrangThaiHoadon($id,$ttmoi);
    if($ketqua==TRUE)
        $thongbao = "Updated invoice completed";
    else
        $thongbao = "Something went wrong";
}
else
{
    $thongbao = "Status not valid";
}
require("ViewsAdmin/vKetqua.php");
?>