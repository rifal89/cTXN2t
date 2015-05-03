<?php include("../../base.php"); ?>

<div id="store">
    <div id="head-store">
        <button id="editCover" class="btn waves-effect waves-light">
            <i class="mdi-editor-mode-edit"></i> Edit
        </button>
        <div id="editCoverForm">
            <div class="btnEditSaveCover">
                <button id="cancelCover" class="btn btn-error waves-effect waves-light">
                    <i class="mdi-content-clear"></i> Batal
                </button>
                <button id="saveCover" class="btn waves-effect waves-light">
                    <i class="mdi-action-done"></i> Simpan
                </button>
            </div>
            <div class="dropzone upload-file">
                <input name="file" type="file" name="save-cover" />
            </div>
        </div>
    </div>
    <div id="img-store">
        <div class="ui medium circular image logo-store">
            <img src="assets/img/icon/food.png" />
            <div class="editLogoStore">
                <div class="dropzone upload-file">
                    <input name="file" type="file" name="save-logo" />
                </div>
            </div>
        </div>
    </div>
    <div id="desc-store">
        <div class="ui grid nomargin">
            <div class="sixteen column nopadding">
                <div class="ui star rating rating-disabled" data-rating="4" data-max-rating="5"></div>
                <h3 class="aligncenter store-name">
                    Nama Toko
                    <button id="editDataStore" class="btn btn-circle waves-effect waves-light">
                        <i class="mdi-editor-mode-edit"></i>
                    </button>
                </h3>
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
    <div id="edit-desc-store">
        <div class="ui grid nomargin">
            <div class="five wide column divcenter nopadding">
                <div class="input-field">
                    <input type="text" id="store-name" name="store-name" placeholder="Ketik Nama Toko" autofocus="true" value="Nama Toko" />
                </div>
            </div>
        </div>
        <div class="ui grid two column nomargin">
            <div class="column">
                <p><strong class="uppercase title"><i class="mdi-action-store"></i>&nbsp;Tentang Kami</strong></p>
                <div class="input-field">
                    <textarea name="about-store" id="about-store" class="materialize-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                </div>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-place"></i>&nbsp;Alamat Kami</strong></p>
                        </td>
                        <td>
                            <div class="input-field">
                                <textarea name="about-store" class="materialize-textarea">Jl. Ahmad Yani No 79, Jakarta, Indonesia.</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-public"></i>&nbsp;Propinsi</strong></p>
                        </td>
                        <td>
                            <div class="input-field">
                                <select name="province">
                                    <option value="" disabled>Pilih Propinsi</option>
                                    <option value="1" selected>DKI Jakarta</option>
                                    <option value="2">Propinsi 2</option>
                                    <option value="3">Propinsi 3</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-social-location-city"></i>&nbsp;Kota</strong></p>
                        </td>
                        <td>
                            <div class="input-field">
                                <select name="city">
                                    <option value="" disabled>Pilih Kota</option>
                                    <option value="1" selected>Jakarta</option>
                                    <option value="2">Kota 2</option>
                                    <option value="3">Kota 3</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-maps-local-phone"></i>&nbsp;Phone</strong></p>
                        </td>
                        <td>
                            <div class="input-field">
                                <input id="no-phone" type="text" name="no-phone" value="6221-98765432" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong class="uppercase title"><i class="mdi-communication-email"></i>&nbsp;Email</strong></p>
                        </td>
                        <td>
                            <div class="input-field">
                                <input id="email" type="text" name="email" value="toko@mail.com" />
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="ui grid nomargin">
            <div class="full column aligncenter">
                <button id="cancelEditDesc" class="btn btn-error waves-effect waves-light">
                    <i class="mdi-content-clear"></i> Batal
                </button>
                <button id="saveEditDesc" class="btn waves-effect waves-light">
                    <i class="mdi-action-done"></i> Simpan
                </button>
            </div>
        </div>
    </div>
    <div id="body-store">
        <div id="list-item">
        	<div id="addCategory" class="card items-ui btnAddItem">
		        <div class="boxAddItem">
		            <a class="table nomargin">
		                <div class="contentAddItem">
		                    <i class="add circle icon"></i>
		                    Tambah Kategori Baru
		                </div>
		            </a>
		        </div>
		    </div>
            <?php
                $i = 1;
                while($i <= 12){
            ?>
            <div class="card items-ui category-item">
                <div class="head-card">
                    Nama Kategori
                </div>
                <div class="card-image">
                    <a class="tocategory">
                        <img src="assets/img/product/Maichi2.jpg" class="activator" />
                    </a>
                </div>
                <div class="card-content">
                    <div class="table imgcategory-small">
                        <a class="tocategory table-cell imgcategory" style="background-image: url('assets/img/product/Dress.jpg');"></a>
                        <a class="tocategory table-cell imgcategory" style="background-image: url('assets/img/product/batik-keris.jpg');"></a>
                        <a class="tocategory table-cell imgcategory" style="background-image: url('assets/img/product/bolgul3in1.jpg');"></a>
                    </div>
                </div>
            </div>
            <?php
                $i++; };
            ?>
        </div>
        <div id="page_nav">
            <a href="<?php echo $base; ?>account/mystore/category-pages/2/index.php"></a>
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

        $('.ui.rating-disabled').rating('disable');
        $('select').not('.disabled').material_select();
    });
</script>
