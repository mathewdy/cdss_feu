$(document).ready(function(){
    $('#dataTable').DataTable();
    $('.dataTable_length').remove();

    $('<a class="btn btn-success mr-2 mb-4 " href="patients/create-patient.php"><i class="ti-user"></i> Add Patient</a>')
    .insertBefore('div.dataTables_length');
});
