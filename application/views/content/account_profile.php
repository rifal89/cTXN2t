<div id="profile-page">
	<div class="ui grid nomargin">
		<div class="nine wide column divcenter">
			<div class="card">
				<div id="preview">
					<button id="btnEditProfile" class="btn waves-effect waves-light"><i class="mdi-editor-mode-edit"></i> Edit</button>
					<div class="ui grid nomargin">
						<div class="six wide column">
							<img class="ui medium circular image" src="<?php echo assets_url;?>img/icon/food.png" />
						</div>
						<div class="ten wide column">
							<h5>Nama User</h5>
							<p>
								<i class="mdi-communication-email"></i>&nbsp;<a href="mailto:nama@mail.com">nama@mail.com</a>
							</p>
							<p>
								<i class="mdi-action-account-circle"></i>&nbsp;userName99
							</p>
							<p>
								<i class="mdi-action-lock"></i>&nbsp;*******
							</p>
							<p>
								<i class="mdi-communication-phone"></i>&nbsp;021-99887766
							</p>
						</div>
					</div>
					<div class="ui horizontal divider">Alamat</div>
					<div class="ui grid two column nomargin">
						<div class="column nopadding-bottom">
							<i class="mdi-social-public"></i> <strong>Propinsi</strong> : DKI Jakarta
						</div>
						<div class="column nopadding-bottom">
							<i class="mdi-social-location-city"></i> <strong>Kota</strong> : Jakarta
						</div>
						<div class="sixteen wide column">
							Perumahan ABC Blok F5, RT 05 / RW 03, Kelurahan XYZ, Kecamatan FGH.
						</div>
					</div>
				</div>

				<!-- form untuk edit -->
				<form id="edit" enctype="multipart/form-data" style="display:none;">
					<div class="ui grid nomargin">
						<div class="six wide column">
							<img class="ui medium circular image" src="<?php echo assets_url;?>img/icon/food.png" />
    						<div class="dropzone upload-file">
                				<input name="file" type="file" multiple />
            				</div>
						</div>
						<div class="ten wide column">
							<div class="input-field">
								<i class="mdi-social-person prefix"></i>
								<input id="name" type="text" name="name" class="validate" value="Nama User" autofocus />
								<label for="name"></label>
							</div>
							<div class="input-field">
								<i class="mdi-communication-email prefix"></i>
								<input id="email" type="text" name="email" class="validate" value="nama@mail.com" />
								<label for="email"></label>
							</div>
							<div class="input-field">
								<i class="mdi-action-account-circle prefix"></i>
								<input id="username" type="text" name="username" class="validate" value="userName99" />
								<label for="username"></label>
							</div>
							<div class="input-field">
								<i class="mdi-action-lock prefix"></i>
								<input id="password" type="password" name="password" class="validate" value="*******" />
								<label for="password"></label>
							</div>
							<div class="input-field">
								<i class="mdi-communication-phone prefix"></i>
								<input id="no-phone" type="text" name="no-phone" class="validate" value="021-99887766" />
								<label for="no-phone"></label>
							</div>
						</div>
					</div>
					<div class="ui horizontal divider">Alamat</div>
					<div class="ui grid two column nomargin">
						<div class="column nopadding-bottom">
							<div class="input-field select-withicon">
								<i class="mdi-social-public prefix"></i>
								<select name="province">
		    						<option value="" disabled>Pilih Propinsi</option>
		    						<option value="1" selected>DKI Jakarta</option>
		    						<option value="2">Propinsi 2</option>
		    						<option value="3">Propinsi 3</option>
								</select>
							</div>
						</div>
						<div class="column nopadding-bottom">
							<div class="input-field select-withicon">
								<i class="mdi-social-location-city prefix"></i>
								<select name="city">
		    						<option value="" disabled>Pilih Kota</option>
		    						<option value="1" selected>Jakarta</option>
		    						<option value="2">Kota 2</option>
		    						<option value="3">Kota 3</option>
								</select>
							</div>
						</div>
						<div class="sixteen wide column">
							<div class="input-field">
								<i class="mdi-action-home prefix"></i>
								<textarea id="address" name="address" class="materialize-textarea">Perumahan ABC Blok F5, RT 05 / RW 03, Kelurahan XYZ, Kecamatan FGH.</textarea>
							</div>
						</div>
					</div>
					<div class="ui grid two column nomargin">
						<div class="column">
							<button type="button" id="cancel-edit" class="waves-effect waves-light btn btn-error">Batal</button>
						</div>
						<div class="column">
							<button type="button" id="save-edit" class="waves-effect waves-light btn">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo assets_url;?>js/dropzone.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    	$('select').not('.disabled').material_select();

        $('#btnEditProfile').click(function(){
        	$('#preview').hide();
        	$('#edit').show();
        });

        $('#cancel-edit, #save-edit').click(function(){
        	$('#edit').hide();
        	$('#preview').show();
        });
    });
</script>