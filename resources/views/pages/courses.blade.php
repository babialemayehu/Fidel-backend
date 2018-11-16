{!!'<script>var _CHPTERS='!!}
    {!!'JSON.parse(\''!!}{!!$chapters!!}{!!'\');'!!}
        {!! "session_id = ". $courseId. ";"!!}
{!!'</script>'!!} 
<div class='container-fluid'>
<div class="row" id="cources">
    <div class="col-md-2" style="padding: 0px;padding-left: 0.2em">
        @include('pages.course.instracterProfile')
    </div>
    <div class="col-md-6" style="padding-right: 0px">
        <div class="jumbotron">
            <h3 class="text-capitalize" style="border-bottom:1px solid #ccc;padding:0.7em;margin-bottom:1em" >
            {{$course_title}}</h3>
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
        <div class="jumbotron" id="question" >
           @include("pages.course.student.question")
        </div>
        <div class="jumbotron" id="request" >
            @include("pages.course.student.request")
        </div>
        @if($role == '2')
            <div class="jumbotron" id="request" >
                @include("pages.course.teacher.weeklySchedule")
            </div>
        @endif
    </div> 
</div>
</div>
@include('pages.course.teacher.assignment')
<script>
    var session_id = window.location.href.split('/').pop();
  $('document').ready(function(){ 
     var screen = window.screen.width;
    if(screen > 800){
        $("#hide,#view").addClass('lg-hide');
    }else{
        console.log(screen);
        $("#hide,#view").show();
        $('#more-view').addClass('sm-hide');
        $("#view").on('click',function(){
            $('#more-view').removeClass('sm-hide');
            $('#view').addClass('sm-hide');
        });
        $("#hide").on('click',function(){
            $('#more-view').addClass('sm-hide');
            $('#view').removeClass('sm-hide');
        });
    }
});