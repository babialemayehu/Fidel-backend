<div id='Edit' class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit event</h4>
        </div>
        <div class="modal-body">
            <div class="alert fade in">
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
            </div>
            <div class="responsive-form" ng-scope="">
                <form name="event" class='form' method="POST" action="/event" id='Event_form'  novalidate>
                    {{ csrf_field() }}
                   
                    <input id='eventId' hidden />
                    <div class="form-group">
                        <label class="label" for="event-type" >Event type</label>
                        <select name='type' class="form-control" id="event-type" ng-required="true" ng-model="event.type">
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label" for="discription">Discription</label>
                        <textarea name='discription' class="form-control" id="discription" form="Event_form" ng-model="event.description">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="label" for="event_date">Date of the Event</label>
                        <input type="text" class="form-control"  name="date" id="event_date" ng-required="true">
                    </div>
                    <div class="form-group">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6" style="padding:0 0.1em 0 0.1em">
                                    <label class="label" for="event_from">From</label>
                                    <input type="text" class="form-control" name="from" id="event_from"  ng-required="true" ng-model="event.from"/>
                                </div>
                                <div class="col-sm-6" style="padding:0 0.1em 0 0.1em">
                                    <label class="label" for="event-to">To</label>
                                    <input type="text" class="form-control" name="to" id="event_to"  ng-required="true" ng-model="event.to"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label" for="event_date">Target section</label>
                        <select name="session_id" class="form-control"  ng-required="true" ng-model="event.targetSection">
                            @forelse($current_sessions as $session)
                                <option value="{{$session->id}}">{{$session->course_name}}</option> 
                            @empty
                                <p class="text-center">No sessions</p>
                            @endforelse
                        </select>
                    </div> 
                    <div class='form-group text-right' style='border-top:1px solid #ccc;padding:1em 1em 1em 0px;margin-bottom:0px'>
                        <input type="submit" class="btn btn-success" value="Add" ng-model="event.submit" ng-disabled='event.$invalid'/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    </div>
<div id='View' class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm" style="margin-top: 10em;">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
                <p><strong>Host: </strong><span></span></p>
                <p><strong>Time: </strong><span></span></p>
                <p><strong>Discription: </strong><span></span></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
</div>
<script>
    onfocusOutValidation();

    $("#event_date").flatpickr({
        dateFormat: "Y-m-d",
    });
    var $upto =  $("#event_to").flatpickr({
        //"plugins": [new rangePlugin({ input: "#event_to"})]
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true
    });
    $("#event_from").flatpickr({
        //"plugins": [new rangePlugin({ input: "#event_to"})]
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
        minTime: "00:00",
        onOpen: function(selectedDates, dateStr, instance){
            if($("#event_to").val() == "")
                isEmpty = true; 
        },
        onValueUpdate:function(selectedDates, dateStr, instance){
            $upto.config.minTime = dateStr; 
            if(isEmpty)
                $upto.set(dateStr); 
        }
    });
   
</script>