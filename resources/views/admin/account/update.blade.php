<div class="modal fade" id="modal_permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Thay đổi quyền</h4>
            </div>
            <form action="{{route('permission.update')}}" method="POST" id="form1">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" value="" id="id_account" name="id">
                <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <span>Tên tài khoản: </span> <span class="name_account"></span>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label for="acc_permission" class="control-label">Quyền</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="acc_permission" id="acc_permission" class="acc_permission">
                                            @foreach($list_permission as $per)
                                                <option value="{{$per->id}}">{{$per->description}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="form1" value="Submit">Cập nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>

