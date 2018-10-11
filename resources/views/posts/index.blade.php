@extends('main')

@section('title','All Posts')


@section('content')
	<br>
	<div class="row">
		
		<div class="col-md-9">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-3">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>

	</div>


@foreach($posts as $post)

   <div class="row">
   	 <div class="col-md-8 col-md-offset-2">
   	 	<h2>{{ $post->title }}</h2>
   	 	<h5>Published:{{ date('M j,Y', strtotime($post->created_at)) }}</h5>

   	 	<p>{{ substr($post->body,0,250) }}{{ strlen($post->body) >250 ? "....." : " "}}</p>
   	 	<a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm">View</a><a href="{{route('posts.edit',$post->id)}} " class="btn btn-default btn-sm">Edit</a>
   	 </div>
   </div>
   @endforeach
   <div class="text-center">

				
				{!! $posts->links(); !!}
			</div>
  
	
	
@stop