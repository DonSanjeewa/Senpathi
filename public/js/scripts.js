$(document).ready(function () {
    var table = $('.data-table-custom').DataTable({
        "lengthChange": false
    });

    $('.data-table-custom tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('.datepicker').pickadate();

    $('.timepicker').pickatime({
        twelvehour: true
    });
});