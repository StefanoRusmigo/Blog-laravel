@extends('layouts.layout')

@section('content')

 <h1> {{ $post->title }} </h1>
 {{ $post->body }}
<hr>


 <div class="comments form-group">
 <ul class="list-group">
   @foreach($post->comments as $comment)
     <li class="list-group-item">

   	  <strong>
   	  	{{ $comment->created_at->diffForHumans() }}:&nbsp;
   	  </strong>
     {{ $comment->body }}

     </li>
   @endforeach
 </ul> 
 </div>	

  @include('posts.comment')
  @include('layouts.errors')

 @endsection