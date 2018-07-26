<div class="container">
    <div class='row'>
        <div class="col-md-8 col-sm-offset-2 jumbotron">
            <h3>Add cource</h3>
           <div class="container" id="addCource">
                <form id='courseForm' > 
                    <div class="alert fade in">
                        <i class="fa" aria-hidden="true"></i> 
                        <i></i>                
                    </div>
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control" type="text" name=name ng-required="true" ng-model="title" />
                            </div>
                            <div class=container-fluid >
                                <div class='row'>
                                    <div class='col-sm-6'>
                                        <div class='form-group'>
                                            <label for="code">Code</label>
                                            <input class="form-control" type="text" name=code ng-required="true" ng-model="code"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class="form-group">
                                            <label for=cradit_hr >Credit hr</label>
                                            <input class="form-control" type="number" min=1 max=12 name=cradit_hr ng-required="true" ng-model="creditHr"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=row >
                                    <div class='col-sm-6'>
                                        <div class="form-group">
                                            <label for=ECTS >ECTS</label>
                                            <input class="form-control" type=number min=1 max=20 name=ECTS ng-required="true" ng-model="ects"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class=form-group > 
                                            <label for=weeks >Weeks</label>
                                            <input class="form-control" type=number min=1 max=40 name=weeks ng-required="true" ng-model="weeks"/> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class=form-group > 
                            <label for=delivery >Delivery</label>
                            <select class="form-control" name=delivery ng-required="true" ng-model="delivery"> 
                                <option value='parrel'>Parrel</option>
                                <option value='serial'>Serial</option>
                            </select>
                        </div>
                        <div class=form-group > 
                            <label for=objective >Objective</label>
                            <textarea class="form-control" name=objective ng-required="true" ng-model="objective"> 
                            </textarea>
                        </div>
                        <div class=form-group > 
                            <label for=discription >Discription</label>
                            <textarea class="form-control" name=discription ng-required="true" ng-model="discription"> 
                            </textarea>
                        </div>
                        </div>
                        <div class="col-md-6" id=addCourceOutline >
                            <h4>Cource outline</h4>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <div class='btn-group'>
                                <input type=submit class='btn btn-success' value=Add />
                            </div>
                            <div class='btn-group'>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script> 
    
    var courseAlert = $('#courseForm').children('.alert').hide();
    var container = $("#addCourceOutline");
    var table = $('#courcesList table').first();
    var tableAlert = table.parent('div').children('.alert').hide();
    
    var i = 0;
    for(i=0;i<5;i++)
        renderChapterInput(container,i);
    $('<button></button>',{class:'btn btn-default form-control',text:"Add sub-chapter",type:'button',style:'margin'}).appendTo(container);
    $(document).on('click','#addCourceOutline>.btn',function(){
        renderChapterInput(container,i++,true);
         if(i > 15)
            $(this).remove();
    });
    $(document).on('click','#sub>.btn',function(){
        if($(this).siblings().length > 10)
            $(this).remove()
        var n = $(this).prev('input').attr('name');
        $('<input />',{class:'form-control',type:'text',name:n}).insertBefore($(this));
        return false;
    });
    var shown = $('<i></i>');
    $(document).on('focus','#ch>input',function(){
        shown.slideUp(300);
        shown = $(this).parent('#ch').next().slideDown(300);
    });

    $('#addCource form').off('submit');
    $('#addCource form').on('submit',function(){
        courceRequest(); 
        return false;
    });
    $(document).on('click','#courcesList .fa-trash',function(){
        _delete('course',this);
    });
    requestRenderCourse(table,tableAlert);
    
    // VALIDATION

    onfocusOutValidation();
</script>