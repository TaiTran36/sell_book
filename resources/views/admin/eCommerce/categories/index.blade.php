@extends('admin.eCommerce.base')
@section('action-content')
    <div class="col-sm-12 ">
        <div class="md-form mb-3 col-sm-6">
            <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
            <span class="glyphicon glyphicon-search"></span>
        </div>
        <div class="col-sm-6 add-new">
            <button type="button" id="add_category" class="btn btn-success float-right add-category" onclick="displayPopup(this.id, is_edit = 0)">+ Category</button>
        </div>
    </div>
    <div class="table-responsive-sm table-data col-sm-12">
        <table class="table table-hover dataTable" role="grid">
            <thead class="thead-light">
            <tr class="row">
                <th class="col-name text-center" width="20%">CATEGORY</th>
                <th class="col text-center"  width="35%">DESCRIPTION</th>
                <th class="col text-center"  width="5%">QUANTITY</th>
                <th class="col text-center"  width="5%">STATUS</th>
                <th class="col text-center"  width="10%">SORT</th>
                <th class="col text-center" width="25%">ACTION</th>
            </tr>
            </thead>
            <tbody>

                @foreach($categories as $cate)
                    <tr class="row">
                        <td class="data-item text-center">{{$cate['name']}}</td>
                        <td class="data-item text-center">{{$cate['description']}}</td>
                        <td class="data-item text-center">{{$cate['quantity']}}</td>
                        <td class="data-item text-center">
                            <button type="button" class="btn {{$cate['status'] ? 'btn-success' : 'btn-danger'}} btn-sm btn-status" data-id="{{$cate['id']}}" data-status="{{$cate['status'] ? 1 : 0}}">{{$cate['status'] ? 'Active' : 'Deactivate'}}</button>
                        </td>
                        <td class="data-item text-center"></td>
                        <td class="data-item text-center">
                            <button type="button" class="btn btn-outline-subCate" id="edit_category" onclick="displayPopup( this.id, is_edit = 1, {{$cate['id']}} )">Edit</button>
                            <button type="button" class="btn btn-outline-danger btn-delete-cate" data-content="{{$cate['id']}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.eCommerce.categories.action_category', compact('listSubCate'))
@endsection

