<div id="store">
    <div id="head-store"></div>
    <div id="img-store">
        <img class="ui medium circular image logo-store" src="assets/img/icon/food.png" />
    </div>
    <div id="desc-store">
        <div class="ui grid nomargin">
            <div class="sixteen column nopadding">
                <div class="ui star rating rating-disabled" data-rating="4" data-max-rating="5"></div>
                <h3 class="aligncenter store-name">Nama Toko</h3>
            </div>
        </div>
        <div class="ui grid two column nomargin">
            <div class="column">
                <p><strong class="uppercase title"><i class="mdi-action-store"></i>&nbsp;Tentang Kami</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-place"></i>&nbsp;Alamat Kami</strong></p>
                        </td>
                        <td>
                            <p>Jl. Ahmad Yani No 79</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-public"></i>&nbsp;Propinsi</strong></p>
                        </td>
                        <td>
                            <p>DKI Jakarta</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-location-city"></i>&nbsp;Kota</strong></p>
                        </td>
                        <td>
                            <p>Jakarta</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-local-phone"></i>&nbsp;Phone</strong></p>
                        </td>
                        <td>
                            <p><a href="tel:622198765432">+6221-98765432</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-communication-email"></i>&nbsp;Email</strong></p>
                        </td>
                        <td>
                            <p><a href="mailto:toko@mail.com">toko@mail.com</a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="body-store">
        <div id="list-item">
            <?php
                $i = 1;
                while($i <= 12){
            ?>
            <div class="card items-ui">
                <div class="head-card">
                    Nama Kategori
                </div>
                <div class="card-image">
                    <a href="store/product">
                        <img src="assets/img/product/Maichi2.jpg" class="activator" />
                    </a>
                </div>
                <div class="card-content">
                    <div class="table imgcategory-small">
                        <a href="store/product" class="table-cell imgcategory" style="background-image: url('assets/img/product/Dress.jpg');"></a>
                        <a href="store/product" class="table-cell imgcategory" style="background-image: url('assets/img/product/batik-keris.jpg');"></a>
                        <a href="store/product" class="table-cell imgcategory" style="background-image: url('assets/img/product/bolgul3in1.jpg');"></a>
                    </div>
                </div>
            </div>
            <?php
                $i++; };
            ?>
        </div>
        <div id="page_nav">
            <a href="<?php echo $base; ?>store/category-pages/2/index.php"></a>
        </div>
    </div>
</div>

<div id="tempBtnAddCategory" style="display:none;">
    <div id="addCategory" class="card items-ui btnAddItem">
        <div class="boxAddItem">
            <a href="store/addcategory/index.php#formAdd" class="table nomargin">
                <div class="contentAddItem">
                    <i class="add circle icon"></i>
                    Tambah Kategori Baru
                </div>
            </a>
        </div>
    </div>
</div>

<script src="assets/js/jquery.backstretch.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#head-store').backstretch([
            "<?php echo $base; ?>assets/img/landscape/Borobudur-Nothwest-view.jpg",
            ], {
                fade: 750,
                duration: 8000
        });
    });
</script>
