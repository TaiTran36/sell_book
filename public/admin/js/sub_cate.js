$('.add_sub_with_cate').click(function (e) {
    e.preventDefault();
    let name_sub_cate = $('#name_sub').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '../e-commerce/sub-categories/create-subcategory',
        type: 'POST',
        data: {sub_cate: name_sub_cate},

    }).done(function (data) {
        if (data.done) {

        }

    }).fail(function (xhr, Status, error) {


    });


})
