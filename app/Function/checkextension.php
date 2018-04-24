<?php
// Mở composer.json
// Thêm vào trong "/autoload" chuỗi sau
// "files": [
//         "app/function/checkextension.php"
// ]

// Chạy cmd : composer dumpautoload
//  follow extension: https://www.computerhope.com/issues/ch001789.htm
//  
function checkExtensionArchive($ext){
	$extArchive = [
		'a',
		'ar',
		'iso',
		'tar',
		'bz2',
		'gz',
		'lz',
		'lzma',
		'rz',
		'sfark',
		'sz',
		'xz',
		'z',
		'7z',
		's7z',
		'ace',
		'apk',
		'arc',
		'jar',
		'rar',
		'tzx',
		'zip',
		'zipx',
		'zpaq',
		'zz',
		'tar.gz',
		'rpm',
		'arj',
		'deb',
		'pkg',
		'z'
	];
	if(in_array(strtolower($ext), $extArchive))
		return true;
	return false;
}

function checkExtensionSupportFile($ext){
	$extSup = [
		// rich text 
		'',
		'doc',
		'docx',
		'odt',
		'pdf',
		'rtf',
		'tex',
		'txt',
		'wks',
		'wps',
		'wpd',
		// spreadsheet
		'ods',
		'xlr',
		'xls',
		'xlsx',
		// presentation 
		'key',
		'odp',
		'pps',
		'ppt',
		'pptx'
	];
	if(in_array(strtolower($ext), $extSup))
		return true;
	return false;
}

function checkExtensionImage($ext){
	$extImg = [
		'ai',
		'bmp',
		'gif',
		'ico',
		'jpeg',
		'jpg',
		'png',
		'ps',
		'psd',
		'svg',
		'tif',
		'tiff'
	];
	if(in_array(strtolower($ext), $extImg))
		return true;
	return false;
}

function getUrlFileUpload($ext,$str){
	if(checkExtensionArchive($ext)) return "archive/{$str}";
	if(checkExtensionImage($ext)) return "images/{$str}";
	if(checkExtensionSupportFile($ext)) return "document/{$str}";
	return $str;
}

function getExtension($file){
	$len = strlen($file);
	for($i = $len-1; $i >= 0; $i--){
		if($file[$i] == '.') {
			return substr($file, $i-$len+1);
		}
	}
}
?>