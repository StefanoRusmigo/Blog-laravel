 <div class="blog-post">
            <h2 class="blog-post-title">
             <a href="/posts/{{ $post->id }}">

              {{ $post->title }}</h2>

             </a> 

            <p class="blog-post-meta">

            {{ $post->created_at->toFormattedDateString() }} by 
            <a href="#">{{ $post->user->name }}</a>
           
            </p>
            {{ $post->body }}
            <p>
            @foreach($post->tags as $tag)
              <a href="/posts/tag/{{ $tag->name }}">{{ $tag->name }}</a>
            @endforeach

            </p>
          
          </div><!-- /.blog-post -->