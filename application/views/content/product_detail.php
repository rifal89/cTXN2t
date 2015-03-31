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
                            <i class="flag icon"></i> &nbsp; Nama Toko
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
                        $i = 1;
                        while($i <= 6){
                    ?>
                    <a class="rsImg bugaga" data-rsw="400" data-rsh="500"  data-rsBigImg="<?php echo base_url(); ?><?php echo assets_url;?>img/product/<?php echo $i; ?>.jpg" href="<?php echo assets_url;?>img/product/<?php echo $i; ?>.jpg">
                        <img width="96" height="72" class="rsTmb" src="<?php echo assets_url;?>img/product/thumb/<?php echo $i; ?>.jpg" />
                    </a>
                    <?php
                        $i++; }
                    ?>
                </div>
            </div>
            <div class="column alignjustify">
                <h5>Nama Produk</h5>
                <p>
                    <i class="mdi-action-favorite pink-color"></i> 120 &nbsp;
                    <i class="mdi-action-shopping-cart blue-color"></i> 30
                </p>
                <p class="price">Rp 100.000,-</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="ui horizontal divider">
                    Isi Form untuk Order Produk
                </div>
                <form id="addToCartForm" method="post" action="<?php echo base_url(); ?>checkout">
                    <div class="ui grid two column">
                        <div class="column input-field nomargin">
                            <input id="quantity" type="text" class="nomargin" placeholder="Quantity" style="height: 30px;" />
                        </div>
                        <div class="column input-field nomargin">
                            <select name="pengiriman">
                                <option value="" disabled selected>Pengiriman</option>
                                <option value="jne">JNE</option>
                                <option value="tiki">TIKI</option>
                                <option value="pos">POS</option>
                            </select>
                        </div>
                        <div class="column input-field nomargin">
                            <select name="quantity">
                                <option value="" disabled selected>Paket Pengiriman</option>
                                <option value="regular">Regular</option>
                                <option value="express">Express</option>
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
                                <h1 class="nomargin">3,0</h1>
                                <div class="ui large star rating rating-disabled" data-rating="3" data-max-rating="5"></div>
                                <h6>200 <i class="user icon"></i></h6>
                            </div>
                            <div class="eleven wide column table-cell">
                                <div class="ui grid two column count-review">
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui light-green accent-4 progress" style="width: 20%"></span> 35
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui lime accent-3 progress" style="width: 10%"></span> 20
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui lime accent-2 progress" style="width: 60%"></span> 110
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui orange progress" style="width: 15%"></span> 25
                                    </div>
                                    <div class="column alignright">
                                        <i class="star icon"></i>
                                    </div>
                                    <div class="column">
                                        <span class="ui orange progress" style="width: 5%"></span> 10
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui comments">
                            <h3 class="ui dividing header">Review dari Pembeli</h3>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo assets_url;?>img/avatar/matt.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Matt</a>
                                    <div class="metadata">
                                        <span class="date">Hari ini pukul 13.00</span>
                                    </div>
                                    <div class="text">
                                        Barang udah diterima, kondisi bagus..thx
                                    </div>
                                    <div class="actions">
                                        <div class="ui star rating rating-disabled" data-rating="4" data-max-rating="5"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo assets_url;?>img/avatar/elliot.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Elliot</a>
                                    <div class="metadata">
                                        <span class="date">Kemarin pukul 10.00</span>
                                    </div>
                                    <div class="text">
                                        Kondisi barang masih bagus tapi pengiriman agak lambat
                                    </div>
                                    <div class="actions">
                                        <div class="ui star rating rating-disabled" data-rating="3" data-max-rating="5"></div>
                                    </div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <button class="btn waves-effect waves-light">Load more review..</button>
                        </div>
                    </div>
                    <div id="diskusi-produk" class="col s12 nopadding-side">
                        <div class="ui comments">
                            <h3 class="ui dividing header">Diskusi tentang Produk ini</h3>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo assets_url;?>img/avatar/jenny.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Jenny</a>
                                    <div class="metadata">
                                        <span class="date">Hari ini pukul 10.00</span>
                                    </div>
                                    <div class="text">
                                        Barangnya bagus ga sih? gw mau beli tapi masih ragu :(
                                    </div>
                                </div>
                                <div class="comments">
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="<?php echo assets_url;?>img/avatar/joe.jpg">
                                        </a>
                                        <div class="content">
                                            <a class="author">Joe <i class="mdi-action-store ui-tooltip" data-content="Penjual"></i></a>
                                            <div class="metadata">
                                                <span class="date">Hari ini pukul 10.30</span>
                                            </div>
                                            <div class="text">
                                                Tentu bagus donk gan, pokoknya dijamin kualitas No. 1 :D
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="<?php echo assets_url;?>img/avatar/elliot.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Elliot</a>
                                    <div class="metadata">
                                        <span class="date">Kemarin pukul 10.00</span>
                                    </div>
                                    <div class="text">
                                        Bagus kok kualitas barangnya cuma ya itu, gw pesen agak lama sampenya.. :D
                                    </div>
                                </div>
                            </div>
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
                        <div class="column">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="detail-product">
                                        <img src="<?php echo assets_url;?>img/product/Maichi2.jpg" class="activator" />
                                    </a>
                                    <a href="detail-store" class="card-store" title="Toko Maichi">
                                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Kripik Maichi</a> <i class="mdi-navigation-more-vert right"></i></span>
                                                    
                                    <p class="card-count">
                                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                                    </p>
                                    <p class="card-price">Rp 100.000,-</p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Kripik Maichi <i class="mdi-navigation-close right"></i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="card-action">                
                                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo base_url(); ?>detail-product'">
                                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="detail-product">
                                        <img src="<?php echo assets_url;?>img/product/Dress.jpg" class="activator" />
                                    </a>
                                    <a href="detail-store" class="card-store" title="Toko Maichi">
                                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Dress Girls</a> <i class="mdi-navigation-more-vert right"></i></span>
                                                    
                                    <p class="card-count">
                                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                                    </p>
                                    <p class="card-price">Rp 100.000,-</p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Dress Girls <i class="mdi-navigation-close right"></i></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="card-action">                
                                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo base_url(); ?>detail-product'">
                                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
    });
</script>