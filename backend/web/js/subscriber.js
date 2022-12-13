// Поиск по заказам и пагинация
$('#subscribersList').DataTable({
    dom: "<'row'<'col'l><'col-sm-12'f>>t<'row'<'col'i><'col-sm-12'p>>",
    bLengthChange: false,
    bInfo: false,
    iDisplayLength: 15,
    language: {
        search: 'Поиск по подписчикам',
        searchPlaceholder: 'Можно искать по почте, дате, времени и по городу',
        paginate: {
            previous: 'Предыдущая',
            next: 'Следующая'
        }
    }
});

// Отправка письма
$('.btn-mail-send').on('click', function () {
    console.log('dsag');
    $.ajax({
        url: '/admin/mail/send',
        type: 'post',
        success: function (data) {
            $('div.modal-dialog').html(data);
            console.log(data);
        }
    });
});