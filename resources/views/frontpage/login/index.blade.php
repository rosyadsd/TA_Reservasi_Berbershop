@extends('frontpage.layouts.main')
@section('container')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Login Admin
				</span>
			</div>

			<form class="login100-form validate-form" method="POST" action="/login">
				@csrf
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<span class="label-input100">No.hp Admin</span>
					<input class="input100" type="text" name="nohp_admin" id="nohp_admin" placeholder="Masukan No Hp">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" id="password" placeholder="Masukan Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
</html>