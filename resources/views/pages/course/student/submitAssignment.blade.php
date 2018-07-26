<div id="submit-assignment" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Submit Assignment</h4>
      </div>
      <div class="modal-body">
        <form class="form">
             <div class="alert fade in">
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
            </div>
            {{csrf_field()}}
            <span id="id" hidden></span>
            <div class="form-group">
                <label for="upload" >Upload your assignment 
                <span class=small > (if you have multiple files, compress it with zip file)</span></label>
                <div class=container-fluid id=upload></div>
            </div>
            {{--  <div class='form-group'> 
                <label for='assignment'> Assignment</label>
                <select class='form-control'>
                    @for($i = 1;$i < 4 ;$i++)
                        @if($assignments[$i-1]->live)
                            <option value="{{$assignments[$i-1]->id}}">Assignment {{$i}}</option>
                        @endif
                    @endfor 
                </select>
            </div>  --}}
            <div class="form-group">
                <label for="note">Write some note <small class='small'>(optional)</small></label>
                <textarea class="form-control" id="note" type="text" ></textarea>
            </div>
            <input type="Submit" class="form-control btn btn-success" value="Submit" />
        </form>
      </div>
    </div>

  </div>
</div>
<script>
  
</script> 