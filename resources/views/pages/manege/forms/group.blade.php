<div class="container">
    <div class='row'>
        <div class="col-md-8 col-sm-offset-2 jumbotron">
            <h3>Add Group</h3>
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
                                <input class=form-control type=text name=groupName ng-required="true" ng-model="groupName"/>
                            </div>
                            <div class=form-group >
                                <label for=catagory >Catagory</label>
                                <select class=form-control name=catagory ng-required="true" ng-model="catagory">
                                    <option value=class >Class</option>
                                    <option value=other >Other</option>
                                </select>
                            </div>
                            <div id=classInputs >
                                <div class=form-group > 
                                    <label for=adviser >Adviser id</label>
                                    <input name=adviser type=text class=form-control ng-required="true" ng-model="adviser"/>
                                </div>
                                <div class=form-group > 
                                    <label for="section">Section</label>
                                    <input name=section type=text class=form-control ng-required="true" ng-model="section"/>
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
<script>
    var groupAlert = $('#createGroupForm>.alert').hide();
    var inputs = $('#createGroupForm').find('#classInputs').hide();

    createInput(10,'members','#createGroupForm #members');
    $('select').val('');
    $('#createGroup #classInputs').hide();

    $(document).on('change','#createGroupForm select',function(){   
        if($(this).val() == 'class')
            inputs.slideDown(200);
        else
            inputs.slideUp(200);
    });
    $(document).on('focusout','#editGroupForm select',function(){
        var inputs = $(this).parents('#editGroupForm').find('#classInputs');
        if($(this).val() == 'class'){
            $('#editGroup .modal-content').css('height','35em'); 
            inputs.slideDown(200); 
        }
        else{
            $('#editGroup .modal-content').css('height','22em'); 
            inputs.slideUp(200); 
        }
    });
    $('#createGroupForm').off('submit'); 
    $(document).on('submit','#createGroupForm',function(){
        try{
            createGroupRequest();
        }catch(err){
            console.log(err);
        }
        
        return false;
    });
    $(document).on('submit','#editGroupForm',function(){
        try{
            var id = $(this).children('#id').val();
            editGroupRequest(id);
            updateGroupRecord(id);
        }catch(err){
            console.log(err);
        }
        return false;
    });
    $(document).on('submit','#editMamberForm',function(){
        try{
            var id = $(this).children('#id').val();
            editMembers(id);
        }catch(err){
            console.log(err);
        }
        return false;
    });
    $(document).on('click','h3>.btn-lg',function(){
        formReset($('#createGroupForm'));
    });
    $(document).on('click','#groups .fa-edit',function(){
        var id = $(this).parents('tr').children('span').text();
        $('#editGroupForm #id').val(id);
        var inputs = $('#editGroup #classInputs');
        groupEditForm($(this).parents('tr').first());
        if($('#editGroupForm select').val() != "class")
            inputs.hide();
        else
            inputs.show();
    });
    $(document).on('click','#groups .fa-trash',function(){
        _delete('group',this);
    });
    $(document).on('click','#groups .fa-plus',function(){
        var id = $(this).parents('tr').children('span').text();
        $('#editMamberForm').find('#id').val(id);
        var exist = true;
        lodedMembers.forEach(function($id){
            if($id == id)
                exist = false;
        });
        if(exist){
            $('#editMamber #editMamberForm>.col-sm-6>div>div>ul').children().remove();
            renderMambersList(id,$('#editMamber #editMamberForm>.col-sm-6>div>div>ul'));
            lodedMembers.push(id);
        }
      
    });
    createInput(10,'members','#editMamber #inputs>div');
    $(document).on('click','#deleteGroup.a',function(){
        deleteGroup($(this).children('i').text());
    });
    var groupInputs = $('#createGroup').find('.col-sm-6').first().clone(true);
    var editSubmit = $('#createGroup').find('.btn-group-justified').first().clone();
    var editMamber = editSubmit.clone();
    $('#editGroup #editGroupForm').append(groupInputs.removeClass('col-sm-6'));
    $('#editGroup #editGroupForm').append(editSubmit).find('[type=submit]').val('Edit');
    $('#editMamber #editMamberForm').append(editMamber).find('[type=submit]').val('Edit');
   
    // VALIDATION

    onfocusOutValidation();
</script>