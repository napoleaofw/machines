$(document).ready(function() {
    $(document).on('click', '.btn-print', function() {
        $('.invoice').printThis();
    })
});