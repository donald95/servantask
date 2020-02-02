<div class="modal fade" id="deleteProjectModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete project</h4>
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmDeleteProject">
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong id="sms_delete"></strong> data?</p>
                    <p class="text-info">
                        <small id="deleting">
                            This action cannot be undone.
                        </small>
                    </p>
                </div>
                <div class="modal-footer">
                    <input id="delete_project_id" name="delete_project_id" type="hidden">
                    <input class="btn btn-default btn-sm" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-danger btn-sm" id="btn-delete" type="button">
                        Delete project
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
