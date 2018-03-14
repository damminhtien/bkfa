@extends('admin.layouts.index') @section('content')
<div class="container-fluid">
    <div class="page-title">
        <h4>Data Table <b>Viện<b>
		<button type="button" class="btn-success btn" style="float: right;" data-toggle="modal" data-target="#myModal"><i class="ti-plus" ></i></button>
		 @if(count($errors) > 0)
		 	<br><br>
          	<div class="alert alert-danger">
              	@foreach($errors->all() as $err)
                  	{{$err}}<br>
              @endforeach()
          </div>
        @endif
        @if(session('thongbao'))
          	<br><br>
          	<div class="alert alert-success"> 
              	{{session('thongbao')}}
          	</div>
        @endif
		@include('admin.vien.them')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-striped">
                        <table id="dt-opt" class="table table-lg table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Viện</th>
                                    <th>Tên Không Dấu</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($vien as $v):
									<tr>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                            <span class="text-info"><i>{{$v->idvien}}</i></span>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                            <span class="text-info"><b>{{$v->ten}}</b></span>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                            <span class="text-info"><b>{{$v->tenkhongdau}}</b></span>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<a class="btn btn-icon btn-flat btn-rounded dropdown-toggle" href="admin/vien/sua/{{$v->id}}">
	                                        		<h4 class="ti-pencil-alt text-warning"></h4>
	                                        	</a>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<a class="btn btn-icon btn-flat btn-rounded dropdown-toggle" href="admin/vien/xoa/{{$v->id}}">
	                                        		<h4 class="ti-trash text-danger"></h4>
	                                        	</a>
	                                        </div>
	                                    </td>
	                                </tr>
                            	@endforeach
                            </tbody>
                        </table>
                    </div>
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

