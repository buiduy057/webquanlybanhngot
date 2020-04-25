@extends('users.layouts.index')
@section('content')

<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">Trang thủ</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Liên hệ</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		  <div class="lienhe_right">
		   <h1>{{$company->name}}</h1>
		   <p>Địa chỉ : {{$company->address}}</p>
		   <p>Số điện thoại : {{$company->phone}}</p>
		   <p>Email : {{$company->email}}</p>
		   <p>Địa chỉ : {{$company->address}}</p>
		 </div>
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	    	<div class="lienhe_left">
		 	 <img src="users/img/slider/homepage2/5.jpg" height="211px"  alt="banner" />
		    </div>
	    </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7495480087914!2d108.1573614141701!3d16.07848124346231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218db6d298c15%3A0x37de3c5dca7e4558!2zMTEgTMOqIFbEg24gU8SpLCBIb8OgIE1pbmgsIExpw6puIENoaeG7g3UsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1583647313938!5m2!1svi!2s" width="550" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<form action="{{route('lienhe')}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<input type="text" class="form-control" value="{{old('name')}}" placeholder="Họ tên của bạn" name="name" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email"  value="{{old('email')}}" placeholder="Email của bạn" autocomplete="off" >
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Số điện thoại của bạn" autocomplete="off" >
				</div>
                <div class="form-group">
				<textarea id="demo-textarea-input" id="demo" rows="10" class="form-control ckeditor" name="content" placeholder="Nội dung" autocomplete="off">{{old('content')}}</textarea>
				</div>
								
				<button type="submit" id="btn_dk" class="btn btn-danger">Liên hệ</button>
			</form>
         </div>
	</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->


@endsection