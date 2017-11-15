@extends('layouts.layout')

@section('content')

 <h1> {{ $post->title }} </h1>
 <img src="{{ $post->image }}" width="100%">
     {!!$post->body!!}
<hr>
<a href="{{ route('delete_post',$post->id) }}">delete post</a>

 <div class="comments form-group">
 <ul class="list-group">
   @foreach($post->comments as $comment)
     <li class="list-group-item">

   	  <strong>
   	  	{{ $comment->created_at->diffForHumans() }}:&nbsp;
   	  </strong>
   {!!$comment->body!!}

     </li>
   @endforeach
 </ul> 
 </div>	

  @include('posts.comment')
  @include('layouts.errors')

 @endsection