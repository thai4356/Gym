<div id="content_right">
    <h1> Contact</h1>
    <div id="Right_Search">
        <?php
        $tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
        $cat_id = isset($_REQUEST["cat_id"])?$_REQUEST["cat_id"]:0;
        ?>
        <form name="fTimkiem" id="fTiemkiem" action="">
            <input type="hidden" name="module" value="sanpham">
            <input type="hidden" name="act" value="timkiem">
            <span>Từ khóa:</span><input type="text" name="tTukhoa" id="tTukhoa" value="<?=$tukhoa?>">
            <span>Nhóm sản phẩm:</span>
            <select name="cat_id" id="cat_id">
                <option value="0">Tất tả nhóm SP</option>
                <?php
                require_once("Model/clsContact.php");
                $contactInfo = new clsContact();
                //lấy nhóm SP tất cả trạng thái, sắp xếp theo thứu tự tăng dần
                $contactInfo->showComment();
                ?>
            </select>
            <input type="submit" name="bSearch" id="bSearch" value="Tìm kiếm">
        </form>
    </div>
    <div id="right_detail">
        <table width="100%" border="1" class="Content_Table" cellpadding="0" cellspacing="0">
            <tr>
                <td> id </td>
                <td> customer name </td>
                <td> content </td>
                <td> date </td>
            </tr>
            <?php
            $rows = $contactInfo->data;
            foreach($rows as $row)
            {
                ?>
                <tr>
                    <td> <?=$row["id"]?> </td>
                    <td> <?=$row["ten"]?> </td>
                    <td> <?=$row["content"]?> </td>
                    <td> <?=$row["date"]?> </td>
<!--                    <td> <a href="?module=--><?php //=$module?><!--&act=xoa&id=--><?php //=$row["id"]?><!--"-->
<!--                             onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>-->
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>