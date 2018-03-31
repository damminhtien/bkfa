@extends('admin.layouts.index') 
@section('style')
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="page-header">
            <h4><small>Thêm</small> User</h4>
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
                    <form action="admin/user/sua/{{ $user->iduser }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-group">
                        <label class="text-info">Tên</label>
                        <input name="ten" class="form-control" placeholder="Điền tên người dùng" value="{{ $user->ten }}"></input>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ Email" value="{{ $user->email }}" readonly=""></input>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changePassword" name="changePassword">
                        <label class="text-info">Đổi mật khẩu</label>
                        <input type="password" name="matkhau"  class="form-control password" placeholder="Nhập mật khẩu" disabled=""></input>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Nhập lại mật khẩu</label>
                        <input type="password" name="matkhau2"  class="form-control password" placeholder="Nhập lại mật khẩu" disabled=""></input>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnSubmit">Sửa <i class="fa fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-lg float-right btn-secondary">Làm mới<i class="fa fa-undo"></i></button>
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
        $("#changePassword").change(function(){
            if($(this).is(":checked")) {
                $(".password").removeAttr('disabled');
            }
            else {
                $(".password").attr('disabled','');
            }
        });
    });
</script>
@endsection