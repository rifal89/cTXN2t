<div class="boxAddProduct ui grid">
    <h5 class="aligncenter">Upload Produk</h5>
    <div class="ten wide column divcenter">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="dropzone upload-file">
                <input name="file" type="file" multiple />
            </div>
            <div class="ui grid two column nomargin">
                <div class="input-field column">
                    <input type="text" name="nama-product" placeholder="Nama Produk" />
                </div>
                <div class="input-field column">
                    <input type="text" name="harga" placeholder="Harga" />
                </div>
            </div>
            <div class="ui grid nomargin">
                <div class="full column input-field">
                    <textarea class="materialize-textarea nopadding nomargin"></textarea>
                    <label>Keterangan</label>
                </div>
            </div>
            <div class="ui grid nomargin">
                <div class="full column input-field">
                    <button id="submit-product" class="btn waves-effect waves-light">
                        Simpan
                    </button>
                    <div id="cancel-submit" class="btn btn-error waves-effect waves-light">
                        Batal
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>