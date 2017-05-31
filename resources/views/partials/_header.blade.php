<div class="header header-filter" style="background-image: url('/assets/img/backgrounds/purple-clouds.jpeg');">


	<div class="container">
	    <div class="row">
			<div class="col-md-6">
				<h1 class="title">@yield('intro_title')</h1>
	            <h4>@yield('intro_phrase', '//')</h4>
	            <br />
	            <a href="{{ route('casts.index') }}" class="btn btn-danger btn-raised btn-lg">
					<i class="fa fa-play"></i> Browse Now
				</a>
			</div>
	    </div>
	</div>
</div>