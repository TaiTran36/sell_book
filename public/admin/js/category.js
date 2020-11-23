$('.btn-cate').click(function (e) {
    e.preventDefault();

    let url = '';

    let type = '';

    let name_cate = $('.name_category').val();

    let arr_id_sub = [];
    $('#add_sub .item-sub').each(function () {
        arr_id_sub.push($(this).data('content'));
    })

    let des = $('.cate_description').val();

    if($('.is_edit').val() == 0){
        url = '../e-commerce/categories/create-category';
        type = 'POST';
    }

    if($('.is_edit').val() == 1){
        url = '../e-commerce/categories/update-category';
        type = 'GET';
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: url,
        type: type,
        data: {
            name_cate: name_cate,
            description : des,
            list_sub: JSON.stringify(arr_id_sub)
        },

    }).done(function (data) {
        if(data.success){
            window.location.reload();
        }

        if(data.error){
            $('.error-name-cate').text(data.error);
        }

    }).fail(function (xhr, Status, error) {
    });
})

$('.btn-delete-cate').click(function () {
    if(confirm('Are you sure delete this category?')){

        let cate_id = $(this).data('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: '../e-commerce/categories/delete-category',
            type: 'POST',
            data: {
                _method: 'delete',
                cate_id: cate_id,
            },

        }).done(function (data) {
            if(data.success){
                window.location.reload();
            }

            if(data.error){
                $('.error-name-cate').text(data.error);
            }

        }).fail(function (xhr, Status, error) {
        });
    }
})

function activate(cate_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '../e-commerce/categories/active-category',
        type: 'POST',
        data: {
            _method: 'PUT',
            cate_id: cate_id,
        },

    }).done(function (data) {
        if(data.success){
            $('.btn-status').removeClass()
        }
    }).fail(function (xhr, Status, error) {
    });
}
