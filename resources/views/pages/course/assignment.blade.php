<div class="container" id='assignment'>
<h4>Assignment 
@if($role == '2')
    <button class="btn btn-success pull-right clearfix" data-toggle="modal" data-target="#assignmentModal" style="margin:-10px">New assignment</button></h4>
@endif
</h4>
<section>
    @forelse($assignments as $assignment)
        <article class='well {{($assignment->live)?"live":"disable"}}' >
            <header>Assignment {{$count--}} </header>
            {{$assignment->live}}
            <p><strong>Value: </strong>{{$assignment->value}}%</p>
            <p title="{{$assignment->due}}"><strong>Due: </strong>{{$assignment->dueHuman}}</p>
            <p><strong> Evaluation stratagy: </strong> {{$assignment->evaluation}}</p>
            <p><strong>Instraction: </strong>{{$assignment->instraction}}</p>
            <p><strong>Attachent: </strong>
                <a download href="{{$assignment->file[0]}}"><i class="fa fa-download color"></i> 
                {{ucfirst($assignment->file[1])}} </a><i class='small'>({{' '.$assignment->file[2].' '}})</i></p>
            <hr>
             <p style="cursor: pointer;">
            @if($role == '1')
                @if($assignment->live)               
                    <strong class="color pull-right" style="margin-top: -2em"  onclick="trigerSubmitForm(this,'#submit-assignment')">
                        <span hidden>{{$assignment->id}}</span>
                        <i class="fa fa-mail-reply text-right" style="font-size:1.5em;"></i><i>Submit</i>
                    </strong>
                @else
                    <em class="text-warning"><i>The due date is over</i></em>
                @endif
            @else
                    <strong class="color pull-right" style="margin-top: -2em"  onclick="trigerSubmitForm(this,'#submited-assignments')">
                        <span hidden>{{$assignment->id}}</span>
                        <i class="fa fa-mail-reply text-right" style="font-size:1.5em;"></i><i>Submitd Assignments</i>
                    </strong>      
            @endif
            </p>
        </article>
    @empty
        <center><strong class='text-danger'>There is no assignment</strong></center>
    @endforelse
</section>
@if($role == '2')
    @if($count =! 0 && false)
        <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#submited-assignments">
        Submited Assignments</button>
    @endif
    @include('pages.course.teacher.submitedAssignments')
    
@else
    @include('pages.course.student.submitAssignment')
@endif
</div>
<script>
    var makeForm = $('#assignmentModal').find('form');
    var formData = assignmentRequestEvent(makeForm.find('.alert').hide());
    $(document).on('submit','#assignmentModal form',function(e){
        e.preventDefault();
        formData.startUpload();
        return false;
    });
    var submitForm = $('#submit-assignment').find('form');
    var $data = submitAssignmentRequestEvent(submitForm.find('.alert').hide());
    $(document).on('submit','#submit-assignment form',function(e){
        e.preventDefault();
        $data.startUpload();    
        return false;
    });
</script>