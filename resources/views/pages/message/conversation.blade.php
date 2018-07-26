<div class="container" id="conversation">
    <div class="row">
        <div class="col-md-7">
            <div class="jumbotron">
                <h3>#name</h3>
                <div class="container-fluid" style="padding:0px;overflow:auto;max-height:900px;">
                    <?php $conversation = true; ?>
                    @if($conversation)
                        @for($i = 0;$i < 9;$i++)
                            @if($i%2 == 0)
                                <div class="well wall-1">
                                    akfkjadkfja
                                    <span class="small date">#date<i class="pull-right" style="color:#aaa">#status</i></span>
                                </div>
                            @else
                                <div class="well wall-2">
                                    dkfjakadfjadfdif
                                    <span class="small date">#date<i class="pull-right" style="color:rgba(255,255,255,0.9)">#status</i></span>
                                </div>
                            @endif
                        @endfor
                    @else
                        <h4 style="padding: 2em;">No conversation</h4>
                    @endif
                </div>
                <div class='resopncive-form'>
                    <form class="form">
                        {!! csrf_field() !!}
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class="col-sm-10" style="padding: 0px">
                                    <div class="form-group">
                                        <label for="conversation-massage" class="small">Compose massage </label>
                                        <textarea class="form-control" id="conversation-massage">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="padding: 0px">
                                    <input type="submit" class="btn btn-success pull-right" value="Send" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="jumbotron">
                <div class="container-fluid">
                    @include("pages.message.inbox");
                </div>
            </div>
        </div>
    </div>
</div>