@extends('layouts.main')

@section('page_name')
indexHome  @stop
@section('content')
<div class="login-alert">
    @if(Session::has('login_message'))
    <div class="alert-box success">
        <h2>{{ Session::get('login_message') }}</h2>
    </div>
    @endif
</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="logo-wrapper">
				<div id="logo">
					<h1 class="center">{{HTML::image('static/img/logo-title.png', 'TGLD Logo')}}</h1>
				</div>
				<div id="subLogo">
					<h4 class="center">Because Simple Is Everything.</h4>
				</div>
			</div>
			<div class="row">
				<div class="large-4  large-centered columns">
					<div class="center" id="loginForm">
						{{ Form::open(['url' => URL::route('login')]) }}

							<input type="text" class="login-username login_input" name="username" placeholder="Username">

							<input type="password"  class="login-password login_input" name="password" placeholder="Password">

							<span class="error"></span>

							<div class="extra-login-inputs">
								<div class="left">
									<input type="checkbox"  class="login-remember" name="remember" id="remember">
									<label class="extra-login-input" for="remember">Remember me?</label><br/>
								</div>
								<div class="right">
									<a href="#" class="extra-login-input">Forgot Password?</a>
								</div>
							</div>

							<input type="submit" value="Sign In" class="button" id="loginSubmit">

                            <a href="#" id="backLogin" class="left"><i class="fa fa-long-arrow-left"></i> Go Back</a>

						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop