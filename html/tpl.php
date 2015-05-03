<?php include("base.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo $base; ?>" />
  	<!-- Standard Meta -->
  	<meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  	<!-- Site Properities -->
  	<title>Jelajahi Indonesiamu</title>

    <!-- CSS Library -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="assets/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css">
    <link rel="stylesheet" type="text/css" href="assets/css/royalslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/rs-default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shCore.css">
    <link rel="stylesheet" type="text/css" href="assets/css/introjs.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/ukm-apps.css">

    <!-- JS Library -->
  	<script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.0.min.js"></script>
    <script src="assets/js/jquery.address.min.js"></script>
    <script type="text/javascript">
        var base = "<?php echo $base; ?>";
    </script>

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
            <a href="<?php echo $base; ?>">
                <img src="assets/img/logo.png" class="logo" alt="Jelajahi Indonesiamu" title="Jelajahi Indonesiamu" />
            </a>
            <a href="category" class="item waves-effect waves-block waves-light <?php if($page == "category"){ ?>active<?php } ?>">
                <i class="align right icon"></i> <span>Kategori</span>
            </a>
            <a href="product" class="item waves-effect waves-block waves-light <?php if($page == "product"){ ?>active<?php } ?>">
                <i class="star icon"></i> <span>Produk</span>
            </a>
            <a href="list-store" class="item waves-effect waves-block waves-light <?php if($page == "store"){ ?>active<?php } ?>">
                <i class="search icon"></i> <span>Daftar Toko</span>
            </a>
            <a href="blog" class="item waves-effect waves-block waves-light <?php if($page == "blog"){ ?>active<?php } ?>">
                <i class="book icon"></i> <span>Blog</span>
            </a>
            <?php
                if($page == "product"){
            ?>
            <a onclick="javascript:introJs().setOption('showBullets', false).start();" class="item waves-effect waves-block waves-light">
                <i class="help circle icon"></i> <span>Bantuan</span>
            </a>
            <?php } else { ?>
            <a onclick="javascript:helpStep();" class="item waves-effect waves-block waves-light">
                <i class="help circle icon"></i> <span>Bantuan</span>
            </a>
            <?php } ?>
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
                                <a id="btnUserM" class="waves-effect waves-block waves-light btnUser">
                                    <i class="mdi-action-account-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mail" class="waves-effect waves-block waves-light btnEmail">
                                    <i class="mdi-communication-email"></i>
                                </a>
                            </li>
                            <li>
                                <a href="product" class="waves-effect waves-block waves-light btnLogout">
                                    <i class="mdi-action-settings-power"></i>
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
                        <form id="searchForm" method="post" action="#">
                            <div class="ui grid">
                                <div class="input-field nine wide column">
                                    <input type="text" placeholder="Ketik disini untuk cari produk" />
                                </div>
                                <div class="input-field four wide column">
                                    <select name="search">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="1">Fashion Pria</option>
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
                                <div class="input-field three wide column">
                                    <button class="btn waves-effect waves-light" type="submit" name="search">
                                        <i class="mdi-action-search"></i> &nbsp; CARI 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php include($content); ?>
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
            <a id="btnUser" title="Akun Saya" class="item waves-effect waves-block waves-light btnUser">
                <i class="user icon"></i>
            </a>
            <a href="mail" id="btnEmail" title="Email Akun" class="item waves-effect waves-block waves-light btnEmail">
                <i class="mail icon"></i>
            </a>
            <a href="product" title="Logout" class="item waves-effect waves-block waves-light btnLogout">
                <i class="power icon"></i>
            </a>
        </div>
        <!-- End Rightbar -->
    </div>

    <!-- JS -->
    <script src="assets/js/semantic.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/jquery.isotope.js"></script>
    <script src="assets/js/jquery.infinitescroll.min.js"></script>
    <!-- Just for demo HTML -->
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End Jquery Cookie -->
    <script src="assets/js/highcharts.js"></script>
    <script src="assets/js/exporting-chart.js"></script>
    <script src="assets/js/intro.js"></script>
    <script src="assets/js/ukm-apps.js"></script>

</body>
</html>