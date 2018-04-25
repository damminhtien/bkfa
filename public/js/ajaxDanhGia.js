
var star1 = $( "input[type=radio][name=star]" ).val();
var idslide1 = $("input[type=hidden][name=idslide]").val();
var iduser1 = $("input[type=hidden][name=iduser]").val();

$.get("TB/"+idslide1,function(data){
	$("#data").html(data);
});

$.get("saocuatoi/"+idslide1+"/"+iduser1,function(data){
	if(data != 0){
		$("input[name=star][value=" + data + "]").attr('checked', 'checked');
	}
});


$( "input[type=radio][name=star]" )
.change(function () {
	var _token = $("input[type=hidden][name=_token]").val();
	var star = $( "input[type=radio][name=star]:checked" ).val();
	var idslide = $("input[type=hidden][name=idslide]").val();
	var iduser = $("input[type=hidden][name=iduser]").val();
	$.get("danhgia/"+iduser+"/"+idslide+"/"+star,function(data){
		$("#data").html(data);
	});
});
