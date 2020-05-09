$(document).ready(function() {
    baseUrl = window.location;
    $('#inputFile').hover(function(e) {
        e.preventDefault();
        $('#error_message').empty();
    });
    $('#btn_import').click(function(e) {
        e.preventDefault();
        $('#error_message').empty();
        var inputFile = $('#inputFile').val();
        var type_file = inputFile.split('.').pop().toLowerCase();
        if (inputFile == "") $('#error_message').html('<div class="callout callout-danger">' +
            '<h4>Lỗi!</h4>' +
            'Vui lòng chọn tệp.' +
            '</div>')
        else {
            if ($.inArray(type_file, ['xlsx', 'xls']) >= 0) {
                var form_data = new FormData($('#file_form')[0]);
                form_data.append("inputFile", $('input[type=file]')[0].files[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: baseUrl + "/import",
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    mimeType: 'multipart/form-data',
                    success: function(result) {
                        var json_data = $.parseJSON(result);
                        if (json_data.status) {
                            window.location.replace(baseUrl);
                        } else {
                            $('#error_message').html('<div class="callout callout-danger">' +
                                '<h4>Lỗi!</h4>' +
                                'Không nhập được File.' +
                                '</div>')
                        }
                    }

                })

            } else {
                $('#error_message').html('<div class="callout callout-danger">' +
                    '<h4>Lỗi!</h4>' +
                    'Vui lòng chọn tệp Excel.' +
                    '</div>')
            }
        }
    });
});
