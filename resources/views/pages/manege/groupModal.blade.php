<div id="createGroup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class='modal-header'>
                <button type="button" class="close" data-dismiss="modal">&times;</button>    
                <h4>Create group</h4>
            </div>    
            <div class="container">
                <form id=createGroupForm > 
                    <div class="alert fade in">
                        <i class="fa" aria-hidden="true"></i> 
                        <i></i>                
                    </div>
                    {{csrf_field()}}
                    <div class=row > 
                        <div class=col-sm-6 > 
                            <div class=form-group >
                                <label for=groupName >Group name</label>
                                <input class=form-control type=text name=groupName />
                            </div>
                            <div class=form-group >
                                <label for=catagory >Catagory</label>
                                <select class=form-control name=catagory >
                                    <option value=class >Class</option>
                                    <option value=other >Other</option>
                                </select>
                            </div>
                            <div id=classInputs >
                                <div class=form-group > 
                                    <label for=adviser >Adviser id</label>
                                    <input name=adviser type=text class=form-control />
                                </div>
                                <div class=form-group > 
                                    <label for="section">Section</label>
                                    <input name=section type=text class=form-control />
                                </div>
                            </div>
                        </div>
                        <div class=col-sm-6>
                            <div class='form-group text-center' id=members > 
                                <label for=mambers >Members id </label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group btn-group-justified">
                        <div class='btn-group'>
                            <input type=submit class='btn btn-success' value=Create />
                        </div>
                        <div class='btn-group'>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="editGroup" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>    
                <h4>Edit Group</h4>
            </div>
            <div class="modal-body">
                <form id=editGroupForm style="height:24em">{{csrf_field()}}<input id=id hidden/></form>
            </div>
        </div>
    </div>
</div>
<div id="editMamber" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>    
                <h4>Edit Mamber</h4>
            </div>
            <div class="modal-body" style='height:35em'>
                <div class="container">
                    <div class="row">
                        <form id=editMamberForm >
                            {{csrf_field()}}
                            <input hidden id='id'/>
                            <div class="col-sm-6">
                                <h5>Members</h5>
                                <div class="alert fade in">
                                    <i class="fa" aria-hidden="true"></i> 
                                    <i></i>                
                                </div>
                                <div class="checkbox"><div class='container'>
                                    <ul class="list-group">
                                    </ul>
                                </div></div>
                            </div>
                            <div class='col-sm-6' id='inputs'>
                                <h5>New members</h5>
                                <div class=container ></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>