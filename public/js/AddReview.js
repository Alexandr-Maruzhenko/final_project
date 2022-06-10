// alert("test");

/******/
(() => { // webpackBootstrap
    var __webpack_exports__ = {};
    /*!***********************************!*\
      !*** ./resources/js/AddReview.js ***!
      \***********************************/
    $(document).ready(function () {
        $("#send_review").click(function () {
            // alert("test");
            var text = $('#review_text').val();
            console.log(text)
            var token = $('#_token').val();
            console.log(token)
            var article_id = $('#article_id').val();
            console.log(article_id)
            var mark = $('#review_mark').val();
            console.log(mark)
            $.post('/add-comment', {
                text: text,
                _token: token,
                article_id: article_id,
                mark: mark
            }, function () {
            }).done(function (response) {
                console.log(response)
                response = JSON.parse(response);
                $("#comments").append("<p>Оценка статьи: " + response.mark + "</p><p>Комментарий к статье: " + response.text + "</p>" + "<hr>");
                $('#review_mark').val('');
                $('#review_text').val('');
            });
        });
    });
    /******/
})()
;
