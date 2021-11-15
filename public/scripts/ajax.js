var base_url = window.location.origin + '/';

$('#loginForm').submit(function(e) {
    var token = $(this).attr('content');
    e.preventDefault();
    const val = $(this).serialize()
    console.log(val)
    register(val,token);
})

function register(data,token) {
    $.ajax({
        url: base_url + "home/login",
        type: "POST",
        data:data,
        dataType: 'json',
        beforeSend: function () {
            // $('#modal-default .modal-body').html('Loading....');
            // $('#modal-default .modal-footer .modal-save').attr('disabled', 'disabled');
        },
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function (data) {
            console.log(data)
            // if (data['code'] == 200) {
            //     $('#modal-default .modal-body').html('<div class="alert alert-success">' + data['message'][0] + '</div>');
            // } else {
            //     $('#modal-default .modal-body').html('<div class="alert alert-danger">' + data['message'][0] + '</div>');
            // }

            // setTimeout(function () {
            //     $('#modal-default .modal-body').html('Loading....');
            //     $('#modal-default .modal-footer .modal-save').removeAttr('disabled');

            //     $('#modal-default').modal('hide');
            // }, 2000);
        }
    });
}