<?php
    if(isset($_POST['search'])){
        $search=$_POST['searchtext'];
        $sql_search="select * from sanpham where tensp LIKE '%$search%'";
        $query_search=mysql_query($sql_search);
    }
?>
    <p style="text-align: center;color :red;background:#0CF;padding:10px;">Kết quả tìm được</p>
    <div class="sanphamall">
        <?php
            if($count= mysql_num_rows($query_search)==0){?>
        <p>Không tìm thấy sp nào !</p>
        <?php
            }else{
        ?>
        <ul>
        <?php
        while($dong_search=mysql_fetch_array($query_search)){
            ?>
            <li> <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['idsanpham']?>">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_search['hinhanh'] ?>"width="100" height="100" />
                    <p><?php echo $dong_search['tensp']?></p>
                    <p style="color: #F00;">Gia sp:<?php echo $dong_search['giadexuat']?></p>
                    <p style="color:#F00;text-align: center">Chi tiết</p>
                </a></li>
                <?php
        }
        }
                ?>
        </ul>
    </div>