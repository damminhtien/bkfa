@extends('pages.layouts.index') @section('title', 'Thông tin người dùng') @section('content')
<style>
/*====================================================
                       MYACCOUNT
======================================================*/

#acc-form {
    padding: 100px 0;
}

.form-group {
    margin-bottom: 15px;
}

label {
    margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
    border-radius: 0;
}

span.input-group-addon,
input.form-control {
    border-radius: 0;
}

.main-login {
    background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.main-center {
    margin-top: 30px;
    margin: 0 auto;
    max-width: 530px;
    padding: 40px 40px;
}

.login-button {
    margin-top: 5px;
}

.login-register {
    font-size: 11px;
    text-align: center;
}

@media(max-width: 575px) {
    #acc-form {
        padding: 30px 20px;
    }
}
</style>
<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head7 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Quản Lý Tài Khoản</h1>
    </div>
    <!--/end container-->
</div>
<!--====================================================
                        FORM ACC
======================================================-->
<section class="acc-form bg-gray" id="acc-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 main-login main-center">
            	@if(session('thongbao'))
	            	<div class="alert alert-success"> 
	                	{{session('thongbao')}}
	            	</div>
	        	@endif
                <form class="form-horizontal" method="POST" action="nguoidung">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">{{ Lang::get('sub.flname') }}</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" value="{{ $nguoidung->ten }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email" aria-describedby="basic-addon1" readonly placeholder="Enter your Email" value="{{ $nguoidung->email }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="date" id="username" placeholder="Enter your old Password" value="{{ $nguoidung->password }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    	<input type="checkbox" id="changePassword" class="" name="changePassword">
                        <label for="password" class="cols-sm-2 control-label">{{ Lang::get('sub.chanpw') }}</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control password" name="changePassword" id="password" placeholder="Enter your Password" aria-describedby="basic-addon1" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">{{ Lang::get('sub.confirm_password') }}</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control password" name="passwordAgain" id="confirm" placeholder="Confirm your Password" aria-describedby="basic-addon1" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                    	<br>
                    	<button type="submit" class="btn btn-general btn-white text-center">{{ Lang::get('sub.uppf') }}
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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