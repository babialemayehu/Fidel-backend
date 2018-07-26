<div class="continer-fluid">
<h3 style="margin-bottom:0px">Recent Events</h3>
<div class="responcive-table" style="height: 14em;overflow: auto;cursor:pointer">
    <table class="table table-hover color">
        @for($i = 0;$i < 10;$i++)
            <tr>
                <td>#title</td>
                <td><b>50%</b> <i class='small'>Votes</i></td>
            </tr>
        @endfor
    </table>
</div>
<p style="padding:1em 0 0 0;">
    <center><a href="#request" >View all Requests</a></center>
</p>
</div>