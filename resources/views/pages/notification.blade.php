<div class='container' id=notification >
  <div class="row">
    
    <div class="col-md-8 {{($role != '2')?'col-md-offset-2':''}}">
      <div class="jumbotron">
          <h3>Notification<button class='pull-right btn btn-default' onclick="refreshNoti()"><i class="fa fa-refresh"></i></button></h3>
          <div class=container-fluid >
            <div class=row></div>
            <div class='row text-center'>
              <div class="alert fade in">
                  <i class="fa" aria-hidden="true"></i> 
                  <i></i>                
              </div>
              <button class='btn btn-default a'>Veiw more..</button>
            </div>
          </div>
      </div>
    </div>
    @if($role == '2')
    <div class="col-md-4">
      <div class="jumbotron">
          @include("pages.notification.sideBar_t")
      </div>
    </div>
    @endif
  </div>
  @if($role == '2')
    @include('pages.notification.confirm');
  @endif
</div>
<script>
  var noti = $('#notification .col-md-8>.jumbotron .container-fluid>.row').first();
  var notiUrl = '/notificationJson';
  var endedAt = 0;
  var container;

    bindEventToform();
    bindEventToEditForm();
    requestRenderNoti(noti,true);
    viewMoreEvent(noti);
    renderNotiTypeSelect($('#notification #noti-type'));
    bindNotiEditEvent();
    bindNotiDeleteEvent();
    notiInit();
    setTimeout(function(){
      //addNewNotiToDom(4);
    },3000);
</script>