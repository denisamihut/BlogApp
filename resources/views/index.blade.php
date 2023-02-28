@extends('layouts.app')

@section('content')
    <!-- Main Content-->
    <div class="container mt-5 px-4 px-lg-5">
        <div class="row">
            <div class="col-9">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 24, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="#"><h2 class="post-title">I believe every human has a finite number of heartbeats.
                            I don't intend to waste any of mine.</h2></a>
                    <p class="post-meta">
                        Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">Science has not yet mastered prophecy</h2>
                        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the
                            next ten.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#">Start Bootstrap</a>
                        on August 24, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">Failure is not an option</h2>
                        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our
                            duty to future generations.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#">Start Bootstrap</a>
                        on July 8, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#">Older
                        Posts →</a></div>
            </div>
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
