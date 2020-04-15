@extends('admin.layouts.admin-template')
@section('content')
    <div class="contain-main" id="contain-main">
        <div class="contain">
            <div class="contain-header">
                <div class="title">
                    <h5 class="t-1">Product</h5>
                </div>
                <div class="map">
                    <span class="m-1">Home /</span><span class="m-1">E-commerce /</span><span class="m-1">Product</span>
                </div>
            </div>
            <div class="page-contain col-sm-12">
                <div class="col-sm-12 ">
                    <div class="md-form mb-3 col-sm-6">
                        <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
                        <span class="glyphicon glyphicon-search"></span>
                    </div>
                    <div class="col-sm-6 add-new">
                        <button type="button" class="btn btn-success float-right">+ Product</button>
                    </div>
                </div>
                <div class="table-responsive-sm table-data col-sm-12">
                    <table class="table table-hover dataTable" role="grid">
                        <thead class="thead-light">
                        <tr class="row">
                            <th class="col-name text-center" width="20%">PRODUCT</th>
                            <th class="col-category text-center" width="15%">CATEGORY</th>
                            <th class="col text-center"  width="15%">ADDED DATE</th>
                            <th class="col text-center"  width="10%">PRICE</th>
                            <th class="col text-center"  width="10%">QUANTITY</th>
                            <th class="col text-center"  width="5%">STATUS</th>
                            <th class="col text-center" width="20%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="row">
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                        </tr>
                        <tr class="row">
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                        </tr>
                        <tr class="row">
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                            <td class="data-item text-center">Mark</td>
                            <td class="data-item text-center">Otto</td>
                            <td class="data-item text-center">@mdo</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
