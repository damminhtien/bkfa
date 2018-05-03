
var star1 = $( "input[type=radio][name=star]" ).val();
var iddethi1 = $("input[type=hidden][name=iddethi]").val();
var iduser1 = $("input[type=hidden][name=iduser]").val();

$.get("TB/"+iddethi1,function(data){
	$("#data").html(data);
});
$.get("saocuatoi/"+iddethi1+"/"+iduser1,function(data){
	if(data != 0){
		$("input[name=star][value=" + data + "]").attr('checked', 'checked');
	}
});

$( "input[type=radio][name=star]" )
.change(function () {
	if(iduser1 != -1){
		var _token = $("input[type=hidden][name=_token]").val();
		var star = $( "input[type=radio][name=star]:checked" ).val();
		var iddethi = $("input[type=hidden][name=iddethi]").val();
		var iduser = $("input[type=hidden][name=iduser]").val();
		$.get("danhgia/"+iduser+"/"+iddethi+"/"+star,function(data){
			$("#data").html(data);
		});
	}
	else {
		window.location.href = "dangnhap"
	}
});

