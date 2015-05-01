<div id="pages-content" ng-app="app">
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
                    <div class="column nopadding" ng-controller="categoryController">
                        <!--<div class="input-field">-->
                            <select name="">
                                <option value="" disabled selected="true"> -- Pilih Kategori -- </option>
                                <?php foreach($category as $row) : ?>
                                <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>      
                                <?php endforeach; ?>                          
                            </select>
                        <!--</div>-->
                    </div>
                    <div class="column nopadding">&nbsp;</div>
                </div>
            </div>
        </div>

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
                    <a href="<?php echo base_url().'home/shop_detail/'.$row['shop_id'];?>" class="card-store" title="<?php echo $row['product_name'];?>">
                        <img src="http://placehold.it/64x64&text=Logo" class="store-logo" />
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><a href="<?php echo base_url().'home/product_detail/'.$row['product_id'];?>"><?php echo $row['product_name'];?></a> <i class="mdi-navigation-more-vert right"></i></span>
                                    
                    <p class="card-count">
                        <span class="fav-count"><i class="mdi-action-favorite"></i> <span><?php echo rand(10, 100) ?></span></span>
                        <span class="sell-count"><i class="mdi-action-shopping-cart"></i> <span><?php echo rand(10, 100) ?></span></span>
                    </p>
                    <p class="card-price"><?php echo indonesia_currency($row['price']);?>-</p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $row['product_name'];?><i class="mdi-navigation-close right"></i></span>
                    <p><?php echo $row['description'];?></p>
                </div>
                <div class="card-action">                
                    <button class="btn waves-effect waves-light" onclick="window.location.href='<?php echo base_url().'home/product_detail/'.$row['product_id'];?>'">
                        ORDER &nbsp; <i class="mdi-action-shopping-cart"></i>
                    </button>
                </div>            
            </div>
            <?php endforeach; endif;?>
        </div>

        <div id="page_nav">
            <a href="<?php echo base_url(); ?>home/pages/2/index.php"></a>
        </div>
    </div>

</div>