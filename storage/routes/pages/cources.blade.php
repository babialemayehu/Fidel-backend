<div class='container-fluid'>
<div class="row" id="cources">
    <div class="col-md-2" style="padding: 0px;padding-left: 0.2em">
        <div class="jumbotron " id='teacher-mini-profile' style="padding: 0.5em" >
            <center>   
                <h5> Instracter profile</h5>
                <img class='img-circle' src="/img/icons/avatar-male.png" 
                style='width: 100px;margin: 1em;'/>
            </center>
            <ul style="list-style: none">
                <li><b>#name</b></li>
                <li>#education</li>
                <li>#contact</li>
                <li>#biro</li>
                <li>#rating</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6" style="padding-right: 0px">
        <div class="jumbotron">
            <h3 class="text-capitalize" style="border-bottom:1px solid #ccc;padding:0px 0px 0.7em 0px;margin-bottom:1em" >
            #cource title</h3>
            <ul class="nav nav-tabs" id="cource-nav" >
                <li ng-click="viewTab('outline')" id="outline" class="active" ><a>Outline</a></li>
                <li ng-click="viewTab('shelf')" id="shelf" ><a>Shelf</a></li>
                <li ng-click="viewTab('mark')" id="mark" ><a>Mark</a></li>
                <li ng-click="viewTab('assignment')" id="assignment" ><a>Assignment</a></li>
            </ul>
            <div class="view" ng-bind-html="viewHtml(view)" ></div>
        </div>
    </div>
    <div class="col-md-4" style="padding-right: 0.7em">
        <div class="jumbotron">
            <h3>Question</h3>
            <span class="small">Compose your Question</span>
            <div class="form-group">
                <textarea class="form-control"></textarea>
            </div>
            <button class='btn btn-success pull-right'>Ask</button>
        </div>
        <div class="jumbotron">
            <h3>Request</h3>
            <span class="small">Compose your Request</span>
            <div class="form-group">
                <textarea class="form-control"></textarea>
                <label for='required-vote' class="small">How mach vote do you want?</label>
                <select class="form-control" id='required-vote'>
                    <option value='50'>50%</option>
                    <option value='75'>75%</option>
                    <option value='100'>100%</option>
                </select>
                <button class='btn btn-success pull-right' style="margin-top: 1em">Request</button>
            </div>
        </div>
    </div>
</div>
</div>