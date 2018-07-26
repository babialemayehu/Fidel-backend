<div class='container'>
<div class="row">
    <div class="col-md-8">
        <div class='jumbotron'>
            <h2 style="border-bottom: 1px solid #ccc;padding: 0.6em;" >Calander</h2>
            <div class="table-responsive" id="calander-table" >
                
                <div id="months" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active text-center">
                            <p>Aug</p>
                            <span>2017</span>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span aria-hidden="true"> &#10094;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span aria-hidden="true"> &#10095;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <table class="table table-bordered">
                    <tr>
                        @foreach($day_week as $day)
                            <th id="calander-header">{{$day}}</th>
                        @endforeach
                    </tr>
                 <?php $x=1;?>
                    @for($i = 1; $i<=5;$i++)
                        <tr >
                            @for($j = 1;$j <= 7;$j++)
                                <td  id='calander-date'>
                                    <div class="drop-down" style="width:100%" >
                                        <span style="padding: 0.8em;"><b>{{$x++}}</b></span><br>
                                        <span id="bottom-tri"class="pull-right small" style="padding-right: 0.4em;" >30</span>
                                        <div id="calander-dropdown-{{$j}}-{{$i}}" class="dropdown-menu dropdown-content">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </td>
                               
                            @endfor
                        </tr>
                    @endfor
                </table> 
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="jumbotron">
            <h3>side bar</h3>
        </div>
    </div>
</div>
</div>