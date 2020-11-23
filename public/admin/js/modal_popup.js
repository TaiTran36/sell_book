function displayPopup(id, is_edit, cate_id = null ) {
    $('.errors').text('');
    let title_modal = 'Add New Category';

    id = id.split('_');
    var modal = document.getElementById('modal_' + id[1]);

    $('#modal_'+ id[1] + ' .is_edit').val(is_edit);

    refreshData();

    if(is_edit == 1){
        title_modal = 'Edit Category';
        getCategory(cate_id);
    }


    $('#modal_'+id[1] + ' .modal-title').text(title_modal);

    modal.style.display = 'block';
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


}

function getCategory(cate_id) {
    if(cate_id != null){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: '../e-commerce/categories/get-category',
            type: 'GET',
            data: {
                cate_id: cate_id,
            },

        }).done(function (data) {
            if(data.success){
                console.log(data)
                fill_data_cate(data.category);
            }


        }).fail(function (xhr, Status, error) {

        });
    }
}
function fill_data_cate(data) {
    $('.name_category').val(data['name']);
    $('.cate_description').val(data['description']);

    if(data['subcategories'].length > 0){

        for (let i = 0; i < data['subcategories'].length; i++){
            alert(data['subcategories'].length);
            $('.add_sub').append('<div class="item-drag item-sub" data-content="'+ data['subcategories'][i].id +'">'+ data['subcategories'][i].name +'</div>');
            disableDragElement(data['subcategories'][i].id);
        }

    }
    console.log(data['subcategories'].length);
}

function disableDragElement(id) {

    $('.list_sub').find('.item-sub').each(function () {
        if($(this).data('content') == id){
            $(this).css('display', 'none');
        }
    })

}

function refreshData() {

    $('.name_category').val('');
    $('.cate_description').val('');

    $('.add_sub').find('.item-sub').remove();

    $('.list_sub').find('.item-sub').each(function () {
        if($(this).css('display') === 'none'){
            $(this).css('display', 'inline-block');
        }
    })

}


