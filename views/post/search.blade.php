@extends("layout.main.ejs")

@section("content")
    <div class="alert alert-success" role="alert">
        下面是搜索"{{$query}}"的文章,共{{$posts->total()}}條
    </div>

    <div class="col-sm-8 blog-main">
        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a></p>

                <p>{!! Str::limit($post->content, 100, '...') !!}</p>       <!-- Str::limit => 限制文章在畫面上出現多少字,此處為限制100字,超過100字則以...代替 -->
    </div>
@endforeach

    </div>
@endsection
