@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
       <div class="page-header">
           <h4><small>Thêm</small> môn</h4>
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
              <form action="admin/mon/sua/{{$mon->idmon}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Viện</label>
                    <select class="form-control" name="idVien" id="idVien">
                       @foreach ($vien as $v)
                       <option value="{{$v->idvien}}">{{$v->ten}}</option>
                       @endforeach
                   </select>
               </div>
               <div class="form-group">
                <label>Mã Học Phần</label>
                <input class="col-md-12" name="mahocphan" value="{{$mon->mahocphan}}"> </input>
            </div>
            <div class="form-group">
                <label>Tên môn</label>
                <textarea id="tenMon"  name="tenMon" class="form-control ckeditor" rows="3">{{$mon->ten}}</textarea>
            </div>
            <div class="form-group">
                <label>Giới thiệu</label>
                <textarea id="gioithieu" name="gioithieu" class="form-control ckeditor" rows="3">{{$mon->gioithieu}}</textarea>
            </div>
            <div class="form-group">
                <label>Ghi chú</label>
                <textarea id="ghichu" name="ghichu" class="form-control ckeditor" rows="10">{{$mon->mahocphan}}</textarea>
            </div>


            <button type="submit" class="btn btn-default">Sửa</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
        </form>
    </div>
</div>
</div>	
</div>
</div>
@endsection
