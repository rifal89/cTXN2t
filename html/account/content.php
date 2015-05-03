<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">&nbsp;</div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="user icon"></i> &nbsp; Akun Saya
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
        <div id="account-pages">
            <div class="col s12 nopadding">
                <ul class="tabs">
                    <li class="tab col s3">
                        <a class="active" href="#profile">
                            <i class="mdi-action-account-circle"></i><span class="tab-title">Profil</span>
                        </a>
                    </li>
                    <li class="tab col s3">
                        <a href="#mystore">
                            <i class="mdi-action-store"></i><span class="tab-title">Toko Saya</span>
                        </a>
                    </li>
                    <li class="tab col s3">
                        <a href="#selling">
                            <i class="mdi-editor-attach-money"></i><span class="tab-title">Data Penjualan</span>
                        </a>
                    </li>
                    <li class="tab col s3">
                        <a href="#buying">
                            <i class="mdi-action-shopping-cart"></i><span class="tab-title">Data Pembelian</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="profile" class="col s12 nopadding-side tab-content"></div>
            <div id="mystore" class="col s12 nopadding-side tab-content"></div>
            <div id="selling" class="col s12 nopadding-side tab-content"></div>
            <div id="buying" class="col s12 nopadding-side tab-content"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
function dropzoneImg(){
    if($.cookie('hasLogin') == "true"){
        $(".upload-file").dropzone({ 
            url: "assets/upload",
            dictDefaultMessage: "<p><i class='mdi-image-camera-alt'></i></p><p>Klik disini untuk upload foto atau tarik gambar ke area ini",
            dictFallbackMessage: "Browser anda tidak mendukung untuk drag drop images",
            dictFileTooBig: "File terlalu besar ({{filesize}}Mb). Maksimum ukuran file: {{maxFilesize}}Mb.",
            dictInvalidFileType: "Jenis file yang diupload bukan file image",
            dictResponseError: "Server responded with {{statusCode}} code.",
            dictCancelUpload: "Batal Upload",
            dictCancelUploadConfirmation: "Anda yakin untuk batal upload file?",
            dictRemoveFile: "Hapus file",
            dictMaxFilesExceeded: "Anda tidak dapat mengupload file lagi.",
        });
    }
}

function addCategoryPages(){
    $('#addCategory').click(function(){
        $.ajax({
            url: base + "account/mystore/addcategory",
            success: function(data){
                $('#account-pages #mystore').html(data);
                $('#formAdd input[type="text"]').focus();
                isoLayout();
                addCategoryProduct();
                addProduct();
                backToMyStore();
            }
        });
    });
}

function addCategoryProduct(){
    $('#formAdd button').click(function(){
        var valueInput = $('#formAdd input[type="text"]').val();
        $('#categoryName font').text(valueInput);
        $('#formAdd').hide();
        $('#categoryName').show();
    });

    $('#editCategoryName').click(function(){
        $('#formAdd').show();
        $('#categoryName').hide();
        $('#formAdd input[type="text"]').focus();
    });
}

function addProduct(){
    $('#addProduct').click(function(){
        $.ajax({
            url: base + "account/mystore/addproduct",
            success: function(data){
                $('#boxform-addproduct').html(data);
                //$('.modal-addproduct').modal('show');
                
                dropzoneImg();
                
                $('#cancel-submit').click(function(){
                    $('#boxform-addproduct').html("");
                });
            }
        });
    });
}

function toCategoryInMyStore(){
    $('.tocategory').click(function(){
        $.ajax({
            url: base + "account/mystore/category-detail",
            success: function(data){
                $('#account-pages #mystore').html(data);
                isoLayout();
                addCategoryProduct();
                addProduct();
                backToMyStore();
            }
        });
    });
}

function backToMyStore(){
    $('#backToMyStore').click(function(){
        $.ajax({
            url: base + "account/mystore",
            success: function(data){
                $('#account-pages #mystore').html(data);
                isoLayout();
                dropzoneImg();
                toCategoryInMyStore();
                addCategoryPages();
                editCoverStore();
                cancelEditCoverStore();
                saveCoverStore();
                editDataStore();
                cancelDataStore();
                saveDataStore();
            }
        });
    });
}

function editCoverStore(){
    $('#editCover').click(function(){
        $('#editCoverForm').show();
    });
}

function cancelEditCoverStore(){
    $('#cancelCover').click(function(){
        $('#editCoverForm').hide();
    });
}

function saveCoverStore(){
    $('#saveCover').click(function(){
        $('#editCoverForm').hide();
    });
}

function editDataStore(){
    $('#editDataStore').click(function(){
        $('#edit-desc-store').show();
        $('#desc-store').hide();
        $('#edit-desc-store #store-name').focus();
    });
}

function cancelDataStore(){
    $('#cancelEditDesc').click(function(){
        $('#edit-desc-store').hide();
        $('#desc-store').show();
    });
}

function saveDataStore(){
    $('#saveEditDesc').click(function(){
        $('#edit-desc-store').hide();
        $('#desc-store').show();
    });
}

function accountPages(){
    $.ajax({
        url: base + "account/profile",
        success: function(data){
            $('#account-pages #profile').html(data);
            isoLayout();
            dropzoneImg();
        }
    });

    $('#account-pages .tabs li a').click(function(){
        var thisHref = $(this).attr('href');
        var resThisHref = thisHref.replace('#','');
        $.ajax({
            url: base + "account/" + resThisHref,
            success: function(data){
                $('#account-pages .tab-content').html('');
                $('#account-pages #' + resThisHref).html(data);
                isoLayout();
                dropzoneImg();
                toCategoryInMyStore();
                addCategoryPages();
                editCoverStore();
                cancelEditCoverStore();
                saveCoverStore();
                editDataStore();
                cancelDataStore();
                saveDataStore();
            }
        });
    })
}

$(document).ready(function(){
    showElementAfterLogin();
    accountPages();
});
</script>