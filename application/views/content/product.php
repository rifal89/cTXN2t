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
    <a href="<?php echo base_url(); ?>pages/2/index.php"></a>
</div>