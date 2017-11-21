$(document).ready(function() {
    $('#table-establishment').dataTable({
        columnDefs: [{
            orderable: false,
            targets: -1,
            width: 80
        }],
        language: {
            sEmptyTable: 'Nenhum registro encontrado',
            sInfo: 'Exibindo de _START_ até _END_ de _TOTAL_ registros',
            sInfoEmpty: 'Exibindo 0 até 0 de 0 registros',
            sInfoFiltered: '(Filtrados de _MAX_ registros)',
            sInfoPostFix: '',
            sInfoThousands: '.',
            sLengthMenu: '_MENU_ registros por página',
            sLoadingRecords: 'Carregando...',
            sProcessing: 'Processando...',
            sZeroRecords: 'Nenhum registro encontrado',
            sSearch: 'Pesquisar',
            oPaginate: {
                sNext: '&rsaquo;',
                sPrevious: '&lsaquo;',
                sFirst: '&laquo;',
                sLast: '&raquo;'
            },
            oAria: {
                sSortAscending: ': Ordenar colunas de forma ascendente',
                sSortDescending: ': Ordenar colunas de forma descendente'
            }
        },
        responsive: true
    });
});