@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><small>Thêm</small> Slide</h4>
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
                    <div class="form-group">
                        <label>Viện</label>
                        <select class="form-control" name="vien" id="vien">
                        	<option value="0">- - - Chọn viện - - 	-</option>
                        	@foreach ($vien as $v)
                        		<option value="{{$v->idvien}}">{{$v->ten}}</option>
                        	@endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Môn</label>
                        <select class="form-control" name="mon" id="mon">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <textarea id="gioithieu" name="gioithieu" class="form-control ckeditor" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea id="demo" name="NoiDung" class="form-control ckeditor" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                		<label>
                    		<span class="text-danger btn btn-lg btn-outline-danger"><i class="fa fa-folder-open"></i> Chọn file</span>
                    		<p id="filename" class="d-inline"></p>
                    		<input type="file" name="file" style="display: none;">
                    	</label>
                    </div>
                    <div class="form-group">
						<label>
                    		<span class="text-primary btn btn-lg btn-outline-primary"><i class="fa fa-camera"></i> Chọn ảnh</span>
                    		<p id="filename" class="d-inline"></p>
                    		<input type="file" name="anh" style="display: none;">
                    	</label>
                    	<div style="width: 50vw;" id="imgupload">	
                    	</div>
                    </div>
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
    <script>
        $(document).ready(function(){
            $("#vien").change(function(){
                var idVien = $(this).val();
                $.get("admin/ajax/getmonby"+idVien, function(data){
                    $("#mon").html(data);
                });
            });
            $("input[name=file]").change(function(){
            	$("#filename").html($("input[name=file]").val());
            });
            $("input[name=anh]").change(function(e) {
		    	var file = e.originalEvent.srcElement.files[e.originalEvent.srcElement.files.length-1];
    			var img = document.createElement("img");
    			var reader = new FileReader();
    			reader.onloadend = function() {
         			img.src = reader.result;
    			}
    			reader.readAsDataURL(file);
    			$("#imgupload").html(img);
    			img.width = "200";
			});
        });
    </script>
@endsection