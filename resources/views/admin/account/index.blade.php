@extends('admin.account.base')
@section('action-content')
{{--    <div class="container">--}}
        <div class="col-sm-12 center">
            <div>
            </div>
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th width="15%" class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên Tài Khoản</th>
                    <th width="20%" class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Quyền</th>
                    <th width="35%" class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Email</th>
                    @can('admin_sp')
                        <th class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Actions</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach ($accounts as $acc)
                        @foreach($acc->roles as $item)
                            <tr role="row" class="odd">
                                <td align="center">{{ $acc->name }}</td>
                                <td align="center">
                                    {{$item->description}}
                                </td>
                                <td align="center">{{$acc->email}}</td>
                                @can('admin_sp')
                                    <td class="text-center">
                                            <button  class="btn btn-success btn_update col-sm-4 col-xs-5" style="margin-right:10%;width:50%;" data-id="{{$acc->id}}" data-toggle="modal" data-target="#modal_permission" data-content="{{$acc->name}}" {{ ($acc->id ===  Auth::user()->id) ? 'disabled="disabled"' : '' }} >
                                                Permission
                                            </button>
                                            <button  class="btn btn-danger btn_del col-sm-3 col-xs-5" style="margin-right:5%;width:30%;" data-id="{{$acc->id}}" {{ ($acc->id ===  Auth::user()->id) ? 'disabled="disabled"' : '' }}>
                                                Delete
                                            </button>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach

                @endforeach
                </tbody>
            </table>
{{--            @include('account.update');--}}
            <div id="update_func"></div>
        </div>
{{--    </div>--}}
@endsection


