var id_project = 0;

$(document).ready(function () {

    $("#btn-add").on('click', function (evt) {

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
                    '<p><strong>' + data.project.title + '</strong> has been inserted successfully</p>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                );

                alert.appendTo($('#alert-area-add'));

                $('#frmCreateProject').trigger("reset");

                location.reload();

                setTimeout(function () {
                    alert.fadeOut(1500);
                }, 5000);
            },

            error: function (json) {
                var alert = $(
                    '<div class="alert alert-danger alert-dismissible fade show"  style="height: auto;" role="alert">' +
                    '<strong>An error has occurred:</strong>' +
                    '<ul></ul>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                );

                var errors = json.responseJSON.message;

                $.each(errors, function (key, value) {
                    alert.find("ul").append('<li>' + value + '</li>');
                });

                alert.appendTo($('#alert-area-add'));

                setTimeout(function () {
                    alert.fadeOut(1500);
                }, 10000);
            }
        });
    });

    $('#frmEditProject').on('submit', function (evt) {

        evt.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "/projects/update/" + id_project,
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData(this),
            dataType: 'json',

            success: function (data) {
                var alert = $(
                    '<div class="alert alert-success alert-dismissible fade show"  style="height: auto;" role="alert">' +
                    '<p><strong>' + data.title + '</strong>,&nbsp;' + data.success + '</p>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                );

                alert.appendTo($('#alert-area-edit'));

                $('#frmEditProject').trigger("reset");

                location.reload();

                setTimeout(function () {
                    alert.fadeOut(1500);
                }, 5000);
            },

            error: function (json) {

                var alert = $(
                    '<div class="alert alert-danger alert-dismissible fade show"  style="height: auto;" role="alert">' +
                    '<strong>An error has occurred:</strong>' +
                    '<ul></ul>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                );

                var errors = json.responseJSON.message;

                $.each(errors, function (key, value) {
                    alert.find("ul").append('<li>' + value + '</li>');
                });

                alert.appendTo($('#alert-area-edit'));

                setTimeout(function () {
                    alert.fadeOut(1500);
                }, 10000);
            }
        });
    });

    $("#btn-delete").on('click', function (evt) {

        evt.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/projects/delete/' + id_project,
            dataType: 'json',
            beforeSend: function () {
                $('#deleting').text('Deleting...');
            },
            success: function (data) {
                $('#deleting').text(data.success);
                location.reload();
            },
            error: function (data) {
                console.log(data);
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
    id_project = project_id;

    $.ajax({
        type: 'GET',
        url: '/projects/' + project_id + '/edit',
        dataType: "json",
        success: function (data) {
            $("#frmEditProject input[name=title]").val(data.project.title);
            $("#frmEditProject input[name=date_start]").val(data.project.date_start);
            $("#frmEditProject input[name=date_end]").val(data.project.date_end);
            $("#frmEditProject textarea[name=description]").val(data.project.description);
            $('#editProjectModal').modal('show');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + '\r\n' +
                xhr.statusText + '\r\n' +
                xhr.responseText + '\r\n' +
                ajaxOptions);
        }
    });
}

function closeEditModal() {
    $('#editProjectModal').modal('hide');
}

function deleteProjectForm(project_id) {

    id_project = project_id;

    $.ajax({
        type: 'GET',
        url: '/projects/getproject/' + project_id,
        success: function (data) {
            $('#sms_delete').text(data.project.title);
            $('#deleteProjectModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });

}

function viewProjectForm(project_id) {

    id_project = project_id;

    $.ajax({
        type: 'GET',
        url: '/projects/getproject/' + project_id,
        success: function (data) {
            $('#view_title').text(data.project.title);
            $('#view_date_start').text(data.project.date_start);
            $('#view_date_end').text(data.project.date_end);
            $('#view_created').text(data.project.created_at);
            $('#view_updated').text(data.project.updated_at);
            $('#viewProjectModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });

}
