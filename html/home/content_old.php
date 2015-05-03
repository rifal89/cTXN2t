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
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/ukm-apps.css">

    <!-- JS Library -->
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.0.min.js"></script>
    <script src="assets/js/jquery.address.min.js"></script>

</head>

<body id="ji">

    <div id="wrapper" class="opening-page">

        <div id="logo-section">
            <img src="assets/img/logo.png" alt="Jelajahi Indonesiamu" title="Jelajahi Indonesiamu" />
        </div>

        <!-- Section One -->
        <section id="section-one" class="section-page">
            <div class="content-section" class="container">
                <div class="ui grid nomargin">
                    <div class="nine wide column divcenter">
                        <div class="ui grid nomargin">
                            <div class="four wide column boximg">
                                <img src="assets/img/opening/batik-keris.jpg" class="ui medium circular image" align="Batik Keris" title="Batik Keris" />
                            </div>
                            <div class="twelve wide column boxtext">
                                <div class="text">
                                    <h5 class="uppercase">Batik Keris</h5>
                                    <p>Sejarah Batik Keris dimulai pada tahun 1947, ketika oleh Almarhum Kasom Tjokrosaputro dan istrinya, Ibu Gaitini, yang setelah menikah, mulai berdagang batik. mereka mengenal dan belajar batik dari orang tua Bapak Kasom Tjokrosaputro. Kemudian mereka membuka toko batik yang bernama "Keris" di Jl. Kom. Yos Sudarso (Jl. Nonongan No. 62) di Solo. Karena adanya perkembangan, mereka mendirikan pabrik bati di daerah Kemlayan, Solo, persisnya di belakang toko Keris.</p>
                                    <a href="store" class="btn waves-effect waves-light">Kunjungi Toko <i class="mdi-action-store"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <button id="scrolltoTwo" class="btn-polos">
                    <i class="mdi-hardware-keyboard-arrow-down"></i>
                </button>
                <a href="product" class="btn-polos skipToSite">
                    Cari Produk <i class="mdi-hardware-keyboard-arrow-right"></i>
                </a>
            </div>
            <div class="black-pattern"></div>
        </section>
        <!-- End Section One -->

        <!-- Section Two -->
        <section id="section-two" class="section-page">
            <div class="content-section" class="container">
                <div class="ui grid nomargin">
                    <div class="nine wide column divcenter">
                        <div class="ui grid nomargin">
                            <div class="twelve wide column boxtext alignright">
                                <h5 class="uppercase alignright">Bolu Meranti</h5>
                                <p>Awal berdirinya, Bolu Meranti tidak memiliki gerai sama sekali. Pemilik Bolu Meranti hanya menitip jual kepada tantenya yang berada di Jalan Meranti. Dari sinilah nama Bolu Meranti mulai dikenal. Dalam hal kualitas rasa, tidak diragukan lagi memang jagoan. Tekstur cake lembut dan fresh.</p>
                                <a href="store" class="btn waves-effect waves-light">Kunjungi Toko <i class="mdi-action-store"></i></a>
                            </div>
                            <div class="four wide column boximg">
                                <img src="assets/img/opening/meranti.jpg" class="ui medium circular image" align="Bolu Meranti" title="Bolu Meranti" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <button id="scrolltoThree" class="btn-polos">
                    <i class="mdi-hardware-keyboard-arrow-down"></i>
                </button>
                <a href="product" class="btn-polos skipToSite">
                    Cari Produk <i class="mdi-hardware-keyboard-arrow-right"></i>
                </a>
            </div>
            <div class="black-pattern"></div>
        </section>
        <!-- End Section Two -->

        <!-- Section Three -->
        <section id="section-three" class="section-page">
            <div class="content-section" class="container">
                <div class="ui grid nomargin">
                    <div class="nine wide column divcenter">
                        <div class="ui grid nomargin">
                            <div class="four wide column boximg">
                                <img src="assets/img/opening/maichi.jpg" class="ui medium circular image" align="Keripik Maicih" title="Keripik Maicih" />
                            </div>
                            <div class="twelve wide column boxtext">
                                <h5 class="uppercase">Keripik Maicih</h5>
                                <p>Pertengahan 2010 Bob Merdeka mulai mendirikan Maicih, brand keripik pedas yang jadi pelopor makanan ringan pedas di Bandung, Jawa Barat. Tak membutuhkan waktu lama, keripik pedas Maicih milik Bob Merdeka ini terpilih menjadi The Hot Snack 2011 oleh majalah Rolling Stone Indonesia.</p>
                                <a href="store" class="btn waves-effect waves-light">Kunjungi Toko <i class="mdi-action-store"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <button id="scrolltoOne" class="btn-polos">
                    <i class="mdi-hardware-keyboard-arrow-up"></i>
                </button>
                <a href="product" class="btn-polos skipToSite">
                    Cari Produk <i class="mdi-hardware-keyboard-arrow-right"></i>
                </a>
            </div>
            <div class="black-pattern"></div>
        </section>
        <!-- End Section Three -->

    </div>

    <!-- JS -->
    <script src="assets/js/semantic.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/jquery.backstretch.js"></script>
    <script type="text/javascript">
        var widthScreen = $(window).width();
        var heightScreen = $(window).height();
        var positionContent = (heightScreen / 2) - 130;

        var contentHeight = $('.content-section').height() + 200;

        if(widthScreen > 640){
            var heightSectionOne = heightScreen;
            var heightSectionTwo = heightScreen * 2;
            var heightSectionThree = heightScreen * 3;
        } else {
            var heightSectionOne = contentHeight;
            var heightSectionTwo = contentHeight * 2;
            var heightSectionThree = contentHeight * 3;
        }

        function elementStyle(){

            if(widthScreen > 640){
                $('.section-page').height(heightScreen);
                $('#section-two').css({"top": heightScreen});
                $('#section-three').css({"top": heightScreen * 2});
            } else {
                $('.section-page').height(contentHeight);
                $('#section-two').css({"top": contentHeight});
                $('#section-three').css({"top": contentHeight * 2});
            }

            $('.content-section').css({'top': positionContent});
        }

        function elementLoad(){
            $('#section-one').backstretch([
                "<?php echo $base; ?>assets/img/landscape/Borobudur-Nothwest-view.jpg",
                ], {
                    fade: 750,
                    duration: 8000
            });

            $('#section-two').backstretch([
                "<?php echo $base; ?>assets/img/landscape/Danau Toba.jpg",
                ], {
                    fade: 750,
                    duration: 8000
            });

            $('#section-three').backstretch([
                "<?php echo $base; ?>assets/img/landscape/Gedung-Sate-Bandung-BY-Peter-van-Riel.jpg"
                ], {
                    fade: 750,
                    duration: 8000
            });

            setTimeout(function(){
                $('#section-one .content-section').fadeIn();
            }, 700);
        }

        function onScroll(){
            if(widthScreen > 640){
                var scrollPos = $(window).scrollTop();
                if(scrollPos >= (heightSectionOne - 100) && scrollPos <= (heightSectionOne + 100)){
                    $('#section-two .content-section').fadeIn();
                    $('#scrolltoThree').fadeIn();
                } else {
                    $('#section-two .content-section').fadeOut();
                    $('#scrolltoThree').fadeOut();
                }

                if(scrollPos >= heightSectionTwo){
                    $('#section-three .content-section').fadeIn();
                    $('#scrolltoOne').fadeIn();
                } else {
                    $('#section-three .content-section').fadeOut();
                    $('#scrolltoOne').fadeOut();
                }
            }
        }

        function animateBtnScrollTo(){
            $('#scrollto').transition('set looping').transition('bounce', '2000ms');
        }

        function clickBtnScrollToSectionTwo(){
            $('#scrolltoTwo').click(function(){
                $('html, body').animate({ scrollTop: heightSectionOne }, 800);
            });
        }

        function clickBtnScrollToSectionThree(){
            $('#scrolltoThree').click(function(){
                $('html, body').animate({ scrollTop: heightSectionTwo }, 800);
            });
        }

        function clickBtnScrollToOne(){
            $('#scrolltoOne').click(function(){
                $('html, body').animate({ scrollTop: 0 }, 800);
            });
        }

        $(document).ready(function(){
            elementStyle();
            elementLoad();
            clickBtnScrollToSectionTwo();
            clickBtnScrollToSectionThree();
            clickBtnScrollToOne();
        });

        $(window).scroll(function(event){
            onScroll();
        });
    </script>

</body>
</script>