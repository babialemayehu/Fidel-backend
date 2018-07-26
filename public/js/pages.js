$(document).ready(function(){
    // MANEGE SESSION
// var sessionAlert = $('#createSession form>.alert').hide();
// var table = $('#sessions table').first();
// var tableAlert = table.parent('div').children('.alert').hide();
// $('#createSession select').val('');
// var container =$('#incExc').hide();
// $('#incExc>div').hide();
// $(document).on('focus','#createSession select',function(){
//     container.slideDown(500);
// });
// $(document).on('focus','#createSession form>div>input',function(){
//     $('#incExc').children('div').slideUp(200);
// });
//  $(document).on('focusout','#createSession select',function(){
//      if($(this).val() === null)
//         container.slideUp(500);
// });
// $(document).on('click','#incExc strong',function(){
//     $(this).siblings('div').slideUp(200);
//     $(this).next().toggle();
// });
// $(document).on('submit','#createSession',function(){
//     createSessionRequest();
//     return false;
// });
// createInput(5,'student','#incExc .container-fluid');
// requestRenderSession(table,tableAlert);
// MANAGE COURSE
// var courseAlert = $('#courseForm').children('.alert').hide();
// var container = $("#addCourceOutline");
// var table = $('#courcesList table').first();
// var tableAlert = table.parent('div').children('.alert').hide()
// var i = 0;
// for(i=0;i<5;i++)
//     renderChapterInput(container,i);
// $('<button></button>',{class:'btn btn-default form-control',text:"Add sub-chapter",type:'button',style:'margin'}).appendTo(container);
// $(document).on('click','#addCourceOutline>.btn',function(){
//     renderChapterInput(container,i++,true);
//      if(i > 15)
//         $(this).remove();
// });
// $(document).on('click','#sub>.btn',function(){
//     if($(this).siblings().length > 10)
//         $(this).remove()
//     var n = $(this).prev('input').attr('name');
//     $('<input />',{class:'form-control',type:'text',name:n}).insertBefore($(this));
//     return false;
// });
// var shown = $('<i></i>');
// $(document).on('focus','#ch>input',function(){
//     shown.slideUp(300);
//     shown = $(this).parent('#ch').next().slideDown(300);
// });
// $(document).ready(function(){
//     $('#addCource form').on('submit',function(){
//         courceRequest(); 
//         return false;
//     }); 
// });
// $(document).on('click','#courcesList .fa-trash',function(){
//     _delete('course',this);
// });
// requestRenderCourse(table,tableAlert);
// MANAGE GROUP
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
});
