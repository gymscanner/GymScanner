/* Formatting function for row details - modify as you need */
$.extend($.fn.dataTable.defaults, { dom: 'frtip' });
function format ( d ) {
    // `d` is the original data object for the row
    return '<table class="table" cellpadding="5" style="padding-left:50px;">'+
        '<tr>'+
        '<td>User name:</td>'+
        '<td>'+d.UserName+'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>contact no:</td>'+
        '<td>'+d.contact+'</td>'+
        '</tr>'+
        '<tr>'+
        '<td>Extra info:</td>'+
        '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
        '</table>';
}

var table2 = $('#table2').DataTable( {
    "ajax": "../data/data.txt",
    "columns": [
        {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
        },
        { "data": "#" },
        { "data": "FirstName" },
        { "data": "LastName" },
        { "data": "UserE-mail" }
    ],
    "order": [[1, 'asc']],
    "responsive":true
} );
// Add event listener for opening and closing details
$('#table2 tbody').on('click', 'td', function () {
    var tr = $(this).closest('tr');
    var row = table2.row( tr );

    if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
        tr.next().children().css("pointer-events","none");

    }
} );
$('#table1').DataTable({
    "dom": '<"m-t-10"B><"m-t-10 pull-left"f><"m-t-10 pull-right"l>rt<"pull-left m-t-10"i><"m-t-10 pull-right"p>',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
