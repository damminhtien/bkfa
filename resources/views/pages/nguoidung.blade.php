@extends('pages.layouts.index')

@section('title', 'Thông tin người dùng')

@section('content')
<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading"><b>Thông tin tài khoản<b></div>
				<div class="panel-body">
					@if(session('thongbao'))
                    	<div class="alert alert-success"> 
                        	{{session('thongbao')}}
                    	</div>
                	@endif
					<form action="nguoidung" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div>
							<label>Họ tên</label>
							<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{ $nguoidung->ten }}">
						</div>
						<br>
						<div>
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							readonly value="{{ $nguoidung->email }}" 
							>
						</div>
						<br>	
						<div>
							<input type="checkbox" id="changePassword" class="" name="changePassword">
							<label>Đổi mật khẩu</label>
							<input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled>
						</div>
						
						<div>
							<label>Nhập lại mật khẩu</label>
							<input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled>
						</div>
						

						<div>
							<label>Giới tính</label>
							<select class="form-control" name="gioitinh" id="gioitinh">
								<option value="0">--Giới tính--</option>
                                <option value="">Nam</option>
                                <option value="">Nữ</option>
							</select>
						</div>
						<br>

						<div>
							<label>Ngày sinh</label>
							<input type="date" id="ngaysinh" class="form-control" name="ngaysinh">
						</div>
						<br>

						<div>
							<label>Tỉnh-Thành phố</label>
							<select class="form-control" name="quequan" id="quequan">
								<option value="0">--Tỉnh/TP--</option>
                                <option value="">Hà Nội</option>
                                <option value="">TP.Hồ Chí Minh</option>
							</select>
						</div>
						<br>
						<button type="submit" class="btn btn-default">Cập nhật thông tin
						</button>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<!-- end slide -->
</div>
<!-- end Page Content -->
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