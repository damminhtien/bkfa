@extends('admin.layouts.index')
@section('content')
<div id="root">
	
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