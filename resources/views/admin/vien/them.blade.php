<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ Lang::get('sub.add') }} {{ Lang::get('sub.institute') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="admin/vien/them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group row">
                            <label for="txtVien" class="col-sm-2 col-form-label">{{ Lang::get('sub.institute') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="txtVien" name="tenVien" placeholder="{{ Lang::get('sub.input_institute') }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" >{{ Lang::get('sub.refresh') }}</button>
                            <button type="submit" class="btn btn-primary">{{ Lang::get('sub.add') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>