@extends('layout.main.ejs')

@section('content')
            <div class="col-sm-8 blog-main">
                @foreach($notices as $notice)
                <div class="blog-post">
                    <p class="bolg-post-meta">{{$notice->title}}</p>

                    <p>{{$notice->content}}</p>
                </div>
                    @endforeach
            </div>
@endsection
