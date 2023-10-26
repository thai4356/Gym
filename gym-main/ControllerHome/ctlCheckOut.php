<?php
require_once("Model/clsInVoice.php");
require_once("Model/clsProduct.php");
//biến $link_tieptuc và $thongbao dùng cho Views/vKetqua.php
$link_tieptuc ="?module=cart";
$thongbao ="";
//Lấy thông tin từ form và chèn hóa đơn mới
if(isset($_SESSION["cart"])==false)
    $thongbao ="Giỏ hàng rỗng";
else if(isset($_REQUEST["dathang"])==false)
    $thongbao ="lỗi submit form đặt hàng";
else
{
    $hoten = $_REQUEST["hoten"];
    $diachi = $_REQUEST["diachi"];
    $dienthoai = $_REQUEST["dienthoai"];
    //$ngaynhan = $_REQUEST["ngaynhan"];
    $hoadon = new clsInVoice();
    $ketqua = $hoadon->ThemHoadon($hoten,$diachi,$dienthoai);
    if($ketqua==FALSE)
        $thongbao ="LỖI THÊM HÓA ĐƠN MỚI";
    else
    {
        //lấy mã hóa đơn tự động sinh từ lệnh insert trên
        $mahd = $hoadon->getLastId();
        $sanpham = new clsProduct();
        //duyệt từng mặt hàng trong giỏ hàng (cart) lấy ra masp và soluong
        //lưu mã hóa đơn, mã sản phẩm, số lượng, giá sản phẩm vào chi tiết hóa đơn
        foreach($_SESSION["cart"] as $masp=>$soluong)
        {
            $ketqua = $sanpham->TimTheoIDSanpham($masp);
            $giasp = $sanpham->data["price"];//lấy giá sản phẩm
            $ketqua = $hoadon->ThemChitietHoadon($mahd,$masp,$soluong,$giasp);
            if($ketqua==FALSE)
                $thongbao ="LỖI THÊM CHI TIẾT HÓA ĐƠN";
            else
            {
                unset($_SESSION["cart"]);//xóa giỏ hàng
                $thongbao ="Thanks for your purchase";
                $thongbao .= "<br>We will contact back as soon as possible";
                $thongbao .= "<br>Account: 0011223344";
                $thongbao .= "<br>Bank: BIDV";
            }
        }
    }
}
$sanpham = new clsProduct();
$ketqua = $sanpham->LaySanphamMoiNhat(3);//lấy 3 sản phẩm mới nhất
require_once("ViewsUser/vProduct.php");
require("ViewsAdmin/vKetqua.php");
?>