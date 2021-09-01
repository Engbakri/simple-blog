@extends('layout')

@section('content')

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach($post as $post)
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title">{{ $post }}</h2>
                                <h3 class="post-subtitle">{{ $post }}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on September 24, 2021
                            </p>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

@endsection
