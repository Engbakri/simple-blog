@extends('layout')

@section('content')
<main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Add Post</p>
                         <div class="my-5">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf

                            <div class="form-floating">
                                <input class="form-control" name="title" id="name" type="text" placeholder="أدخل عنوان المقال" required/>
                                <label for="name">Title</label>

                            </div>
                            <div class="form-floating">
                                <input class="form-control" name="content" id="name" type="text" placeholder="أدخل عنوان المقال" required/>
                                <label for="name">Content</label>

                            </div>
                             <div class="form-floating">
                                <input class="form-control" name="author" id="name" type="text" placeholder="أدخل عنوان المقال" required/>
                                <label for="name">Author</label>

                            </div>
                             <div class="form-floating">
                                <input class="form-control" name="category" id="name" type="text" placeholder="أدخل عنوان المقال" required/>
                                <label for="name">Category</label>

                            </div>
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Save</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>


@endsection
