@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الاقسام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض الاقسام</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">

						<div class="mb-3 mb-xl-0">
								<a href="{{ route('category.create') }}" class="btn btn-primary">إضافة قسم </a>


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
									<h4 class="card-title mg-b-0">الاقسام</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">

                                        <table class="table mg-b-0 text-md-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th>رقم </th>
                                                    <th>القسم</th>
                                                    <th>الوصف</th>
                                                    <th>العمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  @foreach($category as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->desc }}</td>
                                

                                                    <td>

                                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">تعديل</a>
                                                        <form action="{{ route('category.destroy',$category->id) }}" method="POST" style="display: inline-block;">
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

                          
                            
                       
