@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
       <div class="page-header">
           <h4><small>{{ Lang::get('sub.edit') }}</small> {{ Lang::get('sub.subject') }}</h4>
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
                    <label class="text-info">{{ Lang::get('sub.institute') }} *</label>
                    <select class="form-control" name="idVien" id="vien">
                        <option value="0">- - - {{ Lang::get('sub.select_institute') }} - - -</option>
                        @foreach ($vien as $v)
                        <option value="{{$v->idvien}}">{{$v->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-info">{{ Lang::get('sub.codehp') }} *</label>
                    <input class="col-md-12" name="mahocphan" value="{{$mon->mahocphan}}"> </input>
                </div>
                <div class="form-group">
                    <label class="text-info">{{ Lang::get('sub.name') }} {{ Lang::get('sub.subject') }} ({{ Lang::get('sub.bigger3') }}) *</label>
                    <textarea name="tenmon" id="mon" class="form-control" rows="2">{{$mon->ten}}</textarea>
                </div>
                <div class="form-group">
                    <label class="text-info">{{ Lang::get('sub.about') }} ({{ Lang::get('sub.bigger') }}) *</label>
                    <textarea id="gioithieu" name="gioithieu"  class="form-control" rows="5">{{$mon->gioithieu}}</textarea>
                </div>
                <div class="form-group">
                    <label class="text-info">{{ Lang::get('sub.note') }}</label>
                    <textarea id="demo" name="ghichu" class="form-control ckeditor" rows="50">{{$mon->ghichu}}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit">{{ Lang::get('sub.edit') }} <i class="fa fa-paper-plane"></i></button>
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
    function checkForm(){
        console.log($('#vien').val());
        if($('#vien').val() != '' && $('#mon').val() != '' && $('#mahocphan').val() != '' && $('#gioithieu').val().length >= 10 && $('#mon').val().length >= 3)
            $("#btnSubmit").prop('disabled', false);
        else $("#btnSubmit").prop('disabled', true);
    }
    setInterval(checkForm,100);
</script>
@endsection