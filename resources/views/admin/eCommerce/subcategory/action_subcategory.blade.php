<div id="modal_subcategory" class="modal">
    <div class="modal-content">
        <input type="hidden" class="is_edit" value="">
        <div class="modal-header">
            <h3 class="modal-title text-center" id="exampleModalLongTitle"></h3>
        </div>
        <div class="modal-body" style="display: flex">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name_subcategory">Name Subcategory (*)</label> <span class="errors error-name-subcate"></span>
                    <input type="text" class="form-control name_subcategory" name="name_subcategory" placeholder="">
                    <input type="hidden" class="is_form_subcate" value="1">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <div>
                        <textarea name="description" class="form-control sub_cate_description" cols="63" rows="5"></textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary add_sub_cate">Save</button>
        </div>
    </div>
</div>
