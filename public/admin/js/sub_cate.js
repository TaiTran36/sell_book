$('.add_sub_with_cate').click(function (e) {
    e.preventDefault();
    let name_sub_cate = $('#name_sub').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '../inputs/maintenance',
        type: 'POST',
        cache: false,
        data: JSON.stringify(data),
        // dataType: "json",
        // contentType: "application/json; charset=utf-8",
    }).done(function (data) {
        if (data.done) {

        }

    }).fail(function (xhr, Status, error) {


    });


})
