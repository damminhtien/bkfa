@extends('admin.layouts.index') 
@section('style')
  <link href="css/admin_thumbnail.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <h4>{{ Lang::get('sub.datasheet') }} <strong>Slide @php echo "- " .count($slide). ""; @endphp {{ Lang::get('sub.record') }}</strong>
		    <a href="admin/slide/them" title="Thêm slide mới"><button type="button" class="btn-success btn" style="float: right;" ><i class="ti-plus" ></i></button></a>
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
                                    <th>{{ Lang::get('sub.about') }}</th>
                                    <th>{{ Lang::get('sub.subject') }}</th>
                                    <th>{{ Lang::get('sub.image') }}</th>
                                    <th>{{ Lang::get('sub.view') }}</th>
                                    <th>{{ Lang::get('sub.note') }}</th>
                                    <th>{{ Lang::get('sub.edit') }}</th>
                                    <th>{{ Lang::get('sub.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php $i=0 @endphp
                            	@foreach ($slide as $s)
									                 <tr>
	                                    <td>
                                          <div class="mrg-top-15">
                                              <span class="text-info"><i>@php echo ++$i @endphp</i></span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <div class="thumbnail">
                                                <h5>{{cutString($s->gioithieu, 50)}}</h5>
                                                <p>{{$s->gioithieu}}</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$s->mon}}</h5>
                                          </div>
                                      </td>
	                                    <td>
	                                        <div>
	                                            <div class="thumbnail" href="#"><img src="upload/images/{{$s->urlanh}}" width="45" height="45" >
                                              <span><img src="upload/images/{{$s->urlanh}}" with="200" height="200" title="Ảnh {{$s->urlanh}}"></span></div>
	                                        </div>
	                                    </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$s->luotxem}}</h5>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <a class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#myModal{{$s->idslide}}"> 
                                              <h3 class="ti-eye text-info"></h3>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal{{$s->idslide}}" tabindex="-1" role="text" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết ghi chú</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                              @php  
                                                              echo $s->ghichu
                                                              @endphp
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                      </td>
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<a href="admin/slide/sua/{{$s->idslide}}" title="Sửa {{cutString($s->gioithieu, 60)}}"><button class="btn btn-icon btn-flat btn-rounded dropdown-toggle"> 
                                              <h3 class="ti-pencil-alt"></h3>
                                            </button></a>
	                                        </div>
	                                    </td>            
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#xoaModal{{$s->idslide}}" title="Xoá {{cutString($s->gioithieu, 40)}}">  
	                                        		<h3 class="ti-trash text-danger"></h3>
	                                        	</button></a>
                                            @include('admin.slide.xoa')
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