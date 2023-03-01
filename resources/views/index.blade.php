@extends('layouts.app')

@section('content')
    <!-- Main Content-->
    <div class="container mt-5 px-4 px-lg-5">
        @foreach($posts as $post)

        <div class="row">
                <div class="col-9">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">{{$post->title}}</h2>
                            <h3 class="post-subtitle">{{$post->post_text}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#">Start Bootstrap</a>
                            {{$post->created_at}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4"/>
                    <!-- Post preview-->


                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#">Older
                            Posts →</a></div>
                </div>
            @endforeach

            <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($categories as $category)
                                            <li><a href="#">{{ $category -> name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
@endsection
