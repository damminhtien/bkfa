@extends('admin.layouts.index')
@section('content')
<div id="root">
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
	<div class="alert alert-danger"> 
		{{session('thongbao')}}
	</div>
	@endif
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.6/marked.js" type="text/javascript" charset="utf-8"></script>
<script>
$('document').ready(()=>{
	$.get('https://raw.githubusercontent.com/damminhtien/bkfa/master/readme.md', function(data) {
			chuoi = marked(data);
		console.log(chuoi);
		$('#root').html(chuoi);
	}, 'text');
})
</script>
@endsection