//  đánh giá của sp
$(function() {
    var star = parseFloat($("#starnone").html());
    $("#star").rateYo({
        rating: star,
        readOnly: true,
        starWidth: "20px"
    });
});


//  Đánh giá của user
$(function() {
    $("#rateYo").rateYo({
        rating: 5,
        starWidth: "20px",
        fullStar: true
    })

    .on("rateyo.change", function(e, data) {
        var rating = data.rating;
        $(this).next().text(rating);
    });
});