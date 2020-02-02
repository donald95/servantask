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
                            <td class="text-right"><strong>Code:</strong></td>
                            <td id="view_code"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Name:</strong></td>
                            <td id="view_name"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Lastname:</strong></td>
                            <td id="view_last"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Faculty:</strong></td>
                            <td id="view_facu"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Section:</strong></td>
                            <td id="view_sect"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Position:</strong></td>
                            <td id="view_posi"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Salary:</strong></td>
                            <td id="view_sala"></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Birth date:</strong></td>
                            <td id="view_date"></td>
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
