<div class="modal fade" id="modal-create-project" tabindex="-1" role="dialog" aria-labelledby="label-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label-modal">Create a new project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="project-title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="project-title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="desc-text" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="desc-text" name="desc" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add project</button>
            </div>
        </div>
    </div>
</div>
