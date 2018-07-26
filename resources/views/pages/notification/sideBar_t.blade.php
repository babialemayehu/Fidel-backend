<h3>Make Notification</h3>
        <div class="responsive-form" id=noti-opration >
         <div class="alert fade in">
                <i class="fa" aria-hidden="true"></i> 
                <i></i>                
          </div>
          <form class="form" id=addNoti >
            {{csrf_field()}}
            <input id=id hidden/>
            <div class='form-group'>
              <label for="noti-type">Type</label>
              <select name="noit-type" class='form-control' id="noti-type"></select>
            </div>
            <div class="form-group">
              <label for="noti-title">Title</label>
              <input type="text" name="noti-title" id='noti-title' class="form-control" />
            </div>
            <div class="form-group">
              <label for="noti-body">Notification</label>
              <textarea id="noti-body" form='addNoti' class="form-control" name="noti-body"></textarea>
            </div>
             <div class='form-group'>
              <label for="noti-target">Target:</label>
              <select name="noit-target" class='form-control' id='noti-target'>
                  @forelse($current_sessions as $session)
                      <option value="{{$session->id}}">{{$session->course_name}}</option> 
                  @empty
                      <option class="text-center">No sessions</option>
                  @endforelse
              </select>
            </div>
            <input type="submit" class="btn btn-success pull-right" value="Notify" />
          </form>
        </div>
        <div class="modal fade" role='dialog' id=editNotiModal >
          <div class='modal-dialog modal-sm'>
            <div class="modal-content">
              <div class='modal-header'>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Edit Notification</h3>
              </div>
                <div class=container >
                  {{csrf_field()}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>

        </script>