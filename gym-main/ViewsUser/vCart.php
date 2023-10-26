<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Public/assetsHomepage/css/checkout.css">
    <title>Document</title>
</head>
<body>
<br>
<div class="row1">
    <div class="col-75">
        <div class="container1">
            <div class="col-25">
                <div class="container">
                    <h4>Your cart
                        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
                    </h4>
                    <?php
                    $total =0;
                    //đếm số đầu sản phẩm trong giỏ hàng
                    $count =0;
                    if(isset($_SESSION["cart"]))
                        $count = count($_SESSION["cart"]);//đếm số phần tử của mảng cart
                    if($count==0)
                    {
                        ?>
                        <h2>No item</h2>

                        <h3><a href="indexUser.php">Buy</a></h3>
                        <?php
//        require_once("Model/clsProduct.php");
//        $masp1 ="";
//        $masp1 = $_REQUEST["masp"];
//        echo "$masp1";
                    }
                    else //count>0
                    {
                        //tạo chuỗi chứa danh sách các id của sản phẩm từ giỏ hàng (để SELECT)
                        $arr = array_keys($_SESSION["cart"]);//lấy ra danh sách các key của mảng cart
                        $str = implode(",", $arr);//tạo chuỗi chứa các phần tử của mảng ngăn cách bởi dấu phẩy
                        //tạo đối tượng clsSanpham
                        $sanpham = new clsProduct();
                        $ketqua = $sanpham->TimTheo_DS_IDSanpham($str,1);
                        if($ketqua==FALSE)
                        {
                            echo "<h2>Lỗi hiển thị sản phẩm từ CSDL</h2>";
                        }
                        else
                        {
                            $total =0;//tổng tiền của tất cả sản phẩm trong giỏ hàng
                            $rows = $sanpham->data;
                            ?>

                            <div id="content_cart">
                                <form name="f1" id="f1" action="?module=cart&act=update" method="post">
                                    <div id="right_detail">
                                        <table width="100%" class="Content_Table" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td> Product name </td>
                                                <td> Brand </td>
                                                <td> Price </td>
                                                <td> Image </td>
                                                <td> Description </td>
                                                <td>Amount</td>
                                                <td>Total</td>
                                            </tr>

                                    <?php
                                    foreach($rows as $row)
                                    {
                                        $masp = $row["id"];
                                        $soluong = $_SESSION['cart'][$masp];//số lượng của masp từ giỏ hàng
                                        $total+=$soluong*$row["price"];
                                        $hinhanh = $row["images"];
                                        if($hinhanh=="")
                                            $hinhanh = "no-Image.png";
                                        ?>



                                            <br>
                                        <tr>
                                            <td> <?=$row["title"]?> </td>
                                            <td> <?=$row["brand"]?> </td>
                                            <td> <?=$row["price"]?> VNĐ </td>
                                            <td align="center"><img width="80" src="image/Product/<?=$hinhanh?>" style="width: 100px;height: 100px"> </td>
                                            <td> <?=$row["description"]?></td>
                                            <td><input type="number" name="qty[<?=$masp?>]" value="<?=$soluong?>"></td>
                                            <td><span><?=number_format($soluong*$row["price"])?> VNĐ</span></td>
                                            <td ><a href="?module=cart&act=del&masp=<?=$row["id"]?>" title="Xóa sản phẩm" style="color: red"> Delete </a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                        </table>

                                        <br>
                                    <div class="cart_update">
                                        <input type="submit" name="capnhat" value="Update Cart" style="background-color: green ; margin-left: 85%;width: 10%">
                                    </div>


                                </form>
                            </div>
                            <div id="cart_checkout">
                                <script>
                                    function kt()
                                    {
                                        hoten = document.getElementById("hoten");
                                        diachi = document.getElementById("diachi");
                                        dienthoai = document.getElementById("dienthoai");
                                        if(hoten.value=="" || diachi.value=="" ||dienthoai.value=="")
                                        {
                                            alert("Chưa nhập đủ thông tin");
                                            return false;
                                        }
                                    }
                                </script>

                            </div>
                            <?php
                        }//if($ketqua==FALSE)
                    }//đóng else //count>0
                    ?>
                    <br>
                    <hr>
                    <div class="cart_total">
                        Tổng tiền:<?=number_format($total)?> VNĐ
                    </div>
                </div>
            </div>
        <br>
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <form name="f2" id="f1" action="?module=checkout" method="post" onSubmit="return kt();">
                            <p><span>Name</span>
                                <input type="text" name="hoten" id="hoten" required></p>
                            <p><span>Address</span>
                                <input type="text" name="diachi" id="diachi" required></p>
                            <p><span>Phone No</span>
                                <input type="tel" name="dienthoai" id="dienthoai" required></p>
                            <!--                    <p><span>Ngày nhận hàng:</span>-->
                            <!--                        <input type="text" name="ngaynhan" id="ngaynhan"></p>-->
                            <p><input type="submit" name="dathang" id="dathang" value="Continue to check out" style="background-color: darkseagreen"></p>
                        </form>
</div>

<div id="content_center_2"> <!-- không kèm <div id="content_right"> -->


</div> <!--content_center_2 -->
</body>
</html>

