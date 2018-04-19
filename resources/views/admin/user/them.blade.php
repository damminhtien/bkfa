@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><small>{{ Lang::get('sub.add') }}</small> {{ Lang::get('sub.user') }}</h4>
	    </div>
    </div>
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
		            @if(count($errors) > 0)
		                <div class="alert alert-danger">
		                    @foreach($errors->all() as $err)
		                        {{$err}}<br>
		                    @endforeach()
		                </div>
		            @endif
		            @if(session('thongbao'))
		                <div class="alert alert-success"> 
		                    {{session('thongbao')}}
		                </div>
		            @endif
		            <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.name') }}</label>
                        <input name="ten" class="form-control" placeholder="{{ Lang::get('sub.add_name') }}"></input>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.email') }}</label>
                        <input type="email" name="email" class="form-control" placeholder="{{ Lang::get('sub.add_email') }}"></input>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.password') }}</label>
                        <input type="password" name="password"  class="form-control" placeholder="{{ Lang::get('sub.add_password') }}"></input>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.confirm_password') }}</label>
                        <input type="password" name="password2"  class="form-control" placeholder="{{ Lang::get('sub.confirm_password') }}"></input>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit">{{ Lang::get('sub.add') }} <i class="fa fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-lg float-right btn-secondary">{{ Lang::get('sub.refresh') }}<i class="fa fa-undo"></i></button>
                </form>
		        </div>
    		</div>
		</div>	
	</div>
</div>
@endsection
@section('script')
@endsection