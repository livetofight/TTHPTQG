$(document).ready(function() {
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
                var form_data = new FormData();
                var attachment_data = $("#file_form").find("#inputFile").val();
                form_data.append("inputFile", inputFile);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '../admin/student/import',
                    type: 'POST',
                    data: form_data,
                    contentType: false,
                    processData: false,
                    mimeType: 'multipart/form-data',
                    success: function(result) {
                        var json_data = $.parseJSON(result);
                        if (json_data.status) {
                            window.location.replace("../admin/student/");
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