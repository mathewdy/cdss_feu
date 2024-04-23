document.querySelectorAll('.delete-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        var itemId = this.getAttribute('data-item-id');
        swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this item!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = 'delete-patient.php?patient_id=' + itemId;
            } else {
                swal('Your item is safe!', {
                    icon: 'info',
                });
            }
        });
    });
});
