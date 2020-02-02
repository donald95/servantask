
$(document).ready(function () {
    $("#btn-add").on('click', function (evt) {

        alert('Gate');

        evt.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',

            url: '/projects',

            data: {
                title: $("#frmCreateProject input[name=title]").val(),
                date_start: $("#frmCreateProject input[name=date_start]").val(),
                date_end: $("#frmCreateProject input[name=date_end]").val(),
                description: $("#frmCreateProject textarea[name=description]").val()
            },

            dataType: 'json',

            success: function (data) {
                var alert = $(
                    '<div class="alert alert-success alert-dismissible fade show"  style="height: auto;" role="alert">' +
                    '<p><strong>' + data.message + '</strong> has been inserted successfully</p>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                );

                alert.appendTo($('#alert-area-add'));

                $('#frmAddEmployee').trigger("reset");

                setTimeout(function () {
                    alert.fadeOut(1500);
                }, 5000);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert('Bad');
            }
        });
    });

    $('.btn-ripple').on('click', function (evt) {
        var btn = $(evt.currentTarget);
        var x = evt.pageX - btn.offset().left;
        var y = evt.pageY - btn.offset().top;

        $('<span/>').appendTo(btn).css({
            left: x,
            top: y
        });
    });
});

function createProjectForm() {
    $('#createProjectModal').modal('show');
}

function closeCreateModal() {
    $('#createProjectModal').modal('hide');
}

function editProjectForm(project_id) {
    $('#editProjectModal').modal('show');
}

function closeEditModal() {
    $('#editProjectModal').modal('hide');
}

function deleteProjectForm(project_id) {
    $('#deleteProjectModal').modal('show');
}

function viewProjectForm(project_id) {
    $('#viewProjectModal').modal('show');
}
