<h3>Add Event</h3>
<div class="responsive-form">
    <form class='form'>
        <div class="form-group">
            <label class="label" for="event-type">Event type</label>
            <select class="form-control" id="event-type" >
                <option value="class">Class</option>
                <option value="test">Test or Exam</option>
                <option value="assignment due">Assignment Due</option>
                <option value="presentation">Presentation</option>
            </select>
        </div>
        <div class="form-group">
            <label class="label" for="discription">Discription</label>
            <textarea class="form-control">
            </textarea>
        </div>
        <div class="form-group">
            <label class="label" for="event_date">Date of the Event</label>
            <input type="date" class="form-control" name="event_date" id="event_date">
        </div>
        <div class="form-group">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6" style="padding:0 0.1em 0 0.1em">
                        <label class="label" for="event_from">From</label>
                        <input type="time" class="form-control" name="time_from" id="event_from" />
                    </div>
                    <div class="col-sm-6" style="padding:0 0.1em 0 0.1em">
                        <label class="label" for="event-to">To</label>
                        <input type="time" class="form-control" name="time_upto" id="event_to" />
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-success form-control" value="Add" />
    </form>
</div>