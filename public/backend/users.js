$(document).ready(function () {
    const ajaxUrl = $('#dataSrc').val();

    $('#dataTable-1').DataTable({
        processing: true,
        serverSide: true,
        ajax: ajaxUrl,
        columns: [
            {
                data: null,
                searchable: false,
                orderable: false,
                render: function () {
                    return `<div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                            </div>`;
                }
            },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
        autoWidth: true,
        lengthMenu: [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    });


  


});



//edit user
$(document).ready(function(){
    const editUrlTemplate = $('#dataSrc2').val();

    $(document).on('click', '.edit-user', function () {
        var userId = $(this).data('id');

        // Replace :id in the route template with the actual user ID
        const editUrl = editUrlTemplate.replace(':id', userId);

        $.ajax({
            url: editUrl,
            method: 'GET',
            success: function(response) {
                var user = response.user;

                $('#editName').val(user.name);
                $('#editEmail').val(user.email);

                $('#editUserModal').modal('show');
            },
            error: function() {
                alert('Error fetching user data.');
            }
        });
    });
});

$('#editUserForm').on('submit', function (e) {
    e.preventDefault();

    let userId = $('#editUserId').val();
    const updateUrl = $('#userUpdateUrl').val() + '/' + userId + '/update';

    $.ajax({
        url: updateUrl,
        method: 'POST',
        data: {
            _token: $('input[name="_token"]').val(),
            name: $('#editName').val(),
            email: $('#editEmail').val(),
            role: $('#editRole').val(),
        },
        success: function (response) {
            if (response.success) {
                $('#editUserModal').modal('hide');
                $('#usersTable').DataTable().ajax.reload();
                alert(response.message);
            }
        },
        error: function (xhr) {
            alert('Error updating user.');
        }
    });
});



$(document).ready(function () {
    const ajaxUrl = $('#dataSrc1').val();

    // Create new user modal
    $('#createUserBtn').on('click', function () {
        // Clear previous errors
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();

        // Show modal
        $('#createUserModal').modal('show');
    });

    // Handle form submit inside modal
    $('#createUserForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize();

        $.ajax({
            url: ajaxUrl, // Replace with your actual URL
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    $('#createUserModal').modal('hide');
                    alert('User created successfully!');
                    // Optionally, refresh DataTable or do any other necessary updates
                    $('#dataTable-1').DataTable().ajax.reload();
                } else {
                    alert('Failed to create user. Error: ' + response.error);
                }
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
});
