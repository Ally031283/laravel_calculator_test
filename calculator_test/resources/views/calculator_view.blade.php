<!doctype html>
    <head>
        <title>CALCULATOR TEST</title>

        <!-- Fonts -->
        	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
			body {
				padding-top: 90px;
			}
			.panel-login {
				border-color: #ccc;
				-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
				-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
				box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			}
			.panel-login>.panel-heading {
				color: #00415d;
				background-color: #fff;
				border-color: #fff;
				text-align:center;
			}
			.panel-login>.panel-heading a{
				text-decoration: none;
				color: #666;
				font-weight: bold;
				font-size: 15px;
				-webkit-transition: all 0.1s linear;
				-moz-transition: all 0.1s linear;
				transition: all 0.1s linear;
			}
			.panel-login>.panel-heading a.active{
				color: #029f5b;
				font-size: 18px;
			}
			.panel-login>.panel-heading hr{
				margin-top: 10px;
				margin-bottom: 0px;
				clear: both;
				border: 0;
				height: 1px;
				background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
				background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
				background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
				background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			}
			.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
				height: 45px;
				border: 1px solid #ddd;
				font-size: 16px;
				-webkit-transition: all 0.1s linear;
				-moz-transition: all 0.1s linear;
				transition: all 0.1s linear;
			}
			.panel-login input:hover,
			.panel-login input:focus {
				outline:none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
				border-color: #ccc;
			}
			.btn-login {
				background-color: #59B2E0;
				outline: none;
				color: #fff;
				font-size: 14px;
				height: auto;
				font-weight: normal;
				padding: 14px 0;
				text-transform: uppercase;
				border-color: #59B2E6;
			}
			.btn-login:hover,
			.btn-login:focus {
				color: #fff;
				background-color: #53A3CD;
				border-color: #53A3CD;
			}
			.forgot-password {
				text-decoration: underline;
				color: #888;
			}
			.forgot-password:hover,
			.forgot-password:focus {
				text-decoration: underline;
				color: #666;
			}

			.btn-register {
				background-color: #1CB94E;
				outline: none;
				color: #fff;
				font-size: 14px;
				height: auto;
				font-weight: normal;
				padding: 14px 0;
				text-transform: uppercase;
				border-color: #1CB94A;
			}
			.btn-register:hover,
			.btn-register:focus {
				color: #fff;
				background-color: #1CA347;
				border-color: #1CA347;
			}

		</style>
		<!-- Styles -->
        </head>
    <body>
        <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Circle</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form action="{{action('HelloworldController@index')}}" method="post">
									{{csrf_field()}}
									<div class="form-group">
										<input type="text" name="radius" placeholder="Base" class="form-control" value="{{ old('radius') }}">
									</div>
									<?php if(!empty($result)) { ?>
									<h2>Surface of a circle is : {{ $result }}</h2>
									<?php } ?>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" tabindex="4" class="form-control btn btn-login" value="Calculate ">
											</div>
										</div>
									</div>

								</form>
								<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a class="active" id="login-form-link"><B>TRIANGLE<B></a>
							</div>
						<hr>
					</div>
								<form action="{{action('HelloworldController@index')}}" method="post">
									{{csrf_field()}}
									<div class="form-group">
										<input type="text" name="base" id="Base" tabindex="1" class="form-control" placeholder="Base" value="">
									</div>
									<div class="form-group">
										<input type="text" name="height" id="Height" tabindex="1" class="form-control" placeholder="Height Address" value="">
									</div>
									
									<?php if(!empty($result1)){ ?>
									<h2>Surface of a triangle is : {{ $result1 }}</h2>
									<?php } ?>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit1" id="Height-submit" tabindex="4" class="form-control btn btn-register" value="Calculate">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </body>
</html>