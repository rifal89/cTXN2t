<div id="store">
    <div id="head-store"></div>
    <div id="img-store">
        <img class="ui medium circular image logo-store" src="<?php echo public_url.'shop_img/'.$shop['shop_img'];?>" />
    </div>
    <div id="desc-store">
        <div class="ui grid nomargin">
            <div class="sixteen column nopadding">
                <div class="ui star rating rating-disabled" data-rating="<?php echo round($rate['rate']);?>" data-max-rating="5"></div>
                <h3 class="aligncenter store-name"><?php echo ucwords(str_replace("_", " ", $shop['shop_name']));?></h3>
            </div>
        </div>
        <div class="ui grid two column nomargin">
            <div class="column">
                <p><strong class="uppercase title"><i class="mdi-action-store"></i>&nbsp;Tentang Kami</strong></p>
                <p><?php echo $shop['shop_description'];?></p>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-place"></i>&nbsp;Alamat Kami</strong></p>
                        </td>
                        <td>
                            <p><?php echo $shop['shop_address'];?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-public"></i>&nbsp;Propinsi</strong></p>
                        </td>
                        <td>
                            <p><?php echo ucwords($shop['province_name']);?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-location-city"></i>&nbsp;Kota</strong></p>
                        </td>
                        <td>
                            <p><?php echo ucwords($shop['city_name']);?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-local-phone"></i>&nbsp;Phone</strong></p>
                        </td>
                        <td>
                            <p><a href="tel:622198765432"><?php echo $shop['shop_contact'];?></a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-communication-email"></i>&nbsp;Email</strong></p>
                        </td>
                        <td>
                            <p><a href="mailto:toko@mail.com"><?php echo $shop['email'];?></a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="body-store">
        <div id="list-item">
            <?php
            $album_id = "";
            if($album != FALSE) :
            foreach($album as $row) :
            if($album_id != $row['album_id']) :
            ?>
            <div class="card items-ui">
                <div class="head-card">
                    <?php echo ucwords($row['album_name']);?>
                </div>
                <div class="card-image">
                    <a href="<?php echo base_url().'home/shop_album/'.$row['shop_id'].'/'.$row['album_id'];?>">
                        <img src="<?php echo public_url.'product_img/'.$row['product_img'];?>" class="activator" />
                    </a>
                </div>
                <div class="card-content">
                    <div class="table imgcategory-small">
                        <?php                  
                        $x=1; // utk membatasi jumlah image tampil = 4
                        $album_id = $row['album_id'];                      
                        foreach($album as $row) :
                        if($album_id == $row['album_id'] && $x<=4) :
                        ?>
                        <a href="<?php echo base_url().'home/shop_album/'.$row['shop_id'].'/'.$row['album_id'];?>" class="table-cell imgcategory" style="background-image: url('<?php echo public_url.'product_img/'.$row['product_img'];?>');"></a>
                        <?php                        
                        $x++;
                        endif;
                        endforeach;                        
                        ?>
                    </div>
                </div>
            </div>
            <?php              
            endif;
            endforeach; 
            endif; 
            ?>
        </div>

        <div id="page_nav">
            <a href="store/category-pages/2/index.php"></a>
        </div>
    </div>
</div>

<!--<div id="tempBtnAddCategory" style="display:none;">
    <div id="addCategory" class="card items-ui btnAddItem">
        <div class="boxAddItem">
            <a href="store/addcategory/index.php#formAdd" class="table nomargin">
                <div class="contentAddItem">
                    <i class="add circle icon"></i>
                    Tambah Kategori Baru
                </div>
            </a>
        </div>
    </div>
</div>-->

<script src="<?php echo assets_url;?>js/jquery.backstretch.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#head-store').backstretch([
            "<?php echo public_url.'shop_bg/'.$shop['shop_bg'];?>",
            ], {
                fade: 750,
                duration: 8000
        });
    });
</script>