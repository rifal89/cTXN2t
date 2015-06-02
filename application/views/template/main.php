<!DOCTYPE html>
<html ng-app="ukmApp">
<head>
  	<!-- Standard Meta -->
  	<meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  	<!-- Site Properities -->
  	<title>Jelajahi Indonesiamu</title>

    <!-- CSS Library -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/semantic.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/isotope.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/royalslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/rs-default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/shCore.css">
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/introjs.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url;?>css/ukm-apps.css">

    <!-- JS Library -->
  	<script src="<?php echo assets_url;?>js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo assets_url;?>js/jquery-migrate-1.2.0.min.js"></script>
    <script src="<?php echo assets_url;?>js/jquery.address.min.js"></script>

</head>

<body id="ji">

    <div class="loading-box">
        <div class="loading">
            <div class="outer"></div>
            <div class="inner"></div>
        </div>
    </div>

    <div id="wrapper" class="ui grid">
        <!-- Sidebar -->
        <div id="leftbar" class="ui large inverted vertical sidebar menu left two wide column">
            <a href="">
                <img src="<?php echo assets_url;?>img/logo.png" class="logo" alt="Jelajahi Indonesiamu" title="Jelajahi Indonesiamu" />
            </a>
            <a href="<?php echo base_url().'home/category';?>" class="item waves-effect waves-block waves-light">
                <i class="align right icon"></i> <span>Kategori</span>
            </a>
            <a href="<?php echo base_url().'home/product';?>" class="item waves-effect waves-block waves-light">
                <i class="star icon"></i> <span>Produk</span>
            </a>
            <a href="<?php echo base_url().'home/shop';?>" class="item waves-effect waves-block waves-light">
                <i class="search icon"></i> <span>Daftar Toko</span>
            </a>
            <a href="<?php echo base_url().'home/blog';?>" class="item waves-effect waves-block waves-light">
                <i class="book icon"></i> <span>Blog</span>
            </a>
            <a class="item waves-effect waves-block waves-light">
                <i class="help circle icon"></i> <span>Bantuan</span>
            </a>
            <a onclick="javascript:helpStep();" class="item waves-effect waves-block waves-light">
                <i class="help circle icon"></i> <span>Bantuan</span>
            </a>
        </div>
        <!-- End Sidebar -->

        <!-- Header for mobile -->
        <div id="header">
            <nav>
                <div class="nav-wrapper">
                    <div class="left">
                        <ul>
                            <li>
                                <a class="waves-effect waves-block waves-light launch">
                                    <i class="mdi-navigation-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li>
                                <a id="openSearchM" class="waves-effect waves-block waves-light">
                                    <i class="mdi-action-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="checkout" class="waves-effect waves-block waves-light">
                                    <i class="mdi-action-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a id="btnUserM" class="waves-effect waves-block waves-light">
                                    <i class="mdi-action-account-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mail" class="waves-effect waves-block waves-light">
                                    <i class="mdi-communication-email"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Header for mobile -->

        <!-- Maincontent -->
        <div id="maincontent" class="thirteen wide column">
            <div class="full height">
                <div id="searchbar" class="following bar light fixed" style="display:none;">
                    <div class="ui segment">
                        <?php
                        $attributes = array('id' => 'searchForm');
                        echo form_open('home/search', $attributes); ?>
                            <div class="ui grid">
                                <div class="input-field nine wide column">
                                    <input type="text" name="product_name" placeholder="Ketik disini untuk cari produk" />
                                </div>
                                <div class="input-field four wide column">
                                    <select name="category_name">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <?php
                                        $category = get_product_category();
                                        if($category != FALSE) :
                                        foreach ($category as $row) : ?>
                                            <option value="<?php echo $row['category_name'];?>"> <?php echo $row['category_name'];?> </option>
                                        <?php endforeach; endif;?>
                                    </select>
                                </div>
                                <div class="input-field three wide column">
                                    <button class="btn waves-effect waves-light" type="submit" name="search">
                                        <i class="mdi-action-search"></i> &nbsp; CARI 
                                    </button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <?php if(isset($content)) echo $content; ?>                
            </div>
        </div>
        <!-- End Maincontent -->

        <!-- Rightbar -->
        <div id="rightbar" class="ui large inverted vertical sidebar menu right one wide column">
            <a id="openSearch" title="Cari Produk" class="item waves-effect waves-block waves-light">
                <i class="search icon"></i>
            </a>
            <a href="checkout" title="Checkout" class="item waves-effect waves-block waves-light">
                <i class="shop icon"></i>
            </a>
            <a href="<?php echo base_url();?>login" id="btnUser" title="Akun Saya" class="item waves-effect waves-block waves-light">
                <i class="user icon"></i>
            </a>
            <a href="mail" id="btnEmail" title="Email Akun" class="item waves-effect waves-block waves-light">
                <i class="mail icon"></i>
            </a>
            <a href="product" id="btnLogout" title="Logout" class="item waves-effect waves-block waves-light">
                <i class="power icon"></i>
            </a>
        </div>
        <!-- End Rightbar -->
    </div>

    <!-- JS -->    
    <script src="<?php echo assets_url;?>js/angular.js"></script>
    <script src="<?php echo assets_url;?>js/semantic.js"></script>
    <script src="<?php echo assets_url;?>js/materialize.js"></script>
    <script src="<?php echo assets_url;?>js/jquery.isotope.js"></script>
    <script src="<?php echo assets_url;?>js/jquery.infinitescroll.min.js"></script>
    <!-- Just for demo HTML -->
    <script src="<?php echo assets_url;?>js/jquery.cookie.js"></script>
    <!-- End Jquery Cookie -->
    <script src="<?php echo assets_url;?>js/highcharts.js"></script>
    <script src="<?php echo assets_url;?>js/exporting-chart.js"></script>
    <script src="<?php echo assets_url;?>js/intro.js"></script>
    <script src="<?php echo assets_url;?>js/ukm-apps.js"></script>
    <script src="<?php echo assets_url;?>js/app.js"></script>

</body>
</html>