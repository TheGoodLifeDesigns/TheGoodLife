@extends('layouts.main')

@section('page_name')
contactWrapper @stop

@section('content')

<div class="row">
	<div class="large-12 columns">
		<div class="title">
			<div class="row">
				<div class="large-6 columns">
					<h1 class=" contact-title left-contact-title">The<br/>Good<br/>Life<br/>Design<br/></h1>
				</div>
				<div class="large-6 large-offset-6 columns">
					<h1 class="left  contact-title right-contact-title">Because<br/>Simple<br/>Is<br/>Everything<br/></h1>
				</div>
			</div>
		</div><!-- END TITLE -->
		<div id="mailFormWrapper">
			{{ Form::open() }}
				<div class="letter-block">
					<div class="top-letter">
						<div class="top-letter-left-side">
							<ul class="list-letter-title">
								<li>TGLD</li>
								<li>Contact@tgld.co</li>
								<li>(954) 303-0759</li>
							</ul>
						</div>
						<div class="top-letter-right-side">
							<ul class="list-letter-inputs">
								<li><div class="full-name-contact-letter-icon"><input type="text" name="name" placeholder="Full Name"></div></li>
								<li><div class="email-contact-letter-icon"><input type="email" name="email" placeholder="Email"></div></li>
								<li><div class="phone-contact-letter-icon"><input type="tel" name="phone" placeholder="Phone"></div></li>
							</ul>
						</div>
					</div>
					<div class="bottom-letter">
						<textarea placeholder="Like Our Work?"></textarea>
					</div>
				</div>
			<div class="bottom-mail">
				<div></div>
			</div>
			<div class="contact-btn center">
						<div class="contact-submit-btn"></div>
					</div>
			{{ Form::close() }}	
		</div>
	</div>
</div>

@stop