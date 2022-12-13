function windowAdaptive() {
    if ($(window).width() <= '768') {
        $('.nova-poshta-info')
            .css('margin-top', '60px')
            .addClass('top-arrow');
    } else {
        $('.nova-poshta-info').addClass('left-arrow');
    }
}
$('.subscribe-form').on('beforeSubmit', function () {
    var form = $(this),
        url = form.attr('action'),
        method = form.attr('method'),
        email = form.serialize(),
        sendButton = $('#subscribe-button'),
        infoMessage = $('.subscriber-info-message');
    $.ajax({
        url: url,
        type: method,
        data: email,
        success: function (response) {
            if (response) {
                sendButton.val('Відправлено');
                infoMessage.text(response);
            }
        },
        error: function (response) {
            console.log(response);
        }
    });
    return false;
});
$(window).on('load resize', windowAdaptive());