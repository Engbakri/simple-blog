@extends('dashboard.layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"><a href="{{ route('category.index') }}">الاطباء</a></h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ إضافة طبيب </span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">إضافة بيانات قسم </h4>
							</div>
							<div class="card-body pt-0">
								<form class="form-horizontal" action="{{  route('category.store') }}" method="POST" >
                                    @method('post')
                                    @csrf
									
                    
                                    <div class="form-group">
										<input type="text" name="name" class="form-control" id="inputName" placeholder="اسم القسم " required>
									</div>
                                    <div class="form-group">
										<input type="text" name="desc" class="form-control" id="inputName" placeholder="الوصف " required>
									</div>
									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-primary">حفظ</button>
											<a href="{{ route('category.index') }}" class="btn btn-secondary">رجوع</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')

<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
