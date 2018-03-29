@extends('admin.layouts.index') 
@section('style')
<link href="css/admin_thumbnail.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
  <div class="page-title">
    <h4>Bảng dữ liệu <strong>Môn @php echo "( " .count($mon). " bản ghi )"; @endphp</strong>
      <a href="admin/mon/them" title="Thêm môn mới"><button type="button" class="btn-success btn" style="float: right;" ><i class="ti-plus" ></i></button></a>
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
                  <th>stt</th>
                  <th>tên môn</th>
                  <th>mã học phần</th>
                  <th>viện</th>
                  <th>giới thiệu</th>
                  <th>ghi chú</th>
                  <th>sửa</th>
                  <th>xóa</th>
                </tr>
            </thead>
            <tbody>
              @php $i=0 @endphp
              @foreach ($mon as $m)
              <tr>
                <td>
                  <div class="mrg-top-15">
                    <span class="text-info"><i>@php echo ++$i @endphp</i></span>
                  </div>
                </td>
                <td>
                  <div class="mrg-top-15">
                    <h5>@php echo $m->ten @endphp</h5>
                  </div>
                </td>
                <td>
                  <div class="mrg-top-15">
                    <h5>@php echo $m->mahocphan @endphp</h5>
                  </div>
                </td>
                <td>
                  <div class="mrg-top-15">
                    <h5>@php echo $m->vien @endphp</h5>
                  </div>
                </td>
                <td>
                  <div class="mrg-top-15">

                    <div class="thumbnail">
                      <h5>{{cutString($m->gioithieu, 50)}}</h5>
                      <p>{{$m->gioithieu}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="mrg-top-15">
                    <a class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#mymodal{{$m->idmon}}"> 
                      <h3 class="ti-eye text-info"></h3>
                    </a>
                    <!-- modal -->
                    <div class="modal fade" id="mymodal{{$m->idmon}}" tabindex="-1" role="text" aria-labelledby="examplemodallabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="examplemodallabel">chi tiết ghi chú</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              @php
                              echo $m->ghichu
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
                    <a href="admin/mon/sua/{{$m->idmon}}" title="sửa môn">
                      <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle"> 
                        <h3 class="ti-pencil-alt"></h3>
                      </button>
                    </a>

                  </div>
                </td>            
                <td>
                  <div class="mrg-top-15">
                    <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#xoaModal{{$m->idmon}}"> 
                      <h3 class="ti-trash text-danger"></h3>
                    </button>
                    @include('admin.mon.xoa')
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