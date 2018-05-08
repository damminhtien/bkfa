@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><em>{{ Lang::get('sub.edit') }} Slide:</em> {{cutstring($slide->gioithieu,50)}}</h4> 
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
		            <form action="admin/slide/sua/{{$slide->idslide}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.institute') }}</label>
                        <select class="form-control" name="idVien" id="vien">
                        	<option value="$slide->vien->idvien">{{$slide->vien->ten}}</option>
                        	@foreach ($vien as $v)
                        		<option value="{{$v->idvien}}">{{$v->ten}}</option>
                        	@endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.subject') }}</label>
                        <select class="form-control" name="idMon" id="mon">
                        	<option value="{{$slide->mon->idmon}}">{{$slide->mon->ten}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.about') }}</label>
                        <textarea id="gioithieu" name="gioithieu"  class="form-control" rows="5">{{$slide->gioithieu}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-info">{{ Lang::get('sub.note') }}</label>
                        <textarea id="demo" name="ghichu" class="form-control ckeditor" rows="50">{{$slide->ghichu}}</textarea>
                    </div>
                    <div class="form-group">
                		<label>
                    		<span class="text-danger btn btn-lg btn-outline-danger"><i class="fa fa-folder-open"></i>{{ Lang::get('sub.select_file') }}</span>
                    		<p id="filename" class="d-inline"></p>
                    		<input type="file" name="file" style="display: none;">
                    	</label>
                    </div>
                    <div class="form-group">
						<label>
                    		<span class="text-primary btn btn-lg btn-outline-primary"><i class="fa fa-camera"></i>{{ Lang::get('sub.select_image') }}</span>
                    		<p id="fileanh" class="d-inline"></p>
                    		<input type="file" name="anh" style="display: none;">
                    	</label>
                    	<div style="width: 50vw;" id="imgupload">	
                    		<img src="upload/images/slide/{{$slide->urlanh}}" style="width: 200px;">
                    	</div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-lg float-right"> {{ Lang::get('sub.edit') }} <i class="fa fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-lg float-right btn-secondary">{{ Lang::get('sub.refresh') }}<i class="fa fa-undo"></i></button>
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