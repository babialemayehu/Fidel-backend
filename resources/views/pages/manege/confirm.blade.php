<div id='confirm' class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="padding:0">Do you realy want to cancel the event?</h4>
                <div class="alert fade in">
                    <i class="fa" aria-hidden="true"></i> 
                    <i></i>                
                </div>
                <input id=id hidden/>
                <i class="small fa fa-exclamation-triangle" style="color:orange"></i><i class=small >The event will be permanently deleted</i>
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="button" class="btn btn-danger" id="deleteNoti">Delete<i hidden></i></buttton>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
            </div>

        </div>
    </div>