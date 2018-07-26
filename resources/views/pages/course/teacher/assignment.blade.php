<div id="assignmentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Make Assignment</h4>
      </div>
      <div class="modal-body">
        <form class="form" enctype="multipart/form-data" notvalidate >
            <div class="alert fade in">
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
            </div>
            {{ csrf_field() }}
            
            <div class="form-group">
                <div class='container-fluid'>
                    <div class='row'>
                        <div class="col-sm-6">
                            <label for="value" >Value<i class=small >(in %)</i></label>
                            <input type=number max=100 min=0 class="form-control" id="value" ng-required="true" ng-model="value"/>
                        </div>
                        <div class='col-sm-6'>
                            <label for="due" >Submition Date</label>
                            <input type='text' class="form-control" id="due" ng-required="true" ng-model="dueDate"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="evaluation">Evaluation stratagy:</label>
                <textarea class="form-control" id="evaluation" type="text" ng-required="true" ng-model="evaluation"></textarea>
            </div>
            <div class="form-group">
                <label for="inst">Instraction:</label>
                <textarea class="form-control" id="instraction" type="text" ng-required="true" ng-model="instraction"></textarea>
            </div>
            <div class="form-group">
                <label for="attachment">Upload attachment file: </label>
                <div id="attachment"></div>     
            </div>
            <input type="submit" class="form-control btn btn-success" value="Submit" />
        </form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
  <script>
    onfocusOutValidation();
    $("#due").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true, 
        minDate: 'today', 
        onValueUpdate: function(selectedDates, dateStr, instance){
            console.log(dateStr); 
        }
    });
</script>