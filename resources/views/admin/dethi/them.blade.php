@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
	    <div class="page-header">
	        <h4><small>Thêm</small> Đề thi</h4>
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
                    @if(session('loi'))
                        <div class="alert alert-success"> 
                            {{session('loi')}}
                        </div>
                    @endif
		            @if(session('thongbao'))
		                <div class="alert alert-success"> 
		                    {{session('thongbao')}}
		                </div>
		            @endif
		            <form action="admin/dethi/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label class="text-info">Viện *</label>
                        <select class="form-control" name="idVien" id="vien">
                        	<option>- - - Chọn viện - - -</option>
                        	@foreach ($vien as $v)
                        		<option value="{{$v->idvien}}">{{$v->ten}}</option>
                        	@endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Môn *</label>
                        <select class="form-control" name="idMon" id="mon">
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Năm *</label>
                        <select class="form-control" name="nam" id="nam">
                            <option>- - - Chọn năm - - -</option>
                            @for($i = date("Y"); $i >= 1955; $i--)
                                <option value="{{$i}}">{{$i." - K".($i - 1955)}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Giới thiệu (Lớn hơn 10 ký tự) *</label>
                        <textarea id="gioithieu" name="gioithieu"  class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Ghi chú</label>
                        <textarea id="demo" name="ghichu" class="form-control ckeditor" rows="50"></textarea>
                    </div>
                    <div class="form-group">
                		<label>
                    		<span class="text-danger btn btn-lg btn-outline-danger"><i class="fa fa-folder-open"></i> &nbsp&nbspFile đề * &nbsp&nbsp&nbsp</span>
                    		<p id="filename1" class="d-inline"></p>
                    		<input type="file" name="de" style="display: none;">
                    	</label>
                    </div>
                    <div class="form-group">
                        <label>
                            <span class="text-danger btn btn-lg btn-outline-danger"><i class="fa fa-folder-open"></i> File lời giải*</span>
                            <p id="filename2" class="d-inline"></p>
                            <input type="file" name="loigiai" style="display: none;">
                        </label>
                    </div>
                    <div class="form-group">
						<label>
                    		<span class="text-primary btn btn-lg btn-outline-primary"><i class="fa fa-camera"></i> Chọn ảnh</span>
                    		<p id="fileanh" class="d-inline"></p>
                    		<input type="file" name="anh" style="display: none;">
                    	</label>
                    	<div style="width: 50vw;" id="imgupload">	
                    	</div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit" disabled>Thêm <i class="fa fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-lg float-right btn-secondary">Làm mới  <i class="fa fa-undo"></i></button>
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
            $("input[name=de]").change(function(){
            	$("#filename1").html($("input[name=de]").val());
            });
            $("input[name=loigiai]").change(function(){
                $("#filename2").html($("input[name=loigiai]").val());
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
        function checkForm(){
            console.log($('#vien').val());
            if($('#vien').val() != '' && $('#mon').val() != '' && $('#nam').val() != '' && $('#gioithieu').val().length >= 10 && $('input[name=de]').get(0).files.length > 0 && $('input[name=loigiai]').get(0).files.length > 0)
                $("#btnSubmit").prop('disabled', false);
            else $("#btnSubmit").prop('disabled', true);
        }
        setInterval(checkForm,100);
    </script>
@endsection