function confirm_delete(item, action) {
    $.modal({
        title: 'Confirme que desea eliminar',
        class: 'tiny',
        closeIcon: false,
        content: item,
        actions: [
            {
                text: 'Eliminar',
                class: 'red',
                click: function () {
                    window.location.replace(action);
                }
            },
            {
                text: 'Cancelar',
                class: 'black'
            },
        ],
    }).modal('show');
}
