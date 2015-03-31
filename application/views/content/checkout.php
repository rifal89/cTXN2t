<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">
                        <a href="<?php echo base_url(); ?>" class="waves-effect waves-light">
                            <i class="arrow left icon"></i>
                        </a>
                    </div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="shop icon"></i> &nbsp; Checkout
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
        <div class="ui grid stackable nomargin">
            <div id="checkout-left" class="twelve wide column">
                <div id="list-product-cart" class="ui divided items">
                    <div id="head-product-cart" class="item">
                        <div class="image">
                            Product
                        </div>
                        <div class="content">
                            <div class="ui grid">
                                <div class="seven wide column">&nbsp;</div>
                                <div class="nine wide column">
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td class="aligncenter">Harga</td>
                                                <td class="aligncenter">Quantity</td>
                                                <td class="aligncenter">Total</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo assets_url;?>img/product/1.jpg" onclick="window.location.href='<?php echo base_url(); ?>detail-product'" />
                        </div>
                        <div class="content">
                            <div class="ui grid body-item">
                                <div class="seven wide column">
                                    <a href="detail-product" class="product-name">Sepatu Wanita</a>
                                    <div class="meta">
                                        <p>
                                            <i class="mdi-action-favorite pink-color"></i> 120 &nbsp;
                                            <i class="mdi-action-shopping-cart blue-color"></i> 30
                                        </p>
                                    </div>
                                    <div class="description">
                                        <div class="ui grid two column">
                                            <div class="column">
                                                <p><strong>Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Pengiriman</option>
                                                    <option value="jne" selected>JNE</option>
                                                    <option value="tiki">TIKI</option>
                                                    <option value="pos">POS</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Paket Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Paket Pengiriman</option>
                                                    <option value="regular" selected>Regular</option>
                                                    <option value="express">Express</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Asuransi</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Asuransi</option>
                                                    <option value="1" selected>Ya</option>
                                                    <option value="2">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nine wide column">
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Harga</td>
                                                <td>Quantity</td>
                                                <td>Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="aligncenter">Rp 100.000,-</td>
                                                <td class="aligncenter">
                                                    <input type="text" class="quantity nomargin aligncenter" placeholder="Quantity"  value="1" />
                                                </td>
                                                <td class="alignright">Rp 100.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Pengiriman</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Pengiriman</strong></td>
                                                <td class="alignright">Rp 15.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Sub Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Sub Total</strong></td>
                                                <td class="alignright">Rp 115.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ui grid two column foot-item-cart nomargin-side">
                                <div class="column">
                                    <a href="#">Nama Toko</a>
                                </div>
                                <div class="column alignright">
                                    <button class="btn-polos">
                                        <i class="trash icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo assets_url;?>img/product/Dress.jpg" onclick="window.location.href='<?php echo base_url(); ?>detail-product'" />
                        </div>
                        <div class="content">
                            <div class="ui grid body-item">
                                <div class="seven wide column">
                                    <a href="detail-product" class="product-name">Dress Girls</a>
                                    <div class="meta">
                                        <p>
                                            <i class="mdi-action-favorite pink-color"></i> 120 &nbsp;
                                            <i class="mdi-action-shopping-cart blue-color"></i> 30
                                        </p>
                                    </div>
                                    <div class="description">
                                        <div class="ui grid two column">
                                            <div class="column">
                                                <p><strong>Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Pengiriman</option>
                                                    <option value="jne" selected>JNE</option>
                                                    <option value="tiki">TIKI</option>
                                                    <option value="pos">POS</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Paket Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Paket Pengiriman</option>
                                                    <option value="regular" selected>Regular</option>
                                                    <option value="express">Express</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Asuransi</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Asuransi</option>
                                                    <option value="1" selected>Ya</option>
                                                    <option value="2">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nine wide column">
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Harga</td>
                                                <td>Quantity</td>
                                                <td>Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="aligncenter">Rp 100.000,-</td>
                                                <td class="aligncenter">
                                                    <input type="text" class="quantity nomargin aligncenter" placeholder="Quantity"  value="2" />
                                                </td>
                                                <td class="alignright">Rp 200.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Pengiriman</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Pengiriman</strong></td>
                                                <td class="alignright">Rp 15.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Sub Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Sub Total</strong></td>
                                                <td class="alignright">Rp 215.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ui grid two column foot-item-cart nomargin-side">
                                <div class="column">
                                    <a href="#">Nama Toko</a>
                                </div>
                                <div class="column alignright">
                                    <button class="btn-polos">
                                        <i class="trash icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo assets_url;?>img/product/3.jpg" onclick="window.location.href='<?php echo base_url(); ?>detail-product'" />
                        </div>
                        <div class="content">
                            <div class="ui grid body-item">
                                <div class="seven wide column">
                                    <a href="detail-product" class="product-name">Tas Travelling</a>
                                    <div class="meta">
                                        <p>
                                            <i class="mdi-action-favorite pink-color"></i> 120 &nbsp;
                                            <i class="mdi-action-shopping-cart blue-color"></i> 30
                                        </p>
                                    </div>
                                    <div class="description">
                                        <div class="ui grid two column">
                                            <div class="column">
                                                <p><strong>Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Pengiriman</option>
                                                    <option value="jne" selected>JNE</option>
                                                    <option value="tiki">TIKI</option>
                                                    <option value="pos">POS</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Paket Pengiriman</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Paket Pengiriman</option>
                                                    <option value="regular" selected>Regular</option>
                                                    <option value="express">Express</option>
                                                </select>
                                            </div>
                                            <div class="column">
                                                <p><strong>Asuransi</strong></p>
                                            </div>
                                            <div class="column">
                                                <select name="pengiriman">
                                                    <option value="" disabled>Asuransi</option>
                                                    <option value="1" selected>Ya</option>
                                                    <option value="2">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nine wide column">
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Harga</td>
                                                <td>Quantity</td>
                                                <td>Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="aligncenter">Rp 100.000,-</td>
                                                <td class="aligncenter">
                                                    <input type="text" class="quantity nomargin aligncenter" placeholder="Quantity"  value="1" />
                                                </td>
                                                <td class="alignright">Rp 100.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Pengiriman</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Pengiriman</strong></td>
                                                <td class="alignright">Rp 15.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="responsive-table price-item">
                                        <thead>
                                            <tr>
                                                <td>Sub Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="alignright label-pc"><strong>Sub Total</strong></td>
                                                <td class="alignright">Rp 115.000,-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ui grid two column foot-item-cart nomargin-side">
                                <div class="column">
                                    <a href="#">Nama Toko</a>
                                </div>
                                <div class="column alignright">
                                    <button class="btn-polos">
                                        <i class="trash icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui grid">
                    <div class="full column input-field">
                        <textarea class="materialize-textarea nopadding nomargin"></textarea>
                        <label>Keterangan Tambahan</label>
                    </div>
                </div>
            </div>
            <div id="checkout-right" class="four wide column right">
                <form method="post" action="invoice">
                    <p><strong>Kirim order ke</strong></p>
                    <div class="input-field">
                        <select id="address-select" name="alamat">
                            <option value="" disabled>Pilih Alamat</option>
                            <option value="alamat1" selected>Alamat 1</option>
                            <option value="alamat2">Alamat 2</option>
                            <option value="alamat3">Alamat 3</option>
                        </select>
                    </div>
                    <div class="address-shipping">
                        Jl. Jend Ahmad Yani No. 87<br/>
                        Kelurahan Kalibaru<br/>
                        Kecamatan Medan Satria<br/>
                        Bekasi 17131, Indonesia
                    </div>
                    <a id="addAddress" class="btn waves-effect waves-light">
                        Tambahkan Alamat
                    </a>
                    <p>&nbsp;</p>
                    <p><strong>Cara Pembayaran</strong></p>
                    <p>
                        <input name="payment" type="radio" id="transfer" />
                        <label for="transfer">Transfer Bank</label>
                    </p>
                    <p>
                        <input name="payment" type="radio" id="paypal" />
                        <label for="paypal">Paypal</label>
                    </p>
                    <p>&nbsp;</p>
                    <p><strong>Total yang harus dibayarkan</strong></p>
                    <h4 class="grand-total aligncenter">Rp 445.000,-</h4>
                    <button id="submitOrder" class="btn waves-effect waves-light">
                        Submit Order
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#address-select').change(function(){
            var address1 = 'Jl. Jend Ahmad Yani No. 87<br/>Kelurahan Kalibaru<br/>Kecamatan Medan Satria<br/>Bekasi 17131, Indonesia';
            var address2 = 'Jl. Jend Sudirman No. 33<br/>Kelurahan Kalibaru<br/>Kecamatan Medan Satria<br/>Bekasi 17131, Indonesia';
            var address3 = 'Jl. M.T Haryono<br/>Jakarta 12950, Indonesia';

            var addressVal = $(this).val();

            if(addressVal == 'alamat1'){
                $('.address-shipping').html(address1);
            } else if(addressVal == 'alamat2'){
                $('.address-shipping').html(address2);
            } else if(addressVal == 'alamat3'){
                $('.address-shipping').html(address3);
            }
        });

        var heightCheckoutLeft = $('#checkout-left').height();
        var heightCheckoutRight = $('#checkout-right').height();

        if(heightCheckoutLeft >= heightCheckoutRight){
            $('#checkout-left').addClass('border-right');
        } else {
            $('#checkout-right').addClass('border-left');
        }
    });
</script>