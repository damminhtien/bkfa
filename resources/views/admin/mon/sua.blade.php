@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
       <div class="page-header">
           <h4><small>Sửa</small> môn</h4>
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
              @if(session('loi'))
              <div class="alert alert-success"> 
                {{session('loi')}}
            </div>
            @endif
            <form action="admin/mon/sua/{{$mon->idmon}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label class="text-info">Viện *</label>
                    <select class="form-control" name="idVien" id="vien">
                        <option value="0">- - - Chọn viện - - -</option>
                        @foreach ($vien as $v)
                        <option value="{{$v->idvien}}">{{$v->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-info">Mã Học Phần *</label>
                    <input class="col-md-12" name="mahocphan" value="{{$mon->mahocphan}}"> </input>
                </div>
                <div class="form-group">
                    <label class="text-info">Tên môn (Lớn hơn 3 ký tự) *</label>
                    <textarea name="tenmon" id="mon" class="form-control" rows="2">{{$mon->ten}}</textarea>
                </div>
                <div class="form-group">
                    <label class="text-info">Giới thiệu (Lớn hơn 10 ký tự) *</label>
                    <textarea id="gioithieu" name="gioithieu"  class="form-control" rows="5">{{$mon->gioithieu}}</textarea>
                </div>
                <div class="form-group">
                    <label class="text-info">Ghi chú</label>
                    <textarea id="demo" name="ghichu" class="form-control ckeditor" rows="50">{{$mon->ghichu}}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit">Sửa <i class="fa fa-paper-plane"></i></button>
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
    function checkForm(){
        console.log($('#vien').val());
        if($('#vien').val() != '' && $('#mon').val() != '' && $('#mahocphan').val() != '' && $('#gioithieu').val().length >= 10 && $('#mon').val().length >= 3)
            $("#btnSubmit").prop('disabled', false);
        else $("#btnSubmit").prop('disabled', true);
    }
    setInterval(checkForm,100);
</script>
@endsection