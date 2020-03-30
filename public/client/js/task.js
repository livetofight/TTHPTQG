$(document).ready(function() {
    //$('#time').val()
    var timetask = 70000;
    var today = new Date();
    var gettime = today.getTime();

    timesetup = gettime + timetask;

    // cập nhập thời gian sau mỗi 1 giây
    var x = setInterval(function() {

        var now = new Date().getTime();
        // Lấy số thời gian chênh lệch
        var distance = timesetup - now;

        // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // HIển thị chuỗi thời gian trong thẻ p
        document.getElementById("time").innerHTML = minutes + ":" + seconds;

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
});