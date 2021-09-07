@extends('layout')

@section('content')

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                        <button class="btn btn-primary btn-sm"> Add</button>
                        <table class="table table-light table-hover">
                            <thead>
                                 <tr>
                                    <td>ID</td>
                                    <td>TITILE</td>
                                    <td>CONTENT</td>
                                    <td>op</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ route('posts.edit',$post->id) }}"> Edit</a>
                                            <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"> Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                </div>
            </div>
        </div>

@endsection
