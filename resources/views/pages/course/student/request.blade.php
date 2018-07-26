<div class="container-fluid" id="request">
    
    <div class="container-fluid">
        <form class="form" onsubmit="return newRequest(this)" >
            <h3>Request</h3>
            <div class="alert fade in" hidden>
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
            </div>
            {{csrf_field()}}
                <div class="form-group" id="requestForm">
                    <label class="small">Compose your request</label>
                    <textarea class="form-control" form="requestForm"></textarea>
                    <hr>
                    <label class="small">How mach vote do you want</label>
                    <select class="form-control">
                        <option value="50">50%</option>
                        <option value="75">75%</option>
                        <option value="100">100%</option>
                    </select>
                    <input type="submit" class="btn btn-success pull-right" value="Request" style="margin-top: 1em"/>
                </div>
        </form>
    </div>
    <br>
    <p>
        <center><a href="#request/{{$courseId}}" >View all Requests</a></center>
    </p>
</div>