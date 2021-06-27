var idsp = $("#idsp").val();
load_data();
// thêm sản phẩm
function load_data(idsp, star, message) {
    $.ajax({
        url: "controllers/comment.php",
        method: "post",
        data: { idsp: idsp, star: star, message: message },
        success: function(data) {
            $('#comment').html(data);
        }
    });
}
//show sản phẩm
function load_data2(idsp) {
    $.ajax({
        url: "controllers/comment.php",
        method: "post",
        data: { idsp: idsp },
        success: function(data) {
            $('#comment').html(data);
        }
    });
}
load_data2(idsp);
//kiểm tra
$('#submit').click(function() {
    var star = $("#danhgia").html();
    var message = $("#message").val();
    if (message == '') {
        $("#canhbao").html('Vui lòng nhập nội dung');
        $("#message").focus();
    } else {
        $("#name").html('');
        $("#message").html('');
        $("#canhbao").html('');
    }
    load_data(idsp, star, message);
});