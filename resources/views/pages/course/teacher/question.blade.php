<div class="continer-fluid">
    <h3 style="margin-bottom:0px" >Asked Questions</h3>
    <div class="table-responcive" style="height: 14em;overflow: auto;cursor:pointer">
        <table class="table table-hover color">
            @for($i = 0;$i < 9;$i++)
                <tr>
                    <td><img class="img-circle" src="img/icons/avatar-female.png" style="width:20px"/></td>
                    <td>#user name</td>
                    <td>#date</td>
                </tr>
            @endfor
        </table>
    </div>
    <p style="padding:1em 0 0 0;">
        <center><a href="#questions" >View all Questions</a></center>
    </p>
</div>