<div class="container-fluid" id="mark-list" >
<h4>Mark List</h4>
<div class="table-responsive" id='mark' >
    <table class="table table-bordered ">
        <tr id='head'>
            @for($i = 0;$i < 7;$i++)
                <td>{{$i}}%</td>
            @endfor
        </tr>
        <tr>
            @for($i = 0;$i < 7;$i++)
                <td>{{$i}}</td>
            @endfor
        </tr>
    </table>
</div>
</div>