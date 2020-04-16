$(document).ready(function () {

    $('.btn_update').click(function (e) {
        e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('content');
            $.get('permission/get-permission', function (data) {
                $("#update_func").html(data);
                $('#id_account').val(id);
                $('.name_account').text(name);
                $('#modal_permission').modal('show');

            });
    });


    $('.btn_del').click(function (e) {
        e.preventDefault();
        if(confirm("Bạn chắc chắn muốn xoá tài khoản này")){
            var account_id = $(this).data('id');
            var url = "permission";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: url,
                data:{
                    id : account_id,
                },
                dataType: false,
                cache: false,
                success: function (res) {
                    if (res.success) {
                        location.reload();
                    } else {
                        alert('Failed');

                    }
                }
            });
        }
    })
});
