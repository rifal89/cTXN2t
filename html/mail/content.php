<style type="text/css">
    #maincontent {
        padding: 0 !important;
    }
</style>

<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">&nbsp;</div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="mail icon"></i> &nbsp; Kotak Surat
                        </a>
                    </div>
                    <div id="write-emailbtn" class="four wide column alignright">
                        <a class="waves-effect waves-light">
                            <i class="write icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="body-content" class="full column">
        <div id="mail-page" class="ui grid nomargin">
            <div id="boxleft-mailpage" class="sixteen wide column nopadding">
                <div id="list-email-box" class="list-email">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <a>
                                <img src="assets/img/avatar/elliot.jpg" alt="" class="circle">
                                <span class="title">Matt John Doe</span>
                                <div class="text-mail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</div>
                                <div class="secondary-content">26 Feb 2015</div>
                            </a>
                        </li>
                        <?php
                            $i = 1;
                            while($i <= 10){
                        ?>
                        <li class="collection-item avatar">
                            <a>
                                <img src="assets/img/avatar/elliot.jpg" alt="" class="circle">
                                <span class="title">Matt John Doe</span>
                                <div class="text-mail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</div>
                                <div class="secondary-content">26 Feb 2015</div>
                            </a>
                        </li>
                        <?php
                            $i++; }
                        ?> 
                    </ul>
                </div>
            </div>
            <div id="boxright-mailpage" class="seven wide column nopadding box-detail-mail">
                <div class="detail-mail">
                    <div class="timeline-mail">
                        <div class="list-email">
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <a>
                                        <img src="assets/img/avatar/elliot.jpg" alt="" class="circle">
                                        <span class="title">Matt John Doe</span>
                                        <div class="text-mail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="secondary-content">26 Feb 2015</div>
                                    </a>
                                </li>
                                <li class="collection-item avatar">
                                    <a>
                                        <img src="assets/img/avatar/matt.jpg" alt="" class="circle">
                                        <span class="title">Saya</span>
                                        <div class="text-mail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                                        <div class="secondary-content">26 Feb 2015</div>
                                    </a>
                                </li>
                                <li class="collection-item avatar">
                                    <a>
                                        <img src="assets/img/avatar/elliot.jpg" alt="" class="circle">
                                        <span class="title">Matt John Doe</span>
                                        <div class="text-mail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="secondary-content">26 Feb 2015</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="boxtext-mail">
                        <form method="" enctype="multipart/form-data" class="ui grid nomargin">
                            <div class="sixteen wide column input-field ui form">
                                <textarea id="msg-email" name="msg-email" placeholder="Ketik pesan anda.."></textarea>
                            </div>
                            <div class="sixteen wide column input-field">
                                <div class="dropzone upload-file-mail">
                                    <input name="file" type="file" />
                                </div>
                                <button class="btn waves-effect waves-light right">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="write-mail">
                    <form action="" method="post" class="ui grid nomargin">
                        <div class="sixteen wide column">
                            <div class="input-field">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input id="from" type="text" name="from" class="validate">
                                <label for="from">Kepada</label>
                            </div>
                            <div class="input-field">
                                <i class="mdi-editor-mode-edit prefix"></i>
                                <textarea id="message" name="message" class="materialize-textarea"></textarea>
                                <label for="message">Tulis Pesan</label>
                            </div>
                            <div class="input-field">
                                <div class="dropzone upload-file-mail">
                                    <input name="file" type="file" />
                                </div>
                                <button class="btn waves-effect waves-light right">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/dropzone.js"></script>
<script type="text/javascript">
function resizeElmMailPage(){
    var headContentHeight = $('#head-content').height();
    var navWrapperMobileHeight = $('#header .nav-wrapper').height();

    if(widthScreen >= 641){
        var listEmailHeight = heightScreen - headContentHeight;
        $("#mail-page #list-email-box").height(listEmailHeight - 1);

        var heightBoxDetailMail = heightScreen - headContentHeight;
        $("#mail-page .box-detail-mail").height(heightBoxDetailMail);

        var getHeightBoxTextMail = $("#mail-page .box-detail-mail .boxtext-mail").height();
        var heightTimelineMail = heightBoxDetailMail - getHeightBoxTextMail;
        $("#mail-page .box-detail-mail .timeline-mail").height(heightTimelineMail);
    } else {
        var listEmailHeight = heightScreen - (headContentHeight + navWrapperMobileHeight);
        $("#mail-page #list-email-box").height(listEmailHeight - 1);

        var heightBoxDetailMail = heightScreen - (headContentHeight + navWrapperMobileHeight);
        $("#mail-page .box-detail-mail").height(heightBoxDetailMail - 5);

        var getHeightBoxTextMail = $("#mail-page .box-detail-mail .boxtext-mail").height();
        var heightTimelineMail = heightBoxDetailMail - getHeightBoxTextMail;
        $("#mail-page .box-detail-mail .timeline-mail").height(heightTimelineMail);
    }
}

function openWriteMail(){
    $('#write-emailbtn a').click(function(){
        $('#boxleft-mailpage').removeClass('sixteen wide column nopadding');
        $('#boxleft-mailpage').addClass('nine wide column nopadding');
        $('#boxright-mailpage').css({
            'display' : 'inline-block'
        });
        $('.box-detail-mail .detail-mail').hide();
        $('.box-detail-mail .write-mail').show();

        $('#list-email-box .collection-item a').click(function(){
            $('.box-detail-mail .detail-mail').show();
            $('.box-detail-mail .write-mail').hide();
            resizeElmMailPage();
        });
    });
}

function dropzoneImgMail(){
    if($.cookie('hasLogin') == "true"){
        $(".upload-file-mail").dropzone({ 
            url: "assets/upload",
            dictDefaultMessage: '<i class="mdi-editor-attach-file"></i>',
            dictFallbackMessage: "Browser anda tidak mendukung untuk drag drop images",
            dictFileTooBig: "File terlalu besar ({{filesize}}Mb). Maksimum ukuran file: {{maxFilesize}}Mb.",
            dictInvalidFileType: "Jenis file yang diupload bukan file image",
            dictResponseError: "Server responded with {{statusCode}} code.",
            dictCancelUpload: "Batal Upload",
            dictCancelUploadConfirmation: "Anda yakin untuk batal upload file?",
            dictRemoveFile: "X",
            dictMaxFilesExceeded: "Anda tidak dapat mengupload file lagi.",
        });
    }
}

function mailPages(){
    resizeElmMailPage();
    openWriteMail();
    dropzoneImgMail();

    if(widthScreen >= 800){
        $('#list-email-box .collection-item a').click(function(){
            $('#list-email-box .collection-item a').removeClass('active');
            $(this).addClass('active');
            $('#boxleft-mailpage').removeClass('sixteen wide column nopadding');
            $('#boxleft-mailpage').addClass('nine wide column nopadding');
            $('#boxright-mailpage').css({
                'display' : 'inline-block'
            });
            resizeElmMailPage();
            openWriteMail();
        });
    } else {
        $('#list-email-box .collection-item a').click(function(){
            $('#boxleft-mailpage').hide();
            $('#boxright-mailpage').show();
            $('#close-detail').html('<a class="waves-effect waves-light"><i class="arrow left icon"></i></a>');
            $('#close-detail').click(function(){
                $('#boxright-mailpage').hide();
                $('#boxleft-mailpage').show();
                $('#close-detail').html('');
            });
            resizeElmMailPage();
            openWriteMail();
        });
    }
}

$(document).ready(function(){
    mailPages();
});
</script>