    <h3>Messages</h3>
    @for($i = 0;$i < 5;$i++)
        <a href="#conversation" id="last-message">
            <div class="media" style="border-bottom: 1px solid #ccc">
                <div class="media-left media-middle">
                    <img class="img-circle" src="img/icons/avatar-male.png" style="width:30px"/>
                </div>
                <div class="media-body">
                    <p id="user-name" class="color" style="margin-bottom:2px"><b>#name</b></p>
                    <span class="small" style="color:#636b6f">Cource:<i> Introduction to programing</i>
                        <span style="color:#bbb;" class="pull-right"> #date</span>
                    </span>
                </div>
            </div>
        </a>
    @endfor
    <center style="padding: 1em;"><p><a href="#">View more</a></p></center>
