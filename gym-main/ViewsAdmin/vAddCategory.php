<div id="content_left" class="content_left">
    <div class="left1">
        <h3>CHỨC NĂNG</h3>
        <div class="topnav">
        <a href="?module=<?=$module?>">Danh sách Nhóm SP</a><a>|</a>
        <a href="?module=<?=$module?>">Thống kê</a>
        </div>
    </div>
</div>
<hr/>
<div id="content_right">
    <h1> Add product</h1>
    <div id="right_detail">
        <form name="form1" method="post" action="?module=<?=$module?>&act=xulythem">
            <table class="table_contents" width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="120" height="30">Tên nhóm SP:</td>
                    <td width="380"><input type="text" name="t1" id="t1"></td>
                </tr>
                <tr>
                    <td height="30">Trạng thái:</td>
                    <td>
                        Có <input type="radio" name="rTrangthai" id="r1" value="1" checked> &nbsp;
                        Không <input type="radio" name="rTrangthai" id="r2" value="0">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="button" id="button" value="Đồng ý"></td>
                </tr>
            </table>
        </form>

    </div>
</div>
