function mostrarErro(text) {
    Swal.fire({
        title: 'Ops!',
        text,
        icon: 'error',
        confirmButtonText: 'Entendi'
    })
}

$(document).ready(function() {
    $('#table-historico').DataTable({
        "language": {
            "search": "Filtrar resultados:",
            "lengthMenu": "_MENU_",
            "info": "_START_-_END_ de _TOTAL_ registros",
            "infoEmpty": "",
            "paginate": {
                "first": "Primeira",
                "last": "Última",
                "next": "Avançar",
                "previous": "Voltar"
            },
        }
    });
});

