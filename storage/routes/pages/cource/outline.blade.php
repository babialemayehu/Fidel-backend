<div class="container">
    <h4>Cource Outline</h4>
    <div class="panel-group" id="chapters">
        @for($i = 0;$i < 7;$i++)
        <div class="panel panel-default">
            <div class="panel-heading ph" style="border-bottom: 1px solid #ccc;background-color:rgba(77,240,186,0.05);" >
                <h4 class="panel-title">Capter {{$i}}</h4>
            </div>
            <div class="panel-body pb">
                <ul id="cource-nav" >
                    @for($j = 0;$j < 4;$j++)
                        <li>Sub chapter {{$j}}</li>
                    @endfor
                </ul>
            </div>
        </div>
        @endfor
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class='panel-title'>Referance Books</h3 >
        </div>
        <div class='panel-body'>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.pb').hide();
    $('.ph').on('mouseover',function(){
        $('.pb').hide();
        $(this).next().show();
    });
});
</script>