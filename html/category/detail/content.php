<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">&nbsp;</div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="shop icon"></i> &nbsp; Nama Kategori
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
        <div id="change-category" class="ui two column grid">
            <div class="column alignright title-change">
                <strong>Pilih Kategori</strong>
            </div>
            <div class="column">
                <div class="ui two column grid">
                    <div class="column nopadding">
                        <div class="input-field">
                            <select name="search">
                                <option value="" disabled>Pilih Kategori</option>
                                <option value="1" selected="true">Fashion Pria</option>
                                <option value="2">Fashion Wanita</option>
                                <option value="3">Kamera</option>
                                <option value="4">Handphone</option>
                                <option value="5">Radio</option>
                                <option value="6">Televisi</option>
                                <option value="7">Alat Tulis</option>
                                <option value="8">Buku</option>
                                <option value="9">Perkakas Rumah</option>
                                <option value="10">Makanan</option>
                                <option value="11">Minuman</option>
                                <option value="12">Kerajinan Tangan</option>
                                <option value="13">ALat Olahraga</option>
                                <option value="14">Tanaman</option>
                            </select>
                        </div>
                    </div>
                    <div class="column nopadding">&nbsp;</div>
                </div>
            </div>
        </div>

        <div id="list-item">
            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/Maichi2.jpg" class="activator" />
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
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/Dress.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Toko Dress">
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
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/batik-keris.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Batik Keris">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">            
                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Batik Wanita</a> <i class="mdi-navigation-more-vert right"></i></span>
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Batik Wanita <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>
                            
            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/bolgul3in1.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Bolu Meranti">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">
                                    
                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Bolu Meranti</a> <i class="mdi-navigation-more-vert right"></i></span>
                                    
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Bolu Meranti <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/kaos.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="T-Shirt Store">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">
                                    
                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">T-Shirt Pria</a> <i class="mdi-navigation-more-vert right"></i></span>
                                    
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">T-Shirt Pria <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/6.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Toko Anting">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">               
                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Anting Unik</a> <i class="mdi-navigation-more-vert right"></i></span>
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Anting Unik <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/3.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Toko Tas">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">

                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Tas Travelling</a> <i class="mdi-navigation-more-vert right"></i></span>

                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Tas Travelling <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/1.jpg" class="activator" />
                    </a>
                    <a href="detail-store" class="card-store" title="Toko Sepatu">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">
                                    
                    <span class="card-title activator grey-text text-darken-4"><a href="detail-product">Sepatu Wanita</a> <i class="mdi-navigation-more-vert right"></i></span>
                                    
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price">Rp 100.000,-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Sepatu Wanita <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo $base; ?>detail-product'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="page_nav">
            <a href="<?php echo $base; ?>pages/2/index.php"></a>
        </div>
    </div>

</div>