var base_url = window.location.origin + '/';
var selectClassCategory = $('#select-category');

$('#loginForm').submit(function(e) {
    var token = $(this).attr('content');
    e.preventDefault();
    const val = $(this).serialize()
    console.log(val)
    register(val,token);
})

function register(data,token) {
    $.ajax({
        url: base_url + "login",
        type: "POST",
        data:data,
        dataType: 'json',
        beforeSend: function () {
            var spiner = $('.btn-spinner-login')
            spiner.html(` <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>`)
            // $('#modal-default .modal-body').html('Loading....');
            // $('#modal-default .modal-footer .modal-save').attr('disabled', 'disabled');

        },
        headers: {
            'X-CSRF-TOKEN': token
        },
        success: function (data) {
            console.log(data)
            var spiner = $('.btn-spinner-login').find('.spinner-border')
            spiner.fadeOut(200)
            if (data['code'] == 200) {
                // $('#modalRegist .modal-body').html('<div class="alert alert-success">' + data['message'][0] + '</div>');
                window.location.href = '/'
            } else {
                var message = data['message']
                if (data['message']['email'] !== undefined || data['message']['password'] !== undefined) {
                    message = 'required email and password'
                }
                $('#modalLogin .form-group.alert').html('<div class="alert alert-danger">' + message + '</div>');
            }

            // setTimeout(function () {
            //     $('#modal-default .modal-body').html('Loading....');
            //     $('#modal-default .modal-footer .modal-save').removeAttr('disabled');

            //     $('#modal-default').modal('hide');
            // }, 2000);
        }
    });
}

// selectClassCategory.change(function () { //voucher single
//     var _val = $(this).val();    
//     window.location = base_url+'class?data_type='+_val
// })
$('#academyBtn').click(function() {
    var _val = selectClassCategory.val()  
    if (_val === '') {
        return false
    }  
})