@extends('layout')

@section('content')

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                        <button> Add</button>
                        <table class="table table-light">
                            <thead>
                                 <tr>
                                    <td>ID</td>
                                    <td>TITILE</td>
                                    <td>CONTENT</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>
                                            <button> Edit</button>
                                            <button> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                </div>
            </div>
        </div>

@endsection
