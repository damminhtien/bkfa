@extends('admin.layouts.index') 
@section('style')
  <link href="css/admin_thumbnail.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
      <h4>{{ Lang::get('sub.datasheet') }}<strong> {{ Lang::get('sub.exam') }} @php echo "- " .count($dethi).""; @endphp {{ Lang::get('sub.record') }}</strong>
		    <a href="admin/dethi/them" title="{{ Lang::get('sub.add_exam') }}"><button type="button" class="btn-success btn" style="float: right;" ><i class="ti-plus" ></i></button></a>
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
                            	@foreach ($dethi as $dt)
									                 <tr>
	                                    <td>
                                          <div class="mrg-top-15">
                                              <span class="text-info"><i>@php echo ++$i @endphp</i></span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <div class="thumbnail">
                                                <h5>{{cutString($dt->gioithieu, 50)}}</h5>
                                                <p>{{$dt->gioithieu}}</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$dt->mon}}</h5>
                                          </div>
                                      </td>
	                                    <td>
	                                        <div>
	                                            <div class="thumbnail" href="#"><img src="upload/images/dethi/anh/{{$dt->urlanh}}" width="60" height="40" >
                                              <span><img src="upload/images/dethi/anh/{{$dt->urlanh}}" with="250" height="200" title="Ảnh {{$dt->urlanh}}"></span></div>
	                                        </div>
	                                    </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$dt->luotxem}}</h5>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <a class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#myModal{{$dt->iddethi}}"> 
                                              <h3 class="ti-eye text-info"></h3>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal{{$dt->iddethi}}" tabindex="-1" role="text" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
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
                                                              echo $dt->ghichu
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
	                                        	<a href="admin/dethi/sua/{{$dt->iddethi}}" title="Sửa {{cutString($dt->gioithieu, 60)}}"><button class="btn btn-icon btn-flat btn-rounded dropdown-toggle"> 
                                              <h3 class="ti-pencil-alt"></h3>
                                            </button></a>
	                                        </div>
	                                    </td>            
	                                    <td>
	                                        <div class="mrg-top-15">
	                                        	<button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#xoaModal{{$dt->iddethi}}" title="Xoá {{cutString($dt->gioithieu, 40)}}">  
	                                        		<h3 class="ti-trash text-danger"></h3>
	                                        	</button></a>
                                            @include('admin.dethi.xoa')
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