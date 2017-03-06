<div class="card card-signup">
	<form class="form" 
		method="POST" 
		action="{{ url('/register') }}"
		role="form">

		{{ csrf_field() }}


		<div class="header header-primary text-center">
			<h4>Sign Up</h4>
			<div class="social-line">
				<a href="" class="btn btn-simple btn-just-icon">
					<i class="fa fa-facebook-square"></i>
				</a>
				<a href="" class="btn btn-simple btn-just-icon">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="" class="btn btn-simple btn-just-icon">
					<i class="fa fa-google-plus"></i>
				</a>
			</div>
		</div>
		<p class="text-divider">Or Be Classical</p>
		<div class="content">


			<!-- name -->
			<div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<span class="input-group-addon">
					<i class="material-icons">face</i>
				</span>
				<input type="text" name="name" class="form-control" placeholder="Name..." value="{{ old('name') }}">

				@if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
			</div>

			<!-- email -->
			<div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<span class="input-group-addon">
					<i class="material-icons">email</i>
				</span>
				<input type="text" name="email" class="form-control" placeholder="Email..." value="{{ old('email') }}">

				@if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
			</div>

			<!-- password -->
			<div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<span class="input-group-addon">
					<i class="material-icons">lock_outline</i>
				</span>
				<input type="password" name="password" class="form-control" placeholder="Password..." value="{{ old('password') }}">

				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			</div>

			<!-- password confirmation -->
			<div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				<span class="input-group-addon">
					<i class="material-icons">lock_outline</i>
				</span>
				<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password..." value="{{ old('password_confirmation') }}">

				@if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
			</div>



			<!-- If you want to add a checkbox to this form, uncomment this code

			<div class="checkbox">
				<label>
					<input type="checkbox" name="optionsCheckboxes" checked>
					Subscribe to newsletter
				</label>
			</div> -->
		</div>
		<div class="footer text-center">
			<input type="submit" 
				class="btn btn-simple btn-primary btn-lg"
				value="Get Started">
		</div>
	</form>
</div>