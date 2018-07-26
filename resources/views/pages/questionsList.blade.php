 @forelse($questions as $question)
<div class="panel panel-default" style="box-shadow:1px 2px 3px rgba(0,0,0,0.3)">
    <div class="panel-heading" style="border-bottom:1px solid #ccc">
        <img src="img/icons/avatar-female.png" class="img-circle" style="width: 30px" />
        <span><b class='color'>{{ $question->student->firstName.' '.$question->student->lastName }}</b></span>
        <span class="pull-right">{{ $question->updated_at->diffForHumans() }}</span>
    </div>
    <div class="panel-body" id="question-panel" style="overflow: auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p>
                    {{$question->question}}
                    </p>      
                </div>
                <div class="col-md-6">
                    <h3>Answer</h3>
                    @if($question->is_answerd)
                        <p>
                            {{$question->answer}}
                        </p>
                    @else
                        <form class="form" id="answer" action="" onsubmit="return questionAnswerRequest(this)" name="answer_form">
                            {{csrf_field()}}
                            <input type="text" value="{{$question->id}}" hidden id="qustion_id">

                            <div class="alert fade in" hidden>
                                <i class="fa" aria-hidden="true"></i> 
                                <i></i>                
                            </div>
                            <div class="form-group container">
                                <textarea class="form-control" form='answer_form' id="answer">
                                </textarea>
                            </div>
                            <input type="submit" class="btn btn-success pull-right" value="Answer">
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@empty
<h3 class="text-danger text-center">No questions</h3>
@endforelse
@if($questions->hasMorePages())
    <center>
        <button id="view_more" class="btn btn-default" onclick='viewMoreList(this)' style="margin:5%">View more..
            <span hidden>{{($questions->hasMorePages())?$questions->nextPageUrl():''}}</span>
        </button>
    </center>
@endif