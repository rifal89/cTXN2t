<?php include("../../../base.php") ?>

<div id="store">
    <div id="body-store">
        <div class="boxCategoryName" class="following bar light full column">
            <div class="ui segment nopadding">
                <div id="formAdd" class="ui grid nomargin" style="display:none;">
                    <div class="eight wide column divcenter">
                        <div class="ui grid nomargin">
                            <div class="input-field twelve wide column">
                                <input type="text" placeholder="Ketik Nama Kategori" autofocus="true" value="Nama Kategori" />
                            </div>
                            <div class="input-field four wide column">
                                <button class="btn waves-effect waves-light">
                                    SIMPAN 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 id="categoryName" class="aligncenter nomargin">
                    <font>Nama Kategori</font>
                    <button id="editCategoryName" class="btn btn-circle waves-effect waves-light">
                        <i class="mdi-editor-mode-edit"></i>
                    </button>
                </h5>
                <div class="ui grid table nomargin small-desc-store">
                    <div class="table-cell">
                        <a href="store" class="waves-effect waves-light">
                            <i class="arrow left icon"></i>
                        </a>
                    </div>
                    <div class="table-cell alignright">
                        20 Produk
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Upload -->
        <div id="boxform-addproduct"></div>
        <!-- End Form Upload -->

        <div id="list-item">
            <div id="addProduct" class="card items-ui btnAddItem">
                <div class="boxAddItem">
                    <div class="contentAddItem">
                        <i class="add circle icon"></i>
                        Tambah Produk Baru
                    </div>
                </div>
            </div>
            <div class="card items-ui">
                <div class="card-image">
                    <a href="detail-product">
                        <img src="assets/img/product/Maichi2.jpg" class="activator" />
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
            <a href="<?php echo $base; ?>store/product/pages/2/index.php"></a>
        </div>
    </div>
</div>