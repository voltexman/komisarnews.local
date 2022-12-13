// Стилизованные чекбоксы
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
elems.forEach(function (html) {
    var switchery = new Switchery(html, {color: '#f6a821', size: 'small'});
});

// Смена статуса материала
$('input.js-switch').on('change', function () {
    var id = $(this).attr('id'),
        change = $(this).attr('change');
    $.ajax({
        url: 'article/status',
        type: 'post',
        data: {change: change, id: id},
        success: function (response) {
            switch (change) {
                case 'publication':
                    change = 'Публикация';
                    break;
                case 'indexation':
                    change = 'Индексация';
                    break;
            }
            var status = response;
            if (status) {
                status = 'включена';
                color = 'success';
            } else {
                status = 'отключена';
                color = 'warning';
            }
            notification(change, status, color);
        },
    });
});

// Уведомление о смене статуса материала
function notification(change, status, color) {
    setTimeout(function () {
        toastr.options = {
            'positionClass': 'toast-top-right',
            'closeButton': true,
            'progressBar': true,
            'showEasing': 'swing',
            'timeOut': '6000'
        };
        if (color === 'success')
            toastr.success('<strong>Статус изменён</strong> <br/><small>' + change + '&nbsp' + status + '</small>');
        else
            toastr.warning('<strong>Статус изменён</strong> <br/><small>' + change + '&nbsp' + status + '</small>');
    }, 100);
}

// Вывод подробностей о статье
$('a.article-details').on('click', function () {
    var id = $(this).attr('id');
    $.ajax({
        url: 'article/details',
        type: 'post',
        data: {id: id},
        success: function (data) {
            console.log(data);
            $('.modal-dialog').html(data);
        }
    });
});
