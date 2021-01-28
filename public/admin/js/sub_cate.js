$('.add_sub_cate').click(function (e) {
    e.preventDefault();
    $('errors').text('');
    let name_sub_cate = $('#name_sub').val();
    $('.error-add-sub').text('');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '../e-commerce/subcategories/create-subcategory',
        type: 'POST',
        data: {
            sub_cate: name_sub_cate,
            description: description,
            is_form_subcate: $('.is_form_subcate').val(),
        },

    }).done(function (data) {
        if(data.success){
            if(data.is_form_sub == 1){
                window.location.reload();
            }

            $('.list_sub').prepend('<div class="item-drag item-sub ui-sortable-handle" data-content="'+ data.id +'">'+ data.name +'</div>');
        }

        if(data.error){
            $('.error-name-subcate').text(data.error);
        }


    }).fail(function (xhr, Status, error) {


    });


})
