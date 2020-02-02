<div class="modal fade" id="editProjectModal" role="dialog" tabindex="-1" aria-labelledby="label-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="label-modal">Edit project</h4>
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmEditProject" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label for="edit_title">Title*</label>
                        <input class="form-control" name="title" required type="text" minlength="4" maxlength="10" id="edit_title" placeholder="Title">
                        <div class="invalid-tooltip">
                            Please provide a valid title.
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Number of characters max: 10</small>
                    </div>
                    <div class="form-group">
                        <label for="edit_date_start">Start date*</label>
                        <input class="form-control" name="date_start" required type="date" id="edit_date_start">
                        <div class="invalid-tooltip">
                            Please provide a valid date.
                        </div>
                        <small id="emailHelp" class="form-text text-muted">When will you start your project?</small>
                    </div>
                    <div class="form-group">
                        <label for="edit_date_end">End date*</label>
                        <input class="form-control" name="date_end" required type="date" id="edit_date_end">
                        <div class="invalid-tooltip">
                            Please provide a valid date.
                        </div>
                        <small id="emailHelp" class="form-text text-muted">When will you end your project?</small>
                    </div>
                    <div class="form-group">
                        <label class="d-inline">Description&nbsp;</label>
                        <small class="form-text text-muted d-inline">(optional)</small>
                        <textarea class="form-control" id="edit_desc_text" name="description" rows="4" maxlength="50" placeholder="Description"></textarea>
                        <small id="descHelp" class="form-text text-muted">Describe what the project does</small>
                        <small id="descHelp" class="form-text text-muted">Number of characters max: 50</small>
                    </div>
            </div>
            <div class="container" id="alert-area-add"></div>
            <div class="modal-footer">
                <input class="btn btn-secondary btn-sm" id="btn-reset-edit" type="reset" onclick="closeEditModal();" value="Cancel">
                <button class="btn btn-info btn-sm" id="btn-edit" type="submit" value="edit">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>
