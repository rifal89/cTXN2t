<script src="<?php echo assets_url;?>js/jquery.royalslider.min.js"></script>

<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">
                        <a href="<?php echo base_url(); ?>" class="waves-effect waves-light">
                            <i class="remove icon"></i>
                        </a>
                    </div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="flag icon"></i> &nbsp; <?php echo $product['shop_name'];?>
                        </a>
                    </div>
                    <div id="share-detail" class="four wide column alignright">
                        <a class="waves-effect waves-light">
                            <i class="twitter icon"></i>
                        </a>
                        <a class="waves-effect waves-light">
                            <i class="facebook icon"></i>
                        </a>
                        <a class="waves-effect waves-light">
                            <i class="print icon"></i>
                        </a>
                    </div>
                    <div id="share-detail-mobile" class="four wide column">
                        <a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown-share">
                            <i class="mdi-navigation-more-vert"></i>
                        </a>
                        <ul id="dropdown-share" class="dropdown-content">
                            <li>
                                <a class="waves-effect waves-light">
                                    <i class="twitter icon"></i> Twitter
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="waves-effect waves-light">
                                    <i class="facebook icon"></i> Facebook
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="waves-effect waves-light">
                                    <i class="print icon"></i> Print
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="body-content" class="full column">
        <div class="ui grid stackable two column nomargin">
            <div class="column">
                <div id="product-image" class="royalSlider rsDefault">
                    <?php
                    if($p_image != FALSE) :
                    foreach($p_image as $row) :
                    ?>
                    <a class="rsImg bugaga" data-rsw="400" data-rsh="500"  data-rsBigImg="<?php echo public_url;?>product_img/<?php echo $row['image']?>" href="<?php echo public_url;?>product_img/<?php echo $row['image']?>">
                        <img width="96" height="72" class="rsTmb" src="<?php echo public_url;?>product_img/thumb/<?php echo $row['image']?>" />
                    </a>
                    <?php endforeach; endif;?>
                </div>
            </div>
            <div class="column alignjustify">
                <h5><?php echo ucwords($product['product_name']);?></h5>
                <p>
                    <i class="mdi-action-favorite pink-color"></i> <?php echo $like['rate'];?> &nbsp;
                    <i class="mdi-action-shopping-cart blue-color"></i> <?php echo $sold['sold'];?>
                </p>
                <p class="price"><?php echo indonesia_currency($product['price']);?></p>
                <p><?php echo ucfirst($product['description']);?>.</p>
                <div class="ui horizontal divider">
                    Isi Form untuk Order Produk
                </div>
                <form id="addToCartForm" method="post" action="<?php echo base_url(); ?>checkout">
                    <div class="ui grid two column">
                        <div class="column input-field nomargin">
                            <input id="quantity" type="text" class="nomargin" placeholder="Quantity" style="height: 30px;" />
                        </div>
                        <div class="column input-field nomargin">
                            <select name="pengiriman" id="courier">
                                <option value="" disabled selected>Pengiriman</option>
                                <?php 
                                if($courier!=FALSE) :
                                foreach($courier as $row) : 
                                ?>
                                <option value="<?php echo $row['courier_id'];?>"> <?php echo $row['courier_name'];?> </option>
                                <?php endforeach; endif;?>                                
                            </select>
                        </div>
                        <div class="column input-field nomargin" id="package_courier">
                            <select name="layanan">
                                <option value="" disabled selected>Paket Pengiriman</option>                                                             
                            </select>
                        </div>
                        <div class="column input-field nomargin">
                            <select name="pengiriman">
                                <option value="" disabled selected>Asuransi</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="ui grid">
                        <div class="full column input-field">
                            <textarea class="materialize-textarea nopadding nomargin"></textarea>
                            <label>Keterangan</label>
                        </div>
                    </div>
                    <div class="ui grid">
                        <div class="full column">
                            <button class="btn waves-effect waves-light">
                                Add to Cart &nbsp; <i class="shop icon"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="column">
                <div class="row">
                    <div class="col s12 nopadding">
                        <ul class="tabs">
                            <li class="tab col s6"><a class="active" href="#review-produk">Review</a></li>
                            <li class="tab col s6"><a href="#diskusi-produk">Diskusi Produk</a></li>
                        </ul>
                    </div>
                    <div id="review-produk" class="col s12 nopadding-side">
                        <div class="ui grid table nomargin">
                            <div class="five wide column table-cell alignright result-review">
                                <h1 class="nomargin"><?php if($total_rate != FALSE) echo $total_rate['rate']; else echo '0';?></h1>
                                <div class="ui large star rating rating-disabled" data-rating="3" data-max-rating="5"></div>
                                <h6><?php if($total_rate != FALSE) echo $total_rate['rate']; else echo '0';?> <i class="user icon"></i></h6>
                            </div>
                            <div class="eleven wide column table-cell">
                                <?php
                                $total_rate = $rate_5['rate'] + $rate_4['rate'] + $rate_3['rate'] + $rate_2['rate'] + $rate_1['rate'];
                                if($total_rate==0) $total_rate=1;
                                $width_5 = ( $rate_5['rate'] / $total_rate ) * 100;
                                $width_4 = ( $rate_4['rate'] / $total_rate ) * 100;
                                $width_3 = ( $rate_3['rate'] / $total_rate ) * 100;
                                $width_2 = ( $rate_2['rate'] / $total_rate ) * 100;
                                $width_1 = ( $rate_1['rate'] / $total_rate ) * 100;
                                ?>
                                <div class="ui grid two column count-review">
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui light-green accent-4 progress" style="width: <?php echo $width_5;?>%"></span> <?php echo $rate_5['rate'];?>
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui lime accent-3 progress" style="width: <?php echo $width_4;?>%"></span> <?php echo $rate_4['rate'];?>
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui lime accent-2 progress" style="width: <?php echo $width_3;?>%"></span> <?php echo $rate_3['rate'];?>
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui orange progress" style="width: <?php echo $width_2;?>%"></span> <?php echo $rate_2['rate'];?>
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui orange progress" style="width: <?php echo $width_1;?>%"></span> <?php echo $rate_1['rate'];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui comments">
                            <h3 class="ui dividing header">Review dari Pembeli</h3>
                            <?php
                            if($review != FALSE) :
                            foreach($review as $row) :
                            ?>                           
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo public_url.'avatar/'.$row['avatar'];?>">
                                </a>

                                <div class="content">
                                    <a class="author"><?php echo $row['name'];?></a>
                                    <div class="metadata">
                                        <span class="date"><?php echo $row['comment_date'];?></span>
                                    </div>
                                    <div class="text">
                                        <?php echo $row['comment'];?>
                                    </div>
                                    <div class="actions">
                                        <div class="ui star rating rating-disabled" data-rating="<?php echo $row['rate'];?>" data-max-rating="5"></div>
                                    </div>
                                </div>                            
                            </div>
                            <?php endforeach; endif; ?>
                            <p>&nbsp;</p>
                            <button class="btn waves-effect waves-light">Load more review..</button>
                        </div>
                    </div>
                    <div id="diskusi-produk" class="col s12 nopadding-side">
                        <div class="ui comments">
                            <h3 class="ui dividing header">Diskusi tentang Produk ini</h3>
                            <?php
                            if($discussion != FALSE) :
                            foreach($discussion as $row) :
                            
                            if($row['parent_id'] == 0) :
                            ?>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo public_url.'avatar/'.$row['avatar'];?>">
                                </a>
                                <div class="content">
                                    <a class="author"><?php echo $row['name'];?></a>
                                    <div class="metadata">
                                        <span class="date"><?php echo $row['comment_date'];?></span>
                                    </div>
                                    <div class="text">
                                        <?php echo $row['comment'];?>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="comments" style="margin-left: 50px;">
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="<?php echo public_url.'avatar/'.$row['avatar'];?>">
                                    </a>
                                    <div class="content">
                                        <a class="author"><?php echo $row['name'];?></a>
                                        <div class="metadata">
                                            <span class="date"><?php echo $row['comment_date'];?></span>
                                        </div>
                                        <div class="text">
                                            <?php echo $row['comment'];?>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                            <?php endif;?>                           
                            <?php endforeach; endif; ?>                       
                            <p>&nbsp;</p>
                            <button class="btn waves-effect waves-light">Gabung Diskusi</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <h5>Produk Lainnya</h5>
                <div id="other-product">
                    <div class="ui grid two column nomargin">
                        <?php
                        if($related != FALSE) :
                        $x=0;
                        foreach($related as $row) :
                        if($x==2) { break; }// keluar dr perulangan jika 2 item sudah ditampilkan
                        ?>                    
                        <div class="column">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="<?php echo base_url().'home/product_detail/'.$row['product_id'];?>">
                                        <img src="<?php echo public_url.'product_img/'.$row['product_img'];?>" class="activator" />
                                    </a>
                                    <a href="<?php echo base_url().'store_detail/'.$row['shop_id'];?>" class="card-store" title="Toko Maichi">
                                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product"><?php echo $row['product_name'];?></a> <i class="mdi-navigation-more-vert right"></i></span>
                                                    
                                    <p class="card-count">
                                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                                    </p>
                                    <p class="card-price"><?php echo indonesia_currency($row['price']);?></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $row['product_name'];?> <i class="mdi-navigation-close right"></i></span>
                                    <p><?php echo $row['description'];?></p>
                                </div>
                                <div class="card-action">                
                                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo base_url().'home/product_detail/'.$row['product_id'];?>'">
                                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div> 
                        <?php $x++; endforeach; endif;?>                       
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var widthScreen = $(window).width();
    var heightScreen = $(window).height();

    $(document).ready(function(){
        if(widthScreen >= 700){
            var controlNavigationVal = 'thumbnails';
        } else {
            var controlNavigationVal = 'bullets';
        }

        $('#product-image').royalSlider({
            fullscreen: {
                enabled: true,
                nativeFS: true
            },
            controlNavigation: controlNavigationVal,
            autoScaleSlider: true, 
            autoScaleSliderWidth: 960,     
            autoScaleSliderHeight: 850,
            loop: false,
            imageScaleMode: 'none',
            navigateByClick: true,
            numImagesToPreload:2,
            arrowsNav:true,
            arrowsNavAutoHide: true,
            arrowsNavHideOnTouch: true,
            keyboardNavEnabled: true,
            fadeinLoadedSlide: true,
            globalCaption: true,
            globalCaptionInside: false,
            thumbs: {
                appendSpan: true,
                firstMargin: true,
                paddingBottom: 4
            },
        }); 

        $("#courier").change(function() {
            var courier_id = $(this).val();        

            $.ajax ({
                type: "POST",
                url: "<?php echo base_url();?>ajax/get_courier_services",
                data: "courier_id="+ courier_id,
                cache: false,
                success: function(html) {
                    $("#package_courier").html(html);   
                    $('select').not('.disabled').material_select();                         
                }            
            });
        });              
    });
</script>