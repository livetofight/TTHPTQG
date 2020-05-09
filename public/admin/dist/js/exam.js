$(document).ready(function(){
    baseUrl = window.location.origin;
    $('#btnCreate').click(function(e){
        e.preventDefault();
        $('#error_message').empty();
        var subject_id = $('#subject').val();
        var number = $('#number').val();
        var time = $('#time').val();
        if(subject_id == '' || number == '' || time == ''){
            $('#error_message').html('<div class="callout callout-danger">' +
            '<h4>Lỗi!</h4>' +
            'Vui lòng điền đầy đủ thông tin.' +
            '</div>')
        }
        else{
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: baseUrl+'/admin/exam/createexam',
                type: 'POST',
                data: {
                    subject_id: subject_id,
                    number: number,
                    time: time
                },
                success:function(data){
                    $('#CreateExam').modal('hide');
                    alert('Exam is created!!');
                    location.reload();
                },
                error: function(){
                    alert('Error! try it again');
                }
            });
        }
    })

    $('.btnDelete').on('click',function(){
        $('#deleteModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
    });

    $('#deleteFormID').on('submit', function(e){
        e.preventDefault();
        var id = $('#delete_id').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: baseUrl+"/admin/exam/deleteexam/"+id,
            // data: {
            //     id:id
            // },
            // data: $('#deleteFormID').serialize(),
            success:function(result){
                //console.log(baseUrl);
                var json_data = $.parseJSON(result);
                //console.log(json_data);
                    if(json_data.status == 1){

                        $('#deleteModal').modal('hide');
                        alert('success');
                        location.reload();
                        // window.location.replace(baseUrl+"/createexam");
                    }
                    else{
                        $('#error_message').html('<div class="callout callout-danger">' +
                                '<h4>Lỗi!</h4>' +
                                'Không nhập được đề.' +
                                '</div>')
                    }
                // console.log(result);
                // $('#deleteModal').modal('hide');
                // alert('success');
                // location.reload();
            }
            // ,
            // error: function(error){
            //     console.log(error);
            // }
        });
    })
});


function update(id){
    baseUrl = window.location.origin;
    var time = $("#"+id).html();
    console.log(time);
    if(time==''){
        $('#error').html('<div class="callout callout-danger">' +
        '<h4>Lỗi!</h4>' +
        'Vui lòng không để trống.' +
        '</div>')
    }else if(time<=0){
        $('#error').html('<div class="callout callout-danger">' +
        '<h4>Lỗi!</h4>' +
        'Vui lòng enter correct value.' +
        '</div>')
    }
    else{
        $('#error').empty();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: baseUrl+'/admin/exam/editexam',
            type: 'POST',
            data: {
                id: id,
                time: time
            },
            success:function(result){
                var json_data = $.parseJSON(result);
                if(json_data.status == 1){
                    alert('success');
                }
                else{
                    $('#error_message').html('<div class="callout callout-danger">' +
                            '<h4>Lỗi!</h4>' +
                            'Not update.' +
                            '</div>')
                }
            }
        });
    }
}
