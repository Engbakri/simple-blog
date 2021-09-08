@extends('dashboard.layouts.master')

@section('content')
<main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Add Post</p>
                         <div class="my-5">
                        <form action="{{ route('posts.update',$post->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-floating">
                                <input class="form-control" value="{{ $post->title }}" name="title" id="name" type="text" placeholder="أدخل عنوان المقال" />
                                <label for="name">Title</label>

                            </div>
                            <div class="form-floating">
                                <input class="form-control" value="{{ $post->content }}" name="content" id="name" type="text" placeholder="أدخل عنوان المقال" />
                                <label for="name">Content</label>

                            </div>
                             <div class="form-floating">
                                <input class="form-control" value="{{ $post->author }}" name="author" id="name" type="text" placeholder="أدخل عنوان المقال" />
                                <label for="name">Author</label>

                            </div>
                             <div class="form-floating">
                                <input class="form-control" value="{{ $post->category }}" name="category" id="name" type="text" placeholder="أدخل عنوان المقال" />
                                <label for="name">Category</label>

                            </div>
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>


@endsection
