<?php include("../base.php"); ?>

<!DOCTYPE html>
<html lang="en">
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

	<div id="login-reg-page">
		<div class="wrapform-login">
			<div id="login-form" class="boxform">
				<div class="ui grid nomargin">
					<div class="six wide column divcenter content-form">
						<form method="post" action="product">
							<div class="aligncenter">
								<img src="assets/img/logo-black.png" alt="Jelajahi Indonesiamu" title="Jelajahi Indonesiamu" class="divcenter" />
								<div class="ui grid nomargin">
									<div class="twelve wide column divcenter">
										<div class="row">
											<div class="input-field">
										        <i class="mdi-action-account-circle prefix"></i>
										        <input id="email" type="text" name="email" />
										        <label for="email">Email / Username</label>
										    </div>
										    <div class="input-field">
										        <i class="mdi-action-lock prefix"></i>
										        <input id="password" type="password" name="password" />
										        <label for="password">Password</label>
										    </div>
										    <div class="input-field checkbox-field">
										    	<input type="checkbox" id="remember" name="remember" />
		    									<label for="remember">Ingatkan saya</label>
										    </div>
										    <div class="input-field">
										    	<button id="btnLogin" type="submit" class="waves-effect waves-light btn nomargin">Login</button>
										    </div>
										    <div class="input-field">
										    	<p class="aligncenter">Belum jadi member? <a id="regto-btn">Daftar disini</a></p>
										    </div>
									    </div>
									    <div class="ui horizontal divider">Atau</div>
									    <div class="row nomargin">
									    	<button class="waves-effect waves-light btn btn-fb-login"><i class="facebook square icon"></i>&nbsp;Login dengan Facebook</button>
									    	<button class="waves-effect waves-light btn btn-twit-login"><i class="twitter square icon"></i>&nbsp;Login dengan Twitter</button>
									    </div>
								    </div>
							    </div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="register-form" class="boxform">
				<div class="ui grid nomargin">
					<div class="eight wide column divcenter content-form">
						<form method="post" action="product">
							<div class="aligncenter">
								<img src="assets/img/logo-black.png" alt="Jelajahi Indonesiamu" title="Jelajahi Indonesiamu" class="divcenter" />
								<div class="ui grid two column nomargin">
									<div class="column">
										<div class="input-field">
											<i class="mdi-social-person prefix"></i>
											<input id="name" type="text" name="name" class="validate" />
											<label for="name">Nama Lengkap</label>
										</div>
										<div class="input-field">
											<i class="mdi-communication-email prefix"></i>
											<input id="email" type="text" name="email" class="validate" />
											<label for="email">Email</label>
										</div>
										<div class="input-field">
										    <i class="mdi-action-account-circle prefix"></i>
										    <input id="username" type="text" name="username" class="validate" />
										    <label for="username">Username</label>
										</div>
										<div class="input-field">
											<i class="mdi-action-lock prefix"></i>
											<input id="password" type="password" name="password" class="validate" />
											<label for="password">Password</label>
										</div>
										<div class="input-field">
										    <i class="mdi-communication-phone prefix"></i>
										    <input id="no-phone" type="text" name="no-phone" class="validate" />
										    <label for="no-phone">No. Telp / Handphone</label>
										</div>
									</div>
									<div class="column">
										<div class="input-field">
											<i class="mdi-action-shopping-cart prefix"></i>
											<input id="store-name" type="text" name="store-name" class="validate" />
											<label for="store-name">Nama Toko</label>
											<div class="ui store-namepop popup">
		    									Isi hanya bila anda ingin buka toko disini.
											</div>
										</div>
										<div class="input-field select-withicon">
											<i class="mdi-social-public prefix"></i>
											<select name="province">
		    									<option value="" disabled selected>Pilih Propinsi</option>
		    									<option value="1">Propinsi 1</option>
		    									<option value="2">Propinsi 2</option>
		    									<option value="3">Propinsi 3</option>
											</select>
										</div>
										<div class="input-field select-withicon">
											<i class="mdi-social-location-city prefix"></i>
											<select name="city">
		    									<option value="" disabled selected>Pilih Kota</option>
		    									<option value="1">Kota 1</option>
		    									<option value="2">Kota 2</option>
		    									<option value="3">Kota 3</option>
											</select>
										</div>
										<div class="input-field">
											<i class="mdi-action-home prefix"></i>
											<textarea id="address" name="address" class="materialize-textarea"></textarea>
											<label for="address">Alamat Lengkap</label>
										</div>
									</div>
								</div>
								<div class="ui grid two column nomargin">
									<div class="column nopadding-top">
										<div class="input-field nomargin">
											<a id="back-login" type="submit" class="waves-effect waves-light btn nomargin"><i class="mdi-navigation-chevron-left left"></i>&nbsp;Login</a>
										</div>
									</div>
									<div class="column nopadding-top">
										<div class="input-field nomargin">
											<button type="button" id="after-reg-btn" class="waves-effect waves-light btn nomargin">Selanjutnya&nbsp;<i class="mdi-navigation-chevron-right right"></i></button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="after-reg" class="boxform">
				<div class="ui grid nomargin">
					<div class="eight wide column divcenter content-form">
						<div class="ui grid two column" style="position:relative;">
							<div class="column">
								<a href="store">
									<p><i class="mdi-file-cloud-upload" style="color: #E51E1E"></i></p>
									<p>Upload produk anda</p>
								</a>
							</div>
							<div class="ui vertical divider">Atau</div>
							<div class="ui horizontal divider">Atau</div>
							<div class="column">
								<a href="product">
									<p><i class="mdi-action-shopping-cart" style="color: #1E88E5"></i></p>
									<p>Mulai Berbelanja</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="black-pattern"></div>
	</div>

	<!-- JS -->
    <script src="assets/js/semantic.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/jquery.backstretch.js"></script>
    <!-- Just for demo HTML -->
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End Jquery Cookie -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#login-reg-page').backstretch([
	            "<?php echo $base; ?>assets/img/landscape/Borobudur-Nothwest-view.jpg",
	            "<?php echo $base; ?>assets/img/landscape/Danau Toba.jpg",
	            "<?php echo $base; ?>assets/img/landscape/Indonesia-Jakarta-Monas-Adventure-Tour.jpg"
	            ], {
	                fade: 750,
	                duration: 8000
	        });

	        $('select').not('.disabled').material_select();

	        $('#store-name').popup({
		    	popup : $('.store-namepop.popup'),
		    	on    : 'focus'
			});

			$('#regto-btn').click(function(){
				$('#login-form').transition('horizontal flip');
				$('#register-form').transition('horizontal flip');
			});
			$('#back-login').click(function(){
				$('#register-form').transition('horizontal flip');
				$('#login-form').transition('horizontal flip');
			});
			$('#after-reg-btn').click(function(){
				$('#after-reg').transition('horizontal flip');
				$('#register-form').transition('horizontal flip');
			});

			$('#btnLogin, #after-reg-btn').click(function(){
				$.cookie('hasLogin', 'true', { path: '/' });
			});
    	});
    </script>

</body>
</html>