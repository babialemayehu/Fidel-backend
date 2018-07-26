<div class="container">
    <h4>Cource Outline </h4>
    <div class="panel-group" id="chapters">
        {{-- @for($i = 0;$i < 7;$i++)
        <div class="panel panel-default">
            <div class="panel-heading ph">
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
        @endfor --}}
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class='panel-title'>Referance Books</h3 >
        </div>
        <div class='panel-body'>
        </div>
    </div>
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#cource-discription" style="margin-top: -0.48em;">
        Cource Discription
    </button>
    <div id="cource-discription" class="modal fade" role="dialog" style='padding:0px'>
    <div class="modal-dialog" style="max-height:500px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cource discription</h4>
            </div>
            <div class="modal-body">
                <p><strong>Title:</strong> Introduction to Programing</p>
                <p><strong>Cradit hr:</strong> 3</p>
                <p><strong>Objective hr:</strong> 
                    <ul>
                        @for($i=0;$i < 5;$i++)  
                            <li>ta nk kasdfj id fkadf fd k f</li>
                        @endfor
                    </ul>
                </p>
                <p><strong>Cource Discription:</strong> fkads dfk adf aksdfjasdf kadfj sadkfja sdkfj sadif
                    akdf kdsfj sdafkdsf sadkfjs sadskf adsfkjsadfiadfiadfk akdfdsakfj skasdf kadsfjks
                     dfjsdi fjsk
                </p>
                <p><strong>Instracor notes</strong> sadfkjads asdkfjdskjfioadsf ksdajfi sdfds kfjasid fsdkfjs
                    akdsfj fkasdfj dkfjsdfisd kfsdf kadfi kadfisdaf fksdajf dsfkjdsd idf adsifia sadfi dkfji
                    faisdfj sdifsd kfjasd ifsaskdf ni
            </div>
        </div>
    </div>
    </div>
</div>
<script>
$(document).ready(function(){
    renderChapters(_CHPTERS,$('#chapters'));
    $('.pb').hide();
    $('.ph').on('mouseover',function(){
        $('.pb').hide();
        $(this).next().show();
    });
});
</script>