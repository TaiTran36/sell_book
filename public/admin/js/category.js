$('.btn-add-cate').click(function (e) {
    e.preventDefault();
    let name_cate = $('#name_category').val();

    let arr_id_sub = [];
    $('#add_sub .item-sub').each(function () {
        arr_id_sub.push($(this).data('content'));
    })

    let des = $('.cate_description').val();

    // $('.error-add-sub').text('');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '../e-commerce/categories/create-category',
        type: 'POST',
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
