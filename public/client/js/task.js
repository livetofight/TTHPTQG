$(function() {
    get_list_questions();
});
async function get_list_questions(data) {
    let result;
    let url = url('task/question');
    let success = function(responce) {
        let json_data = $.parseJSON(responce);
        show_lists_questions(json_data);
    };
    try {
        result = await $.get(url, data, success);
    } catch (error) {
        console.error(error);
    }

}

function show_lists_questions(data) {

    //DANH SÁCH CÂU HỎI
    let list = $('#list_question');
    list.empty();
    if (data['total_record'] == 0) {
        list.appdend('<div class="callout callout-danger">' +
            '<h4>Lỗi!</h4>' +
            '<p>Chưa có dữ liệu !</p>' +
            '</div>');
    } else {
        for (let i = 0; i < data['total_record']; i++) {
            let number_question = i + 1
            let box = $('<div class="box box-solid"></div>')
            let box_header = $('<div class="box-header with-border"></div>');
            let box_body = $('<div class="box-body"></div>');
            let dl = $('<dl class="dl-horizontal id="ques_' + i + '"></dl>');
            box_header.append('<i class="fa fa-question"></i>');
            box_header.append('<h3 class="box-title"><strong>Câu ' + number_question + ':</strong> </h3>');
            box_header.append('<span style="font-size: 16px">' + data[i].question_content + '</span>');
            box.append(box_header);
            dl.append('<dt><input type="radio" name="question_' + i + '" class="minimal" onclick="change_css(' + i + ')" >A.</dt>' +
                '<dd>' + data[i].ans_1 + '.</dd>');
            dl.append('<dt><input type="radio" name="question_' + i + '" class="minimal" onclick="change_css(' + i + ')" >B.</dt>' +
                '<dd>' + data[i].ans_2 + '.</dd>');
            dl.append('<dt><input type="radio" name="question_' + i + '" class="minimal" onclick="change_css(' + i + ')" >C.</dt>' +
                '<dd>' + data[i].ans_3 + '.</dd>');
            dl.append('<dt><input type="radio" name="question_' + i + '" class="minimal" onclick="change_css(' + i + ')" >D.</dt>' +
                '<dd>' + data[i].ans_4 + '.</dd>');
            box_body.append(dl);
            box.append(box_body);
            list.append(box);

        }
    }

    //SỐ CÂU HỎI
    let number_question = $('#list_number');
    number_question.empty();
    let box = $('<div class="box"></div>');
    let box_body = $('<div class="box-body no-padding"></div>');
    let table = $('<table class="table table-condensed"></table>');
    let tbody = $('<tbody></tbody>');
    let n = 0;
    let m = 0;
    if (data['total_record'] < 10) {
        let tr = $('<tr></tr>');
        for (let i = 0; i < data['total_record']; i++) {
            n += 1;
            tr.append('<td><span class="badge bg-light-blue" longdesc="' + (n - 1) + '" onclick="go_to_page(' + Math.floor((n - 1) / 2) + ')">' + n + '</span></td>');
        }
        tbody.append(tr);
    } else {
        for (let i = 0; i < data['total_record']; i += 10) {
            let tr = $('<tr></tr>');
            if (n == data['total_record']) {
                break;
            };
            for (let j = 0; j < 10; j++) {
                n += 1;
                if (n < 10) {
                    tr.append('<td><span class="badge bg-light-blue" longdesc="' + (n - 1) + '" onclick="go_to_page(' + Math.floor((n - 1) / 2) + ')">0' + n + '</span></td>');
                } else {
                    tr.append('<td><span class="badge bg-light-blue" longdesc="' + (n - 1) + '" onclick="go_to_page(' + Math.floor((n - 1) / 2) + ')">' + n + '</span></td>');
                }
            }
            tbody.append(tr);
            m = data['total_record'] - n;
            if (m - 10 < 0) {
                let tr2 = $('<tr></tr>');
                for (let h = 0; h < m; h++) {
                    n += 1;
                    tr2.append('<td><span class="badge bg-light-blue" longdesc="' + (n - 1) + '" onclick="go_to_page(' + Math.floor((n - 1) / 2) + ')">' + n + '</span></td>');
                }
                tbody.append(tr2);
            }
        }
    }
    table.append(tbody);
    box_body.append(table);
    box.append(box_body);
    number_question.append(box);


    //THỜI GIAN
    //1 phút = 60000 ms
    var time = data['time_start'][0]['time'];
    document.getElementById("time").innerHTML = "Bắt đầu";
    var timetask = time * 60000;
    var today = new Date();
    var gettime = today.getTime();

    timesetup = gettime + timetask;

    // cập nhập thời gian sau mỗi 1 giây
    var x = setInterval(function() {

        var now = new Date().getTime();
        // Lấy số thời gian chênh lệch
        var distance = timesetup - now;

        // Tính toán số  giờ, phút, giây từ thời gian chênh lệch
        var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        // HIển thị chuỗi thời gian trong thẻ p
        document.getElementById("time").innerHTML = hours + ":" + minutes + ":" + seconds;

        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distance <= 60000) {
            $('.notification').addClass('show');
            $('.blurred-background').addClass('show')
        }
        if (distance <= 30000) {
            $('.notification').addClass('hidden');
        }
        if (distance <= 1) {
            clearInterval(x);
            alert("Hết giờ ");
            document.getElementById("time").innerHTML = "Hết giờ";
        }
    }, 1000);

    //PHÂN TRANG
    var show_item_page = data['page_size'];
    var number_of_items = data['total_record'];
    var number_of_pages = Math.ceil(number_of_items / show_item_page);
    $('#current_page').val(0);
    $('#show_item_page').val(show_item_page);
    let page_navigation = $('#page_navigation');
    page_navigation.empty();
    let ul = $('<ul class="pagination pagination-sm no-margin"></ul>')
    ul.append('<li><a class="previous_link" href="javascript:previous();">&laquo;</a></li>');
    var current_link = 0;
    while (number_of_pages > current_link) {
        ul.append('<li><a class="page_link" href="javascript:go_to_page(' + current_link + ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a></li>');
        current_link++;
    }
    ul.append('<li><a class="next_link" href="javascript:next(' + number_of_pages + ');">&raquo;</a></li>');

    page_navigation.append(ul);

    //css active trang đang được chọn 
    $('#page_navigation .page_link:first').addClass('active_page');

    //ẩn phần tử trong list_question
    $('#list_question').children().css('display', 'none');

    //hiển thị các phần tử từ 0 đến show_item_page không bao gồm show_item_page (slice)
    $('#list_question').children().slice(0, show_item_page).css('display', 'block');
}
//Pagination JS
function previous() {
    new_page = parseInt($('#current_page').val()) - 1;
    if (new_page >= 0) {
        if ($('.active_page').parent().next().find('.page_link').length) {
            go_to_page(new_page);
        }
    }
}

function next(total_page) {
    new_page = parseInt($('#current_page').val()) + 1;
    if (new_page != total_page) {
        if ($('.active_page').parent().next().find('.page_link').length) {
            go_to_page(new_page);
        }
    }
}

function go_to_page(page_num) {
    var current_page = parseInt($('#current_page').val());
    var show_item_page = parseInt($('#show_item_page').val());
    start_from = page_num * show_item_page;
    end_on = start_from + show_item_page;
    $('#list_question').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
    if (page_num != current_page) {
        $('.page_link[longdesc=' + current_page + ']').removeClass('active_page').addClass('actived_page');
    }
    $('.page_link[longdesc=' + page_num + ']').addClass('active_page');
    $('#current_page').val(page_num);
}

function change_css(number_ques) {
    $('.badge[longdesc=' + number_ques + ']').removeClass('bg-light-blue').addClass('bg-yellow');
}