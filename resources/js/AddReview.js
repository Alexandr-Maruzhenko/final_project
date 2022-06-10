$(document).ready(function () {

    $("#send_review").click(function () {
        alert("test");
        let text = $('#review_text').val();
        let token = $('#_token').val();
        // console.log(token);
        let articleId = $('#article_id').val();
        let mark = $('#review_mark').val();

        $.post('/add-comment', {text: text, _token: token, articleId: articleId, mark: mark}, function () {

        }).done(function (response) {
            // console.log(response)
            response = JSON.parse(response)
            $("#comments").append("<div>Mark:"+response.mark+"</div><div>Comment:"+response.text+"</div>")

        })


    })

})
