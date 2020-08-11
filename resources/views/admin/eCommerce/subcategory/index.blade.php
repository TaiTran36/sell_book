@extends('admin.eCommerce.base')
@section('action-content')
    <div class="col-sm-12 ">
        <div class="md-form mb-3 col-sm-6">
            <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
            <span class="glyphicon glyphicon-search"></span>
        </div>
        <div class="col-sm-6 add-new">
            <button type="button" id="add_subcategory" class="btn btn-success float-right add-subcategory" onclick="displayPopup(this.id, is_edit = 0)">+ Subcategory</button>
        </div>
    </div>
    <div class="table-responsive-sm table-data col-sm-12">
        <table class="table table-hover dataTable" role="grid">
            <thead class="thead-light">
            <tr class="row">
                <th class="col-name text-center" width="20%">SUBCATEGORY</th>
                <th class="col text-center"  width="35%">DESCRIPTION</th>
                <th class="col text-center"  width="5%">QUANTITY</th>
                <th class="col text-center"  width="5%">STATUS</th>
                <th class="col text-center"  width="10%">SORT</th>
                <th class="col text-center" width="25%">ACTION</th>
            </tr>
            </thead>
            <tbody>

            @foreach($subcategories as $sub)
                <tr class="row">
                    <td class="data-item text-center">{{$sub['name']}}</td>
                    <td class="data-item text-center">{{$sub['description']}}</td>
                    <td class="data-item text-center">{{$sub['quantity']}}</td>
                    <td class="data-item text-center">
                        @if($sub['status'] == 1)
                            <button type="button" class="btn btn-success btn-sm btn-status">Active</button>
                        @else
                            <button type="button" class="btn btn-danger btn-sm btn-status" onclick="activate({{$sub['id']}})">Deactivate</button>
                        @endif
                    </td>
                    <td class="data-item text-center"></td>
                    <td class="data-item text-center">
                        <button type="button" class="btn btn-outline-subCate" id="edit_subcategory" onclick="displayPopup( this.id, is_edit = 1, {{$sub['id']}} )">Edit</button>
                        @if($sub['status'] == 1)
                            <button type="button" class="btn btn-outline-danger btn-delete-cate" data-content="{{$sub['id']}}">Delete</button>
                        @else
                            <button type="button" class="btn btn-outline-success">Active</button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.eCommerce.subcategory.action_subcategory')
@endsection
