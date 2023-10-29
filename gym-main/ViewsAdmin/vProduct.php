
<div style="padding: 20px;20px;background-color: #eee">
<div class="card mb-4">
    <!-- HTML !-->

    <div class="card-header" style="background-color: rgba(125,161,189,0.83)">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">

        <a class="button-46" role="button" style="max-width: 8%;height: 10px;float: right;margin-left: 2%;padding: 18.9px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
        <a class="button-46" role="button" style="width: 8%;height: 10px;float: right;margin-left: 6%;padding: 18.9px" href="?module=<?=$module?>">List</a>
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th> id </th>
                <th> Product name </th>
                <th> Brand </th>
                <th> Price </th>
                <th> Image </th>
                <th> Description </th>
                <th> Content </th>
                <th> Status </th>
                <th> Category </th>
                <th> Control </th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th> id </th>
                <th> Product name </th>
                <th> Brand </th>
                <th> Price </th>
                <th> Image </th>
                <th> Description </th>
                <th> Content </th>
                <th> Status </th>
                <th> Category </th>
                <th> Control </th>
            </tr>
            </tfoot>
            <tbody>
            <?php
            $rows = $sanpham->data;
            foreach($rows as $row)
            {
                $hinhanh = $row["images"];
                if($hinhanh=="")
                    $hinhanh = "no-Image.png";
                $trangthai="";
                if($row["status"]==1)
                    $trangthai = "có";
                else
                    $trangthai = "không";
                ?>
                <tr>
                    <td> <?=$row["id"]?> </td>
                    <td> <?=$row["title"]?> </td>
                    <td> <?=$row["brand"]?> </td>
                    <td> <?=$row["price"]?> $ </td>
                    <td align="center"> <img width="80px" height="80px" src="image/Product/<?=$hinhanh?>"> </td>
                    <td> <?=$row["description"]?>  </td>
                    <td> <?=$row["content"]?>  </td>
                    <td> <?=$trangthai?> </td>
                    <td> <?=$row["cat_id"]?>  </td>
                    <td> <a href="?module=<?=$module?>&act=sua&id=<?=$row["id"]?>"> <i class="fa fa-wrench" aria-hidden="true" style="color: #0c63e4"></i> </a>
                        - <a href="?module=<?=$module?>&act=xoa&id=<?=$row["id"]?>"
                             onClick="return confirm('Chắc chắn xóa?');"><i class="fa fa-trash" aria-hidden="true" style="color: red"></i></a> </td>
                </tr>

                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</div>


<style>


                                                           /* CSS */
                                                       .button-46 {
                                                           align-items: center;
                                                           background-color: rgba(240, 240, 240, 0.26);
                                                           border: 1px solid #DFDFDF;
                                                           border-radius: 16px;
                                                           box-sizing: border-box;
                                                           color: #000000;
                                                           cursor: pointer;
                                                           display: flex;
                                                           font-family: Inter, sans-serif;
                                                           font-size: 18px;
                                                           justify-content: center;
                                                           line-height: 28px;
                                                           max-width: 100%;
                                                           padding: 14px 22px;
                                                           text-decoration: none;
                                                           transition: all .2s;
                                                           user-select: none;
                                                           -webkit-user-select: none;
                                                           touch-action: manipulation;
                                                           width: 100%;
                                                       }

    .button-46:active,
    .button-46:hover {
        outline: 0;
    }

    .button-46:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .button-46 {
            font-size: 20px;

            padding: 14px 16px;
        }
    }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form1" method="post" action="?module=<?=$module?>&act=xulythem" enctype="multipart/form-data">
                    <table class="table_contents"  width="750" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="120" height="30">Category:</td>
                            <td width="630">
                                <select name="s1" id="s1">
                                    <option value="0">Choose category</option>
                                    <?php
                                    require_once("Model/clsCategory.php");
                                    require_once("Public/Tienich.php");
                                    $nps = new clsCategory();
                                    $nps->LayDanhSachNhomSanpham(2);//lấy tất cả nhóm SP
                                    ShowOptions($nps->data,"id","cat_name",0);
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="120" height="30">Product name:</td>
                            <td width="380"><input type="text" name="t1" id="t1"></td>
                        </tr>
                        <tr>
                            <td height="30">Brand:</td>
                            <td><input type="text" name="t2" id="t2"></td>
                        </tr>
                        <tr>
                            <td height="30">Price:</td>
                            <td><input type="text" name="t3" id="t3"></td>
                        </tr>
                        <tr>
                            <td height="30">Image:</td>
                            <td><input type="file" name="f1" id="f1"></td>
                        </tr>
                        <tr>
                            <td height="30"  valign="top">Description:</td>
                            <td><textarea name="t4" id="t4" rows="5" cols="30"></textarea></td>
                        </tr>
                        <tr>
                            <td height="30"  valign="top">Content:</td>
                            <td><textarea name="t5" id="t5" rows="5" cols="30" ></textarea></td>
                        </tr>
                        <tr>
                            <td height="30">Status:</td>
                            <td>
                                Có <input type="radio" name="rTrangthai" id="r1" value="1" checked> &nbsp;
                                Không <input type="radio" name="rTrangthai" id="r2" value="0">
                            </td>
                        </tr>
                        <tr>

                        </tr>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<script language="javascript">
    var ckTomtat = CKEDITOR.replace('t4');
    ckTomtat.config.width = 600;
    CKFinder.setupCKEditor(ckTomtat, null, { type: 'Images' });

    var ckNoidung = CKEDITOR.replace('t5');
    ckNoidung.config.width = 600;
    CKFinder.setupCKEditor(ckNoidung, null, { type: 'Images' });
</script>