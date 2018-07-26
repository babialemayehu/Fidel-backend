<div class="container" id="manege" >
 <div class="col-lg-10 col-lg-offset-1"> 
    <div class="jumbotron">
        <ul class="nav nav-tabs">
            <li onclick="manegeTab('session')" id=session class='active' ><a>Session</a></li>
            <li onclick="manegeTab('group')" id=group ><a>Groups</a></li>
            <li onclick="manegeTab('course')" id=course ><a>Cource</a></li>
            
        </ul>
        <div class=view >
            {{-- <div class="tab-pane" ng-include="'/manege/session'" ng-show="tabs.session"></div>
            <div class="tab-pane" ng-include="'/manege/group'" ng-show="tabs.group"></div>
            <div class="tab-pane" ng-include="'/manege/course'" ng-show="tabs.course"></div> --}}
            <div id="sessionView">
                <section id="sessionSection">
                    <h3>
                        Sessions
                        <a href="#/manege/add/session"><button class='btn btn-lg btn-success pull-right' id='newSession'>New session</button></a>
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
                                        <div class="container">
                                            <form name="session" novalidate > 
                                                <div class="alert fade in">
                                                    <i class="fa" aria-hidden="true"></i> 
                                                    <i></i>                
                                                </div>
                                                {{csrf_field()}}
                                                <div class=form-group >
                                                    <label for=cource >Cource code</label>
                                                    <input class=form-control type=text name=cource ng-required='true' ng-model="session.cource"/>
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
                                                        <input type=submit class='btn btn-success' value=Create />
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
            </div>

            <div id="groupView">
                <h3>Groups
                    <a href="#/manege/add/group"><button class='btn btn-lg btn-success pull-right'>New Group</button></a>
                </h3>
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
                    {{-- @include('pages.manege.groupModal') --}}
                    @include('pages.notification.confirm')
                </div>
            </div>

            <div id='courceView'>
                <h3>Cources
                    <a href="#/manege/add/cource"><button class='btn btn-lg btn-success pull-right'>New Cource</button></a>
                </h3>
                <div class=container id=courcesList >
                    <div class="table-responsive">
                        <div class="alert fade in">
                                <i class="fa" aria-hidden="true"></i> 
                                <i></i>                
                            </div>
                        <table class="table table-striped table-hover" >
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Cradit<br>Hr</th>
                                <th>Ects</th>
                                <th>Delivery</th>
                                <th>weeks</th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="addCource" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" style='margin-top:.8em'>
                    <div class="modal-content" style='padding:1em'>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>    
                        <div class='modal-header'>
                            <h4>Add cource</h4>
                        </div>    
                        <div class="container">
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
                                            <input class="form-control" type="text" name=name />
                                        </div>
                                        <div class=container-fluid >
                                            <div class='row'>
                                                <div class='col-sm-6'>
                                                    <div class='form-group'>
                                                        <label for="code">Code</label>
                                                        <input class="form-control" type="text" name=code />
                                                    </div>
                                                </div>
                                                <div class='col-sm-6'>
                                                    <div class="form-group">
                                                        <label for=cradit_hr >Credit hr</label>
                                                        <input class="form-control" type="number" min=1 max=12 name=cradit_hr />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row >
                                                <div class='col-sm-6'>
                                                    <div class="form-group">
                                                        <label for=ECTS >ECTS</label>
                                                        <input class="form-control" type=number min=1 max=20 name=ECTS />
                                                    </div>
                                                </div>
                                                <div class='col-sm-6'>
                                                    <div class=form-group > 
                                                        <label for=weeks >Weeks</label>
                                                        <input class="form-control" type=number min=1 max=40 name=weeks /> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class=form-group > 
                                        <label for=delivery >Delivery</label>
                                        <select class="form-control" name=delivery > 
                                            <option value='parrel'>Parrel</option>
                                            <option value='serial'>Serial</option>
                                        </select>
                                    </div>
                                    <div class=form-group > 
                                        <label for=objective >Objective</label>
                                        <textarea class="form-control" name=objective > 
                                        </textarea>
                                    </div>
                                    <div class=form-group > 
                                        <label for=discription >Discription</label>
                                        <textarea class="form-control" name=discription > 
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
            </div>
            
        </div>
    </div>
 </div>
</div>

<script>        
    $(".view>div").hide().eq(0).show();
    
    //session
    var table = $('#sessions table').first();
    var tableAlert = table.parent('div').children('.alert').hide();
    requestRenderSession(table,tableAlert);

    //group
    var container = $('#groups>div>table');
    var a = container.parent('.table-responsive').find('.alert').hide();
    getGroupData(container,a);

    var deleteAlert = $('#confirm .alert').hide();
    var confirm = $('#confirm');
    var lodedMembers = [];
    confirm.find('#deleteNoti').attr('id','deleteGroup');
    confirm.find('h4').text('Do you really want to delete the group?');
    confirm.find('.fa-exclamation-triangle').next().text('The group will permanently deleted');

    
    var table = $('#courcesList table').first();
    var tableAlert = table.parent('div').children('.alert').hide()
    
    requestRenderCourse(table,tableAlert);
    
</script>