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
				<div class="panel-heading"><b>{{ Lang::get('sub.infoacc') }}<b></div>
				<div class="panel-body">
					@if(session('thongbao'))
                    	<div class="alert alert-success"> 
                        	{{session('thongbao')}}
                    	</div>
                	@endif
					<form action="nguoidung" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div>
							<label>{{ Lang::get('sub.flname') }}</label>
							<input type="text" class="form-control" name="name" aria-describedby="basic-addon1" value="{{ $nguoidung->ten }}">
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
							<label>{{ Lang::get('sub.chanpw') }}</label>
							<input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled>
						</div>
						
						<div>
							<label>{{ Lang::get('sub.confirm_password') }}</label>
							<input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled>
						</div>
						

						<div>
							<label>{{ Lang::get('sub.sex') }}</label>
							<select class="form-control" name="gioitinh" id="gioitinh">
								<option value="0">--{{ Lang::get('sub.sex') }}--</option>
                                <option value="">{{ Lang::get('sub.male') }}</option>
                                <option value="">{{ Lang::get('sub.female') }}</option>
							</select>
						</div>
						<br>

						<div>
							<label>{{ Lang::get('sub.birth') }}</label>
							<input type="date" id="ngaysinh" class="form-control" name="ngaysinh">
						</div>
						<br>
						
						<button type="submit" class="btn btn-default">{{ Lang::get('sub.uppf') }}
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