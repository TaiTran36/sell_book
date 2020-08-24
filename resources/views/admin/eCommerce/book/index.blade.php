@extends('admin.eCommerce.base')
@section('action-content')
    <div class="col-sm-12 ">
        <div class="md-form mb-3 col-sm-6">
            <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
            <span class="glyphicon glyphicon-search"></span>
        </div>
        <div class="col-sm-6 add-new">
            <button type="button" id="add_category" class="btn btn-success float-right add-category" onclick="displayPopup(this.id, is_edit = 0)">+ Book</button>
        </div>
    </div>
    <div class="table-responsive-sm table-data col-sm-12">
        <table class="table table-hover dataTable" role="grid">
            <thead class="thead-light">
            <tr class="row">
                <th class="col-name text-center" width="20%">BOOK</th>
                <th class="col-name text-center" width="10%">IMAGE</th>
                <th class="col text-center"  width="15%">CATEGORY</th>
                <th class="col text-center"  width="10%">AUTHOR</th>
                <th class="col text-center"  width="5%">QUANTITY</th>
                <th class="col text-center"  width="5%">STATUS</th>
                <th class="col text-center"  width="10%">SORT</th>
                <th class="col text-center" width="25%">ACTION</th>
            </tr>
            </thead>
            <tbody>

            @foreach($books as $book)
                <tr class="row">
                    <td class="data-item text-center">{{$book['name']}}</td>
                    <td class="data-item text-center">{{$book['img_path']}}</td>
                    <td class="data-item text-center">{{$book['category']}}</td>
                    <td class="data-item text-center">{{$book['author']}}</td>
                    <td class="data-item text-center">{{$book['quantity']}}</td>
                    <td class="data-item text-center">
                        @if($book['status'] == 1)
                            <button type="button" class="btn btn-success btn-sm btn-status">Active</button>
                        @else
                            <button type="button" class="btn btn-danger btn-sm btn-status" onclick="activate({{$book['id']}})">Deactivate</button>
                        @endif
                    </td>
                    <td class="data-item text-center"></td>
                    <td class="data-item text-center">
                        <button type="button" class="btn btn-outline-subCate" id="edit_category" onclick="displayPopup( this.id, is_edit = 1, {{$book['id']}} )">Edit</button>
                        @if($book['status'] == 1)
                            <button type="button" class="btn btn-outline-danger btn-delete-cate" data-content="{{$book['id']}}">Delete</button>
                        @else
                            <button type="button" class="btn btn-outline-success">Active</button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.eCommerce.book.action_book')
@endsection
