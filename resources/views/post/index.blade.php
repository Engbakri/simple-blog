@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المقالات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض المقالات</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">

						<div class="mb-3 mb-xl-0">
								<a href="{{ route('posts.create') }}" class="btn btn-primary">إضافة مقال </a>


						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
                             @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">المقالات</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">

                                        <table class="table mg-b-0 text-md-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th>رقم </th>
                                                    <th>العنوان</th>
                                                    <th>المحتوى</th>
                                                    <th>الكاتب </th>
                                                    <th>القسم</th>
                                                    <th>العمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $post)
                                                    <tr>
                                                    <th scope="row">{{ $post->id }}</th>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ Str::substr($post->content, 0, 50) }}</td>
                                                    <td>{{ $post->author }}</td>
                                                    <td>{{ $post->category }}</td>

                                                    <td>

                                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">تعديل</a>
                                                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" >حذف</button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                @endforeach
										    </tbody>
                                        </table>

								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
@endsection
@section('js')
@endsection
