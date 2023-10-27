<div id="content_left" class="content_left">
    <div class="left1">
        <h3>CHỨC NĂNG</h3>
        <div class="topnav">
        <a href="?module=<?=$module?>&act=them">Thêm Nhóm SP</a><a>|</a>
        <a href="?module=<?=$module?>">Danh sách Nhóm SP</a><a>|</a>
        <a href="?module=<?=$module?>">Thống kê</a>
        </div>
    </div>

</div><hr/>
<div id="content_right" class="content_right">
    <h1> DANH SÁCH NHÓM SẢN PHẨM</h1>
    <div id="right_detail">
        <table width="98%" border="1" class="Content_Table" cellpadding="0" cellspacing="0">
            <tr>
                <td> cat_id </td>
                <td> Tên nhóm </td>
                <td> Trạng thái </td>
                <td> Thao tác </td>
            </tr>
            <?php
            $rows = $Nhomsanpham->data;
            foreach($rows as $row)
            {
                $trangthai="";
                if($row["cat_status"]==0)
                    $trangthai = "Không hiển thị";
                else if($row["cat_status"]==1)
                    $trangthai = "Có hiển thị";
                ?>
                <tr>
                    <td> <?=$row["id"]?> </td>
                    <td> <?=$row["cat_name"]?> </td>
                    <td> <?=$trangthai?></td>
                    <td> <a href="?module=<?=$module?>&act=sua&id=<?=$row["id"]?>"> Sửa </a>
                        - <a href="?module=<?=$module?>&act=xoa&id=<?=$row["id"]?>"
                             onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>