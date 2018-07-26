<h3>Groups<button class='btn btn-lg btn-success pull-right' data-toggle="modal" data-target='#createGroup'>New Group</button></h3>
<div class=container id=groups >
    <div class="table-responsive">
        <table class="table table-striped table-hover" >
            <tr id=groupHeader >
                <th>Group title</th>
                <th>Catagoty</th>
                <th>number of<br> mambers</th>
                <th></th>
            </tr>
            <div class="alert fade in">
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
            </div>
        </table>
    </div>
    @include('pages.manege.groupModal')
    @include('pages.notification.confirm')
</div>
<script>
    var groupAlert = $('#createGroupForm>.alert').hide();
    var deleteAlert = $('#confirm .alert').hide();
    var container = $('#groups>div>table');
    var confirm = $('#confirm');
    var lodedMembers = [];
    confirm.find('#deleteNoti').attr('id','deleteGroup');
    confirm.find('h4').text('Do you really want to delete the group?');
    confirm.find('.fa-exclamation-triangle').next().text('The group will permanently deleted');

    createInput(10,'members','#createGroupForm #members');
    $('select').val('');
    $('#createGroup #classInputs').hide();

    $(document).on('focusout','#createGroupForm select',function(){
        var inputs = $(this).parents('#createGroupForm').find('#classInputs');
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
    $(document).ready(function(){
        var a = container.parent('.table-responsive').find('.alert').hide();
        getGroupData(container,a);
    });
    
</script>