<div class="modal fade" id="viewProjectModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Info project</h4>
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmViewProject">
                <div class="modal-body">
                    <table class="table table-striped" align="center">
                        <tr>
                            <td class="text-right"><strong>Title:</strong></td>
                            <td id="view_title"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Start date:</strong></td>
                            <td id="view_date_start"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>End date:</strong></td>
                            <td id="view_date_end"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Created at:</strong></td>
                            <td id="view_created"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Updated at:</strong></td>
                            <td id="view_updated"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input id="view_project_id" name="view_project_id" type="hidden">
                    <input class="btn btn-dark btn-sm" data-dismiss="modal" type="button" value="Close">
                </div>
            </form>
        </div>
    </div>
</div>
