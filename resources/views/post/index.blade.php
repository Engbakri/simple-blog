@extends('layout')

@section('content')

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->

                        <div class="post-preview">
                            <a href="post.html">
                                  @foreach($post as $post)
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <h3 class="post-subtitle">{{ $post->content }}</h3>

                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">{{ $post->author }}</a>
                                on September 24, 2021
                            </p>
                                 @endforeach
                        </div>



                </div>
            </div>
        </div>

@endsection
