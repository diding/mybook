var postid = 0;
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function (event) {
    event.preventDefault();

    postid = event.target.parentNode.parentNode.dataset['postid'];
    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
})

$('#modal-save').on('click', function () {
    $.ajax({
       method: 'POST',
        url: url,
        data: {
            body: $('#post-body').val(), postId: postid, _token: token
        }
    })
    .done(function (msg) {
        $(postBodyElement).text(msg['new_body']);
        $('#edit-modal').modal('hide');
    });
})