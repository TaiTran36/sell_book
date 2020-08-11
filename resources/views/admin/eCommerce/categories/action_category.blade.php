<div id="modal_category" class="modal">
    <div class="modal-content">
            <input type="hidden" class="is_edit" value="">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLongTitle"></h3>
            </div>
            <div class="modal-body" style="display: flex">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name_category">Name Category (*)</label> <span class="errors error-name-cate"></span>
                            <input type="text" class="form-control name_category" name="name_category" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="add_sub">SubCategory</label>
                            <div class="add_sub connectedSortable">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <div>
                                <textarea name="description" class="form-control cate_description" cols="63" rows="5"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="list_sub">List Subcategory</label>
                                <div class="list_sub connectedSortable">
                                    @foreach($listSubCate as $subCate)
                                        <div class="item-drag item-sub" data-content="{{$subCate['id']}}">{{$subCate['name']}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <label for="name_sub">Add Subcategory</label>
                            <div class="form-group block_add_sub">
                                <input type="text" class="form-control"  class="name_subcategory" placeholder="Name subcategory" style="margin-right: 10px">
                                <button type="button" class="btn btn-primary mb-2 add_sub_cate">Add</button>
                            </div>
                            <div class="errors error-name-subcate"></div>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            $( ".list_sub, .add_sub" ).sortable({
                connectWith: ".connectedSortable"
            }).disableSelection();
        </script>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-cate">Save</button>
            </div>
    </div>
</div>
