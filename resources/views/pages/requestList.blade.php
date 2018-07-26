@forelse($requests as $request)
    <div class="panel panel-default">
        <div class="panel-body" id="question-panel" style="padding:5%">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{$request->request}}
                        </p>  
                        <hr>    
                        <span class="small">{{$request->updated_at->diffForHumans()}}</span>
                    </div>
                    <div class="col-md-6">

                        <center style="padding: 0.3em 1.3em 1em 1.3em">
                            <span hidden>{{$request->numberOfStudents}}</span>
                            <h2 style="display:inline;padding-left:0px;">{{$request->currentVotePersent*100}}%</h2>
                            <i> Vote(<span>{{$request->vote()->count()}}</span>)</i>
                            <button style="display:block" class="btn {{($request->isVoted)? 'disabled btn-default':'vote  btn-success'}}">
                                <i class="fa fa-thumbs-up"></i><b>Vote</b>
                                {{csrf_field()}}
                                <input id='request_id' hidden value={{$request->id}} />
                            </button>
                        </center>
                        @if($request->responce)
                            <p>
                                {{$request->responce}}
                            </p>
                        @elseif($role == '2')
                            <form class="form">
                                <div class="form-group">
                                    <label class="label small" for='reponce'>Compose your responce</label>
                                    <textarea class="form-control">
                                    </textarea>
                                </div>
                                <button class="btn btn-success pull-right" >Answer</button>
                            </form>
                        @else
                            <p class="lead text-center">Waiting responce...</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <p class="text-danger">There is no requests</p>
@endforelse
@if($requests->hasMorePages())
    <center>
        <button id="view_more" class="btn btn-default" onclick='viewMoreList(this)' style="margin:5%">View more..
            <span hidden>{{($requests->hasMorePages())?$requests->nextPageUrl():''}}</span>
        </button>
    </center>
@endif
<script>
   vote(); 
</script>