@extends('layouts.master')


@section('title')
Casts
@endsection



@section('content')

<div class="row">
	<div class="col-sm-8 offset-4">

		@foreach($casts as $cast)
			<div class="well">
				<h5>{{ $cast->title }}</h5>
				<p>{{ $cast->description }}</p>
				
					<ul class="list-group">
						<li class="list-group-item">

							@if ($cast->published)
								<i class="fa fa-task"></i> // parts
								<i class="fa fa-clock-o"></i> // duration
								<i class="fa fa-calendar"></i> {{ $cast->publishedAt() }}
							@else
								Comming Soon
							@endif
							
						</li>
					</ul>
				
			</div>
		@endforeach

	</div>
</div>

@endsection