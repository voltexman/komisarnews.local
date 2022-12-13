// Поиск по заказам и пагинация
$('#subscribersList').DataTable({
    dom: "<'row'<'col'l><'col-sm-12'f>>t<'row'<'col'i><'col-sm-12'p>>",
    bLengthChange: false,
    bInfo: false,
    iDisplayLength: 15,
    language: {
        search: 'Поиск по заказам',
        searchPlaceholder: 'Можно искать по ФИО, телефону, почте или городу',
        paginate: {
            previous: 'Предыдущая',
            next: 'Следующая'
        }
    }
});

// Детальная информация о заказе
$('a.order-details').on('click', function () {
    var id = this.id;
    $.ajax({
        url: 'order/details/' + id,
        type: 'post',
        success: function (data) {
            $('div.modal-dialog').html(data);
        },
        error: function (error) {

        }
    });
});

// Смена статуса заказа
$('.select-order-status li').on('click', function () {
    var id = $(this).parent().attr('id'),
        status = $(this).text(),
        button = $('button.btn-select-order-status-'+id);
    $.ajax({
        url: '/admin/order/status',
        type: 'post',
        data: {id: id, status: status},
        success: function () {
            notification(status);
            if (status === 'В ожидании') {
                $(button).removeClass('btn-default btn-danger btn-success');
                $(button).addClass('btn-warning');
                $(button).html(status);
            }
            if (status === 'Завершён') {
                $(button).removeClass('btn-default btn-danger btn-warning');
                $(button).addClass('btn-success');
                $(button).html(status);
            }
        },
        error: function () {
            notification('Смена статуса не удалась');
        }
    });
});

// Всплывающая галерея изображений
$('.image').magnificPopup({
    type: 'image',
    gallery: {
        tPrev: 'Предыдущая',
        tNext: 'Следующая',
        enabled: true
    }
});

function notification(status) {
    setTimeout(function () {
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': 300,
            'hideDuration': 1000,
            'timeOut': 5000,
            'extendedTimeOut': 1000,
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        };
        toastr.success('<strong>Статус изменён</strong> <br/><small>' + status + '</small>');
    }, 100);
}
