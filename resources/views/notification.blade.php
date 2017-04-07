@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel panel-body">
					@foreach ($notifications as $notification)
					@if ($notification->post->getAuthor->id == auth()->user()->id)
					@php ($bidder = $notification->bid->getBidder->name)
					@php ($post = $notification->post)			
					<a href="/post/{{$post->id}}"><div class="alert alert-info">
						
						<strong>{{  $bidder  }}</strong> Made a bid on your post <strong>{{  $post->title  }}</strong>.

					</div> </a>
					@endif
					@endforeach
				</div>
				<div class="panel panel-body">
					@foreach ($notifications as $notification)
					@if ($notification->post->getAuthor->id == auth()->user()->id)
					@php ($bidder = $notification->bid->getBidder->name)
					@php ($post = $notification->post)			
					<a href="/post/{{$post->id}}"><div class="alert alert-info">
						
						<strong>{{  $bidder  }}</strong> Made a bid on your post <strong>{{  $post->title  }}</strong>.

					</div> </a>
					@endif
					@endforeach
				</div>

			</div>

		</div>

	</div>

</div>


@endsection