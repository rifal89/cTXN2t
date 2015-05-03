<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">&nbsp;</div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="shop icon"></i> &nbsp; Daftar Toko
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
        <div id="list-store" class="ui grid nomargin">
            <?php
                $i = 1;
                while($i <= 4){
            ?>
            <div class="four wide column">
                <a href="store">
                    <img class="ui medium circular image" src="assets/img/store/store1.jpg" />
                    <p class="store-name">Nama Toko</p>
                </a>
            </div>
            <div class="four wide column">
                <a href="store">
                    <img class="ui medium circular image" src="assets/img/store/store2.jpg" />
                    <p class="store-name">Nama Toko</p>
                </a>
            </div>
            <div class="four wide column">
                <a href="store">
                    <img class="ui medium circular image" src="assets/img/store/store3.jpg" />
                    <p class="store-name">Nama Toko</p>
                </a>
            </div>
            <div class="four wide column">
                <a href="store">
                    <img class="ui medium circular image" src="assets/img/store/store4.jpg" />
                    <p class="store-name">Nama Toko</p>
                </a>
            </div>
            <?php
                $i++; }
            ?>
        </div>
    </div>
</div>
