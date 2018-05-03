@php
	$ext = getExtension($chitiet->urlloigiai);
@endphp

@if(checkExtensionImage($ext))
	<img src="/upload/images/loigiai/{{$chitiet->urlloigiai}}" width="100%"></img>
@endif

@if(checkExtensionArchive($ext))
	<iframe src="/upload/archive/loigiai/{{$chitiet->urlloigiai}}"></iframe>
@endif

@if(checkExtensionSupportFile($ext))
@php
if(strtolower($ext) == 'pdf'){
    @endphp
        <div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
            <div class="responsive-wrapper responsive-wrapper-padding-bottom-90pct" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                </style>
                <iframe src="{{ asset('/laraview/#../upload/document/loigiai/'. $chitiet->urlloigiai) }}">
                    <p style="font-size: 110%;"><em><strong>ERROR: </strong> An &#105;frame should be displayed here but your browser version does not support &#105;frames.</em> Please update your browser to its most recent version and try again, or access the file
                        <a href="https://drive.google.com/file/d/0BxrMaW3xINrsR3h2cWx0OUlwRms/preview"> with this link.</a>
                    </p>
                </iframe>
            </div>
        </div>
    @php
}else{
    @endphp
    <iframe src="/upload/document/loigiai/{{$chitiet->urlloigiai}}"></iframe>
    @php
}
@endphp
@endif