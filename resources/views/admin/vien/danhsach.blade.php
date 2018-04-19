@extends('admin.layouts.index') @section('content')
<div class="container-fluid">
    <div class="page-title">
        <h4>{{ Lang::get('sub.datasheet') }} <b>{{ Lang::get('sub.institute') }} @php echo "- " .count($vien). ""; @endphp {{ Lang::get('sub.record') }}<b> 
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
                                    <th>{{ Lang::get('sub.name') }} {{ Lang::get('sub.institute') }}</th>
                                    <th>{{ Lang::get('sub.unsign_name') }}</th>
                                    <th>{{ Lang::get('sub.edit') }}</th>
                                    <th>{{ Lang::get('sub.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php $i=0 @endphp
                            	@foreach ($vien as $v)
									                 <tr>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                            <span class="text-info"><i>@php echo ++$i @endphp</i></span>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                            <h5>{{$v->ten}}</h5>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                          <h5>{{$v->tenkhongdau}}</h5>
	                                        </div>
	                                    </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#suaModal{{$v->idvien}}"> 
                                              <h3 class="ti-pencil-alt"></h3>
                                            </button>
                                            @include('admin.vien.sua')
	                                        </div>
	                                    </td>            
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#xoaModal{{$v->idvien}}"> 
	                                        		<h3 class="ti-trash text-danger"></h3>
	                                        	</button>
                                            @include('admin.vien.xoa')
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
@include('admin.vien.them')
@endsection

@section('script')
	<script type="text/javascript">
	</script>
@endsection

