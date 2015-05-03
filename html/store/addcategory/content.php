<div id="store">
    <div id="head-store">
        <img class="ui medium circular image logo-store" src="assets/img/icon/food.png" />
        <h3 class="store-name">Nama Toko</h3>
    </div>
    <div id="desc-store">
        <div class="ui grid nomargin">
            <div class="six wide column">
                <p><strong class="uppercase title"><i class="mdi-action-store"></i>&nbsp;Tentang Kami</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="four wide column">
                &nbsp;
            </div>
            <div class="six wide column">
                <p><strong class="uppercase title"><i class="mdi-maps-place"></i>&nbsp;Alamat Kami</strong></p>
                <p>Jl. Ahmad Yani No 79, Jakarta, Indonesia</p>
                <p><strong class="uppercase title"><i class="mdi-maps-local-phone"></i>&nbsp;Phone : </strong><a href="tel:622198765432">+6221-98765432</a>, <a href="tel:628123456789">+628123456789</a></p>
                <p><strong class="uppercase title"><i class="mdi-communication-email"></i>&nbsp;Email : </strong><a href="mailto:toko@mail.com">toko@mail.com</a></p>
            </div>
        </div>
    </div>
    <div id="body-store">
        <div id="formAdd" class="ui grid nomargin">
            <div class="eight wide column divcenter">
                <div class="ui grid nomargin">
                    <div class="input-field twelve wide column">
                        <input type="text" placeholder="Ketik Nama Kategori" autofocus="true" />
                    </div>
                    <div class="input-field four wide column">
                        <button class="btn waves-effect waves-light">
                            SIMPAN 
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <h4 id="categoryName" class="aligncenter" style="display:none;">
            <font></font>
            <button id="editCategoryName" class="btn btn-circle waves-effect waves-light">
                <i class="mdi-editor-mode-edit"></i>
            </button>
        </h4>

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
        </div>
        <div id="page_nav"></div>
    </div>
</div>

<script src="assets/js/jquery.backstretch.js"></script>
<script src="assets/js/dropzone.js"></script>
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