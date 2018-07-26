<section id="sessionSection">
    <h3>
        Sessions
        
        <button class='btn btn-lg btn-success pull-right' id='newSession' data-toggle="modal" data-target='#createSession'>New session</button>
    </h3>
    
    <div class=container-fluid id=sessions >
        <div class="table-responsive">
            <div class="alert fade in">
                    <i class="fa" aria-hidden="true"></i> 
                    <i></i>                
                </div>
            <table class="table table-striped table-hover" >
                <tr>
                    <th>Group<br>title</th>
                    <th>Cource</th>
                    <th>Instractor<br>name</th>
                    <th>Acadamic<br>year</th>
                    <th></th>
                </tr>
            </table>
        </div>
        <div id="createSession" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" style='padding:1em'>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>    
                    @if($isgroupNamesEmpty)
                        <div class='alert alert-warning text-center' >
                            <strong>You havent created groups yet.<br>please create group</strong><br>
                            <i class=small >Arrenge class in group</i><br>
                        </div>
                    @else
                        <div class='modal-header'>
                            <h4>Add Sessions</h4>
                        </div>    
                        <div class="container" ng-controller="ctrl">
                            <form name="session" novalidate > 
                                <div class="alert fade in">
                                    <i class="fa" aria-hidden="true"></i> 
                                    <i></i>                
                                </div>
                                {{csrf_field()}}
                                @{{3+5}}
                                <div class=form-group >
                                    <label for=cource >Cource code</label>
                                    <input class=form-control type=text name=cource ng-required='true' ng-model="session.cource"/>
                                    <span ng-bind="session.cource"></span>
                                </div>
                                <div class=form-group >
                                    <label for=year >Acadamic year</label>
                                    <input class=form-control min=1 max=8 name=year ng-required='true' ng-model="session.year"/>
                                </div> 
                                <div class=form-group > 
                                    <label for=group >Group </label>
                                    <select class=form-control name=group ng-required='true' ng-model='session.group'> 
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
                                    <input class=form-control type=text name=teacher ng-required='true' ng-model="session.teacher"/>
                                </div>
                                <div class=form-group > 
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for=instractor >Start Date </label>
                                                <input class=form-control type=date name=start ng-required='true' ng-model="session.start"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for=instractor >End Date </label>
                                                <input class=form-control type=date name=end ng-required='true' ng-model="session.end"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-justified">
                                    <div class='btn-group'>
                                        <input type=submit class='btn btn-success' value=Create ng-model='session.submit'/>
                                    </div>
                                    <div class='btn-group'>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<script> 
    
    var sessionAlert = $('#createSession form>.alert').hide();
    var table = $('#sessions table').first();
    var tableAlert = table.parent('div').children('.alert').hide();
    $('#createSession select').val('');
    var container =$('#incExc').hide();
    $('#incExc>div').hide();
    $(document).on('focus','#createSession select',function(){
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
    $('#createSession').off('submit');
    $(document).on('submit','#createSession',function(){
        createSessionRequest();
        return false;
    });
    createInput(5,'student','#incExc .container-fluid');
    requestRenderSession(table,tableAlert);
    
</script>
