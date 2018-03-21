@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><small>Sửa</small> Slide</h4>
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
		            <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
		                <input type="hidden" name="_token" value="{{csrf_token()}}">
		                <button type="submit" class="btn btn-default">Thêm</button>
		                <button type="reset" class="btn btn-default">Làm mới</button>
		            </form>
		        </div>
    		</div>
		</div>	
	</div>
</div>
@endsection
@section('script')
	<script type="text/javascript">
	</script>
@endsection