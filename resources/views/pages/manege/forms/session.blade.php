<div class="container">
    <div class='row'>
        <div class="col-md-8 col-sm-offset-2 jumbotron">
            <h3>Add Sessions</h3>   
            <div class="container" id="createSession">
                <form name="session" novalidate > 
                    <div class="alert fade in">
                        <i class="fa" aria-hidden="true"></i> 
                        <i></i>                
                    </div>
                    {{csrf_field()}}
                    <div class=form-group >
                        <label for=cource >Cource code</label>
                        <input class=form-control type=text name=cource ng-required='true' ng-model="cource"/>
                    </div>
                    <div class=form-group >
                        <label for=year >Acadamic year</label>
                        <input type='number' class='form-control' min='1' max='8' name='year' ng-required='true' ng-model="year"/>
                    </div> 
                    <div class=form-group > 
                        <label for=group >Group </label>
                        <select class=form-control name=group ng-required='true' ng-model='group'> 
                            @forelse($groupNames as $groupId => $groupName)
                                <option class='text-capitalize' value={{$groupId}}>{{$groupName}}</option>
                            @empty
                                <p> You have no groups please create agroup </p>
                            @endforelse
                        </select>
                    </div>
                    <div class=container-fluid id=incExc > 
                        <strong class='bg-success'>Include student </strong>
                        <div class='container-fluid' id=inc ></div>
                        <strong class='bg-danger'>Exclude student </strong>
                        <div class='container-fluid' id=exc ></div>
                    </div>
                    <div class=form-group > 
                        <label for=instractor >Instractor </label>
                        <input class=form-control type=text name=teacher ng-required='true' ng-model="teacher"/>
                    </div>
                    <div class="form-group">
                        <label for=instractor >Start Date </label>
                        <input class=form-control type="text" name=range ng-required='true' ng-model="start"/>
                    </div>
                    <div class=form-group hidden > 
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for=instractor >Start Date </label>
                                    <input class=form-control type="text" name=start ng-required='true' ng-model="start"/>
                                </div>
                                <div class="col-md-6">
                                    <label for=instractor >End Date </label>
                                    <input class=form-control type="text" name=end ng-required='true' ng-model="end"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group btn-group-justified">
                        <div class='btn-group'>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                        </div>
                        <div class='btn-group'>
                            <input type=submit class='btn btn-success' value=Create />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            
<script> 
    
    var sessionAlert = $('#createSession form>.alert').hide();
    
    $('#createSession select').val('');
    var container =$('#incExc').hide();
    //$('#incExc>div').hide();
    $(document).on('change','#createSession select',function(){
        container.slideDown(500);
    });
    $(document).on('focus','#createSession form>div>input',function(){
        $('#incExc').children('div').slideUp(200);
    });
     $(document).on('focusout','#createSession select',function(){
         if($(this).val() === null)
            container.slideUp(500);
    });
    $(document).on('click','#incExc strong',function(){
        $(this).siblings('div').slideUp(200);
        $(this).next().toggle();
    });
    $("form[name='session']").on('submit',function(){
        createSession($(this));
        return false;
    });
    createInput(5,'student','#incExc .container-fluid');
    
    // VALIDATION

    onfocusOutValidation(); 
    
    var $rang = $("[name=range]");

    $rang.flatpickr({
        dateFormat: "Y-m-d",
        mode: 'range',
        minDate: 'today',
    }); 
/*    
    var $startDateInput = $("[name=start]");
    var $endDateInput = $("[name=end]");
    var $startDate; 
    var $endDate = $endDateInput.flatpickr({
        dateFormat: "Y-m-d",
        minDate: "today",
        onOpen: function(selectedDates, dateStr, instance){
            if($startDateInput.val() == "")
                isEmpty = true; 
        },
        onValueUpdate:function(selectedDates, dateStr, instance){
            console.log()
            $startDate.set("maxDate", dateStr); 
            if(isEmpty){
                $startDate.setDate(dateStr); 
                $startDateInput.addClass(".ng-untouched"); 
                $startDateInput.next(".error").remove();
            }
        }
    }); 
    $startDate = $startDateInput.flatpickr({
        dateFormat: "Y-m-d",
        minDate: "today", 
        onOpen: function(selectedDates, dateStr, instance){
            if($endDateInput.val() == "")
                isEmpty = true; 
        },
        onValueUpdate:function(selectedDates, dateStr, instance){
            $endDate.set("minDate", dateStr); 
           if(isEmpty){
                $endDate.setDate(dateStr); 
                $endDateInput.addClass(".ng-untouched"); 
                $endDateInput.next(".error").remove(); 
            }
        }
    }); 
    */
</script>