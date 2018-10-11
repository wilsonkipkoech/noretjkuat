@extends('main')

@section('title','|View Post')


@section('content')
  <br>
  <br>
<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title}}</h1>

		<p class="lead">{{ $post->body }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Create At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>

			<div class="row">
					<div class="col-sm-6">
					{!! Html::linkRoute('posts.show','Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
				</div>
			

                 <div class="col-sm-6">
                 	{{ Form::submit( 'Save Changes',['class'=>'btn btn-success btn-block'])}}
					
						</div>

			<div class="col-sm-12">
				<br>
					{{Html::linkRoute('posts.index', '<< See All Posts', array(), ['class'=>'btn btn-primary btn-block'])}}
				</div>
			</div>

			


		</div>
	</div>
</div>

 
@endsection