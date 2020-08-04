$('.add_sub_with_cate').click(function (e) {
    e.preventDefault();
    let name_sub_cate = $('#name_sub').val();
    $('.error-add-sub').text('');
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
        if(data.success){
            $('.list_sub').prepend('<div class="item-drag item-sub ui-sortable-handle" data-content="'+ data.id +'">'+ data.name +'</div>');
            $('#name_sub').val('');
        }

        if(data.error){
            $('.error-add-sub').text(data.error);
        }


    }).fail(function (xhr, Status, error) {


    });


})
