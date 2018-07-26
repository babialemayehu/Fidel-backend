<h3>Weekly schedule</h3>
<form class="form" method="POST" id="weaklySchedule" onsubmit="return submitWeaklySchedule(this)">
    <div class="alert fade in" hidden>
        <i class="fa" aria-hidden="true"></i> 
        <i></i>                
    </div>
    {{csrf_field()}}
    <label class='label'>Weak</label>
    <select class="form-control">
        <option value="0">Monday</option>
        <option value="1">Tuseday</option>
        <option value="2">Wednsday</option>
        <option value="3">Tursday</option>
        <option value="4">Friday</option>
        <option value="5">Saterday</option>
        <option value="6">Sanday</option>
    </select>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <label class="label">From</label>
                <input type="time" name="from" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="label">To</label>      
                <input type="time" name="to" class="form-control">                          
            </div>
        </div>
        <input type="submit" class="pull-right btn btn-success" value="Submit" style="margin-top: 6%">
    </div>
</form>