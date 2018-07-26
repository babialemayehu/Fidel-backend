<div id="submited-assignments" class="modal fade" role="dialog">
  <div class="modal-dialog" style='margin-top:1em;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Submited Assignments</h4>
      </div>
      <div class="modal-body">
            <div class='tab-content'>
              <div id='1' class='nav-panel fade in active'>
                <div class='responsive-table' style="height:500px;overflow:auto;" >
                  <table class='table table-striped table-hover'>
                    <thead>
                      <tr>
                          <th>id</th>
                          <th>note</th>
                          <th>Attachment</td>
                          <th>Mark</td>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      </div>
    </div>

  </div>
</div>
<script>
$(document).ready(function(){
  var tabs = $('#submited-assignments .nav li');//.removeClass('').addClass('.active');

  $(document).on('click','#submited-assignments .nav li',function(e){
    $this = $(this);
    id = $this.attr('id');
    $this.siblings('li').removeClass('.active');
    $this.addClass('.active');
    $('#submited-assignments tbody').load('/course/submitAssignment/'+id,function(data){
      console.log(data);
    });
  });
  $(document).on('change', '.mark',function(){
      var parentTr = $(this).parents('tr').first(); 
      var $change = [
        parentTr.find('#regId').first().text(), 
        parentTr.find('#markstruct').first().val()
      ]; 

      console.log($change);  
      var $value = $(this).val(); 
      var $token = parentTr.find("input[name=_token]").val(); 
      $.post('course/mark', { _token: $token, change: JSON.stringify($change), value:$value })
      .done(function(responce) {
          console.log(responce);
      }).fail(function(responce) {
          console.log('faild');
      })
  });
});
</script>