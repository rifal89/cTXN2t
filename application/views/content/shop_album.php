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
                            <p><a href="mailto:toko@mail.com2"><?php echo $shop['email'];?></a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div id="body-store">
        <div id="store">
            <div id="body-store">
                <div class="boxCategoryName" class="following bar light full column">
                    <div class="ui segment nopadding">
                        <h5 class="aligncenter nomargin"><?php echo ucwords($count['album_name']);?></h5>
                        <div style="text-align:center">-- <?php echo $count['product'];?> Produk --</div>
                    </div>
                </div>
                <br>

                <div id="list-item">
                    <?php
                    if($product != FALSE) :
                    foreach($product as $row) :
                    ?>               
                    <div class="card items-ui">
                        <div class="card-image">
                            <a href="<?php echo base_url().'home/product_detail/'.$row['product_id'];?>">
                                <img src="<?php echo public_url.'product_img/'.$row['product_img'];?>" class="activator" />
                            </a>
                            <a href="store" class="card-store" title="<?php echo $row['product_name'];?>" data-step="2" data-intro="Klik Logo Penjual jika ingin melihat detail penjual.">
                                <img src="<?php echo public_url;?>shop_img/store1.jpg" class="store-logo" />
                            </a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><a href="<?php echo base_url().'home/product_detail/'.$row['product_id'];?>"><?php echo $row['product_name'];?></a> <i class="mdi-navigation-more-vert right" data-step="3" data-intro="Klik disini untuk melihat deskripsi singkat produk."></i></span>
                                            
                            <p class="card-count">
                                <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                                <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                            </p>
                            <p class="card-price"><?php echo indonesia_currency($row['price']);?></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $row['product_name'];?><i class="mdi-navigation-close right"></i></span>
                            <p><?php echo $row['description'];?></p>
                        </div>
                        <div class="card-action">                
                            <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo base_url().'home/product_detail/'.$row['product_id'];?>'" data-step="1" data-intro="Klik Order untuk pemesanan barang ini.">
                                ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
                
                <div id="page_nav">
                    <a href="store/product/pages/2/index.php"></a>
                </div>
            </div>
        </div>
    </div>
</div>

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