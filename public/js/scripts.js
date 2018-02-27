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



 $('.datepicker').pickadate({
    selectYears: 80,
    min: new Date(1960,3,20),
    max: new Date(2020,7,14),
});


    

    $('.timepicker').pickatime({
        twelvehour: true
    });

    $('.mdb-select').material_select();
});