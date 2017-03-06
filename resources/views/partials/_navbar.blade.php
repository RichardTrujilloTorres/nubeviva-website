<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
        		<span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="/home">{{ config('app.name') }}</a>
    	</div>

    	<div class="collapse navbar-collapse" id="navigation-example">
    		<ul class="nav navbar-nav navbar-right">
    			<li>
    				<input type="text" name="search" id="input" class="form-control" value="" required="required" title="" placeholder="Search">
    			</li>
				<li>
					<a href="">
						<i class="material-icons">video_library</i>Casts
					</a>
				</li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>


	            <li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
	            </li>
	            <li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
	            </li>
				<li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
	            </li>
    		</ul>
    	</div>
	</div>
</nav>