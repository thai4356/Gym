<?php
//Kiểm tra nếu hóa đơn đang ở trạng thái đã thanh toán (2) thì không xóa
$ketqua = $hoadon->TimHoadon($id);
$rowHD = $hoadon->data;
if($rowHD==NULL)//if($hoadon->db->pdo_stm->rowCount()==0)
    $thongbao = "Invoice: " . $id . " not exist";
else{
    if($rowHD["status"]==2)
        $thongbao = "Can't do that because invoice has been confirmed and delivered";
    else{
        $ketqua = $hoadon->XoaChitietHD($id);
        if($ketqua==FALSE)
            $thongbao = "Something went wrong" . $id ;
        else{
            $ketqua = $hoadon->XoaHoaDon($id);
            if($ketqua==TRUE)
                $thongbao = "Deleted " . $id . " successfully";
            else
                $thongbao = "Something went wrong with invoice: " . $id ;
        }
    }
}
require("ViewsAdmin/vKetqua.php");
?>