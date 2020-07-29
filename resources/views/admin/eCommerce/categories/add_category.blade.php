<div id="modal_add_category" class="modal">
    <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLongTitle">Add New Category</h3>
            </div>
            <div class="modal-body" style="display: flex">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name_category">Name Category</label>
                            <input type="text" class="form-control" id="name_category" name="name_category" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="add_sub">Subcategory</label>
                            <div id="add_sub" class="connectedSortable">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="list_sub">List Subcategory</label>
                                <div id="list_sub" class="connectedSortable">
                                    @foreach($listSubCate as $subCate)
                                        <div class="item-drag item-sub">{{$subCate['name']}}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <label for="name_sub">Add Subcategory</label>
                            <div class="form-group block_add_sub">
                                <input type="text" class="form-control" id="name_sub" name="name_sub" placeholder="Name subcategory" style="margin-right: 10px">
                                <button type="button" class="btn btn-primary mb-2 add_sub_with_cate">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            $( "#list_sub, #add_sub" ).sortable({
                connectWith: ".connectedSortable"
            }).disableSelection();
        </script>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
    </div>
</div>
