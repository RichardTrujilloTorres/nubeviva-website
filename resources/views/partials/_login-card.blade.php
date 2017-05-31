<div class="card card-signup">
	<form class="form" method="POST" action="{{ route('login') }}">

	{{ csrf_field() }}


		<!-- Social login -->
		<div class="header header-primary text-center">
			<h4>Social</h4>
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


		<p class="text-divider">Email</p>
		<div class="content">

			<!-- email -->
			<div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">

				<span class="input-group-addon">
					<i class="material-icons">email</i>
				</span>

                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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

                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

		</div>

		<div class="footer text-center">
			<input type="submit" class="btn btn-simple btn-primary btn-lg" 
				value="Go">
		</div>

	</form>
</div>