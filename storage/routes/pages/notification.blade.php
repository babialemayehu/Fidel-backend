<?php $icons = ['exam.png','class.png','result.png','assignment.png','cost.png','result.png'];?>
<div class='container'>
<div class="row">
  <div class="col-md-8">
    <div class="jumbotron">
        <h2>Notification</h2>
        @for($i = 0;$i < 4;$i++)
          <h4 class="small">#date</h4>
          <div class="panel-group">
          @foreach($icons as $icon)
               <div class="panel panel-default">
                  <div class="media">
                    <div class="media-left media-middle">
                      <img src=/img/icons/{{$icon}} class="media-object" style="width:60px" >
                    </div>
                    <div class="media-body" style="padding: 0.5em">
                      <h4 class="media-heading"><b>#title</b></h4>
                        <span id="noti-deteil" style="font-size: 1em"> noti deteil fdsaaaaaaa aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaa aaaa aaaaaaaaaaa aaaaaa aaaaaaaaa aaa a a a aaaaa aaaaa aaaaaaa aa aa aaaaa aaaaaa aaaaaaa aaaaaa aaa aaaaa aaaaa</span><br>
                        <span id="noti-from" style="font-size: 0.9em;color: #aaa" >#from</span>
                    </div>
                  </div>
                </div>
          @endforeach
          </div>
          <hr>
        @endfor
        <center>
          <ul class="pagination pagination-md">
            <li><a href="#"><< privious </a></li>
            @for($i=0; $i < 5;$i++)
             <li><a href="#">{{$i+1}}</a></li>
            @endfor
            <li><a href="#">next >></a></li>
           </ul>
        </center>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="jumbotron">
        <h4>Side bar</h4>
    </div>
  </div>
</div>
</div>