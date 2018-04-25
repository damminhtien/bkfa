@extends('admin.layouts.index') 
@section('style')
  <link href="css/admin_thumbnail.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <h4>{{ Lang::get('sub.datasheet') }}<strong>{{ Lang::get('sub.news') }} @php echo "- " .count($tintuc). ""; @endphp {{ Lang::get('sub.record') }}</strong>
        <a href="admin/tintuc/them" title="{{ Lang::get('sub.add_news') }}"><button type="button" class="btn-success btn" style="float: right;" ><i class="ti-plus" ></i></button></a>
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
            <div class="alert alert-success"> 
                {{session('thongbao')}}
            </div>
        @endif
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-striped">
                        <table id="dt-opt" class="table table-lg table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>{{ Lang::get('sub.title') }}</th>
                                    <th>{{ Lang::get('sub.about') }}</th>
                                    <th>{{ Lang::get('sub.content') }}</th>
                                    <th>{{ Lang::get('sub.image') }}</th>
                                    <th>{{ Lang::get('sub.date') }}</th>
                                    <th>{{ Lang::get('sub.view') }}</th>
                                    <th>{{ Lang::get('sub.edit') }}</th>
                                    <th>{{ Lang::get('sub.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php $i=0 @endphp
                              @foreach ($tintuc as $s)
                                   <tr>
                                      <td>
                                          <div class="mrg-top-15">
                                              <span class="text-info"><i>@php echo ++$i @endphp</i></span>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <div class="thumbnail">
                                                <h5>{{cutString($s->tieude, 20)}}</h5>
                                                <p>{{$s->tieude}}</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <div class="thumbnail">
                                                <h5>{{cutString($s->gioithieu, 20)}}</h5>
                                                <p>{{$s->gioithieu}}</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <div class="thumbnail">
                                                <h5>{{ cutString($s->noidung, 20) }}</h5>
                                                  
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div>
                                              <div class="thumbnail" href="#"><img src="upload/tintuc/{{$s->urlanh}}" width="45" height="45" >
                                              <span><img src="upload/tintuc/{{$s->urlanh}}" with="300" height="300" title="Ảnh {{$s->urlanh}}"></span></div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$s->created_at}}</h5>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                              <h5>{{$s->luotxem}}</h5>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="mrg-top-15">
                                            <a href="admin/tintuc/sua/{{$s->idtintuc}}" title="Sửa {{cutString($s->tieude, 60)}}"><button class="btn btn-icon btn-flat btn-rounded dropdown-toggle"> 
                                              <h3 class="ti-pencil-alt"></h3>
                                            </button></a>
                                          </div>
                                      </td>            
                                      <td>
                                          <div class="mrg-top-15">
                                            <button class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="modal" data-target="#xoaModal{{$s->idtintuc}}" title="Xoá {{cutString($s->tieude, 40)}}">  
                                              <h3 class="ti-trash text-danger"></h3>
                                            </button></a>
                                            @include('admin.tintuc.xoa')
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
  </script>
@endsection